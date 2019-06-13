<?php

namespace App\Http\Controllers;

use App\Models\Support\NetworkConfiguration;
use App\Models\Support\SwitchportInformation;
use Exception;
use Illuminate\Http\Request;

class NetworkConfigurationController extends Controller
{
    /**
     * Display a listing of the network configurations.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $netConfigs = NetworkConfiguration::with('switchportinformation')->paginate(25);

        return view('network_configurations.index', compact('netConfigs'));
    }

    /**
     * Show the form for creating a new network configuration.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $portInfo = SwitchportInformation::pluck('id', 'id')->all();

        return view('network_configurations.create', compact('portInfo'));
    }

    /**
     * Store a new network configuration in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $this->getData($request);

            NetworkConfiguration::create($data);

            return redirect()->route('network_configurations.network_configuration.index')->with('success_message', 'Network Configuration was successfully added!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Get the request's data from the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    protected function getData(Request $request)
    {
        $rules = [
            'switchport_information_id' => 'required',
            'configuration'             => 'required|string|min:1|max:4294967295',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified network configuration.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $netConfig = NetworkConfiguration::with('switchportinformation')->findOrFail($id);

        return view('network_configurations.show', compact('netConfig'));
    }

    /**
     * Show the form for editing the specified network configuration.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $netConfig = NetworkConfiguration::findOrFail($id);
        $portInfo  = SwitchportInformation::pluck('id', 'id')->all();

        return view('network_configurations.edit', compact('netConfig', 'portInfo'));
    }

    /**
     * Update the specified network configuration in the storage.
     *
     * @param                          $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        try {
            $data = $this->getData($request);

            $netConfig = NetworkConfiguration::findOrFail($id);
            $netConfig->update($data);

            return redirect()->route('network_configurations.network_configuration.index')->with('success_message', 'Network Configuration was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified network configuration from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $netConfig = NetworkConfiguration::findOrFail($id);
            $netConfig->delete();

            return redirect()->route('network_configurations.network_configuration.index')->with('success_message', 'Network Configuration was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}

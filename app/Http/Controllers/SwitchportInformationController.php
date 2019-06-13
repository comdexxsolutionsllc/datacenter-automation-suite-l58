<?php

namespace App\Http\Controllers;

use App\Models\Support\NetworkDevice;
use App\Models\Support\SwitchportInformation;
use Exception;
use Illuminate\Http\Request;

class SwitchportInformationController extends Controller
{
    /**
     * Display a listing of the switchport information.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $portInfo = SwitchportInformation::with('networkdevice')->paginate(25);

        return view('switchport_informations.index', compact('portInfo'));
    }

    /**
     * Show the form for creating a new switchport information.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $networkDevices = NetworkDevice::pluck('asset_number', 'id')->all();

        return view('switchport_informations.create', compact('networkDevices'));
    }

    /**
     * Store a new switchport information in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $this->getData($request);

            SwitchportInformation::create($data);

            return redirect()->route('switchport_informations.switchport_information.index')->with('success_message', 'Switchport Information was successfully added!');
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
            'network_device_id' => 'required',
            'switchport_number' => 'required|numeric|min:-2147483648|max:2147483647',
            'category'          => 'required',
            'port_speed'        => 'required',
            'connection_type'   => 'required',
            'poe_status'        => 'required',
            'stackable_status'  => 'required',
            'duplex_type'       => 'required',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified switchport information.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $portInfo = SwitchportInformation::with('networkdevice')->findOrFail($id);

        return view('switchport_informations.show', compact('portInfo'));
    }

    /**
     * Show the form for editing the specified switchport information.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $portInfo       = SwitchportInformation::findOrFail($id);
        $networkDevices = NetworkDevice::pluck('asset_number', 'id')->all();

        return view('switchport_informations.edit', compact('portInfo', 'networkDevices'));
    }

    /**
     * Update the specified switchport information in the storage.
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

            $portInfo = SwitchportInformation::findOrFail($id);
            $portInfo->update($data);

            return redirect()->route('switchport_informations.switchport_information.index')->with('success_message', 'Switchport Information was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified switchport information from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $portInfo = SwitchportInformation::findOrFail($id);
            $portInfo->delete();

            return redirect()->route('switchport_informations.switchport_information.index')->with('success_message', 'Switchport Information was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}

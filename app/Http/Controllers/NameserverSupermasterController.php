<?php

namespace App\Http\Controllers;

use App\Models\Nameserver\Supermaster;
use Exception;
use Illuminate\Http\Request;

class NameserverSupermasterController extends Controller
{

    /**
     * Display a listing of the nameserver supermasters.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $nsSupermasters = Supermaster::paginate(25);

        return view('nameserver_supermasters.index', compact('nsSupermasters'));
    }

    /**
     * Show the form for creating a new nameserver supermaster.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('nameserver_supermasters.create');
    }

    /**
     * Store a new nameserver supermaster in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $this->getData($request);

            Supermaster::create($data);

            return redirect()->route('nameserver_supermasters.nameserver_supermaster.index')->with('success_message', 'Nameserver Supermaster was successfully added!');
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
            'ip'         => 'required|string|min:1|max:45',
            'nameserver' => 'required|string|min:1|max:255',
            'account'    => 'required|numeric|string|min:1|max:255',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified nameserver supermaster.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $nsSupermaster = Supermaster::findOrFail($id);

        return view('nameserver_supermasters.show', compact('nsSupermaster'));
    }

    /**
     * Show the form for editing the specified nameserver supermaster.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $nsSupermaster = Supermaster::findOrFail($id);

        return view('nameserver_supermasters.edit', compact('nsSupermaster'));
    }

    /**
     * Update the specified nameserver supermaster in the storage.
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

            $nsSupermaster = Supermaster::findOrFail($id);
            $nsSupermaster->update($data);

            return redirect()->route('nameserver_supermasters.nameserver_supermaster.index')->with('success_message', 'Nameserver Supermaster was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified nameserver supermaster from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $nsSupermaster = Supermaster::findOrFail($id);
            $nsSupermaster->delete();

            return redirect()->route('nameserver_supermasters.nameserver_supermaster.index')->with('success_message', 'Nameserver Supermaster was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}

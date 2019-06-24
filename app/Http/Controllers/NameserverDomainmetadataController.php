<?php

namespace App\Http\Controllers;

use App\Models\Nameserver\Domain;
use App\Models\Nameserver\Domainmetadata;
use Exception;
use Illuminate\Http\Request;

class NameserverDomainmetadataController extends Controller
{

    /**
     * Display a listing of the nameserver domainmetadatas.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $domainMetadata = Domainmetadata::with('domain')->paginate(25);

        return view('nameserver_domainmetadatas.index', compact('domainMetadata'));
    }

    /**
     * Show the form for creating a new nameserver domainmetadata.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $domains = Domain::pluck('id', 'id')->all();

        return view('nameserver_domainmetadatas.create', compact('domains'));
    }

    /**
     * Store a new nameserver domainmetadata in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $this->getData($request);

            Domainmetadata::create($data);

            return redirect()->route('nameserver_domainmetadatas.nameserver_domainmetadata.index')->with('success_message', 'Nameserver Domainmetadata was successfully added!');
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
            'domain_id' => 'required',
            'kind'      => 'nullable|string|min:0|max:255',
            'content'   => 'nullable',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified nameserver domainmetadata.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $domainMetadata = Domainmetadata::with('domain')->findOrFail($id);

        return view('nameserver_domainmetadatas.show', compact('domainMetadata'));
    }

    /**
     * Show the form for editing the specified nameserver domainmetadata.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $domainMetadata = Domainmetadata::findOrFail($id);
        $domains = Domain::pluck('id', 'id')->all();

        return view('nameserver_domainmetadatas.edit', compact('domainMetadata', 'domains'));
    }

    /**
     * Update the specified nameserver domainmetadata in the storage.
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

            $domainMetadata = Domainmetadata::findOrFail($id);
            $domainMetadata->update($data);

            return redirect()->route('nameserver_domainmetadatas.nameserver_domainmetadata.index')->with('success_message', 'Nameserver Domainmetadata was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified nameserver domainmetadata from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $domainMetadata = Domainmetadata::findOrFail($id);
            $domainMetadata->delete();

            return redirect()->route('nameserver_domainmetadatas.nameserver_domainmetadata.index')->with('success_message', 'Nameserver Domainmetadata was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}

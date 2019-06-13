<?php

namespace App\Http\Controllers;

use App\Models\GENERATED\Account;
use App\Models\GENERATED\Stripe;
use App\Models\Roles\Whiteglove;
use Exception;
use Illuminate\Http\Request;

class WhiteGloveController extends Controller
{
    /**
     * Display a listing of the white gloves.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $whitegloves = Whiteglove::with('account', 'stripe')->paginate(25);

        return view('white_gloves.index', compact('whitegloves'));
    }

    /**
     * Show the form for creating a new white glove.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $accounts = Account::pluck('id', 'id')->all();
        $stripes  = Stripe::pluck('id', 'id')->all();

        return view('white_gloves.create', compact('accounts', 'stripes'));
    }

    /**
     * Store a new white glove in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $this->getData($request);

            Whiteglove::create($data);

            return redirect()->route('white_gloves.white_glove.index')->with('success_message', 'White Glove was successfully added!');
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
            'account_id'        => 'required|numeric|min:0',
            'name'              => 'required|string|min:1|max:255',
            'username'          => 'required|string|min:1|max:255',
            'email'             => 'required|string|min:1|max:255',
            'email_verified_at' => 'nullable|date_format:j/n/Y g:i A',
            'password'          => 'required|string|min:1|max:255',
            'stripe_id'         => 'nullable',
            'card_brand'        => 'nullable|string|min:0|max:255',
            'card_last_four'    => 'nullable|string|min:0|max:255',
            'trial_ends_at'     => 'nullable|date_format:j/n/Y g:i A',
            'cover'             => 'nullable|string|min:0|max:255',
            'avatar'            => 'nullable|file|string|min:0|max:255',
            'remember_token'    => 'nullable|string|min:0|max:100',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified white glove.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $whiteglove = Whiteglove::with('account', 'stripe')->findOrFail($id);

        return view('white_gloves.show', compact('whiteglove'));
    }

    /**
     * Show the form for editing the specified white glove.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $whiteglove = Whiteglove::findOrFail($id);
        $accounts   = Account::pluck('id', 'id')->all();
        $stripes    = Stripe::pluck('id', 'id')->all();

        return view('white_gloves.edit', compact('whiteglove', 'accounts', 'stripes'));
    }

    /**
     * Update the specified white glove in the storage.
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

            $whiteglove = Whiteglove::findOrFail($id);
            $whiteglove->update($data);

            return redirect()->route('white_gloves.white_glove.index')->with('success_message', 'White Glove was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified white glove from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $whiteglove = Whiteglove::findOrFail($id);
            $whiteglove->delete();

            return redirect()->route('white_gloves.white_glove.index')->with('success_message', 'White Glove was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}

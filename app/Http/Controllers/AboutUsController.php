<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\Website\AboutUs;
use Illuminate\View\View;

class AboutUsController extends Controller
{

    /**
     * AboutUsController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth:employee'], ['only' => ['update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $aboutus = AboutUs::all();

        return view('static-site.aboutus', compact('aboutus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Website\AboutUs $employee
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(AboutUs $employee): View
    {
        $this->middleware(['auth:employee']);

        return view('static-site.forms.aboutus', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Website\AboutUs             $employee
     * @param \App\Http\Requests\UpdateAboutUsRequest $request
     *
     * @return mixed
     */
    public function update(AboutUs $employee, UpdateAboutUsRequest $request)
    {
        return $request->persist($employee);
    }
}

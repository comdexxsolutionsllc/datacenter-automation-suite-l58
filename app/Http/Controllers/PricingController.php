<?php

namespace App\Http\Controllers;

use App\Models\Website\Pricing;
use Illuminate\View\View;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $pricing = Pricing::all();

        return view('static-site.pricing', compact('pricing'));
    }
}

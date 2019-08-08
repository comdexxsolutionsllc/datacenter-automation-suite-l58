<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Request;

abstract class ApiController extends Controller
{

    use HasLinks;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    abstract public function index();

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    abstract public function store(Request $request);

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    abstract public function show($id);

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    abstract public function update(Request $request, $id);

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    abstract public function destroy($id);
}

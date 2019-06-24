<?php

namespace App\Http\Controllers;

use App\Models\Support\PingResult;
use App\Transformers\PingResultsTransformer;
use Illuminate\Support\Facades\Request;

class PingResultAPIController extends Controller
{

    /**
     * @return \App\Models\Support\PingResult[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return PingResult::all();
    }

    /**
     * @param $id
     *
     * @return \App\Models\Support\PingResult|\App\Models\Support\PingResult[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function show($id)
    {
        return (new PingResultsTransformer)->transform(PingResult::with('device')->find($id));
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return PingResult::create($request->all());
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     * @param                                     $id
     *
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $pingResult = PingResult::findOrFail($id);
        $pingResult->update($request->all());

        return $pingResult;
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     * @param                                     $id
     *
     * @return int
     */
    public function delete(Request $request, $id)
    {
        $pingResult = PingResult::findOrFail($id);
        $pingResult->delete();

        return 204;
    }
}

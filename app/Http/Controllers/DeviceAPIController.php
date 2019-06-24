<?php

namespace App\Http\Controllers;

use App\Models\Support\Device;
use App\Transformers\DeviceTransformer;
use App\Transformers\PingResultsTransformer;
use Illuminate\Support\Facades\Request;

class DeviceAPIController extends Controller
{

    /**
     * @return \App\Models\Support\Device[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Device::all();
    }

    /**
     * @param $id
     *
     * @return \App\Models\Support\Device|\App\Models\Support\Device[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function show($id)
    {
        return array_merge((new DeviceTransformer)->transform($device = Device::find($id)), [
            'pingResults' => $device->pingResults->map(function ($pingResult) {
                return (new PingResultsTransformer)->transform($pingResult);
            }),
        ]);
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return Device::create($request->all());
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     * @param                                     $id
     *
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);
        $device->update($request->all());

        return $device;
    }

    /**
     * @param \Illuminate\Support\Facades\Request $request
     * @param                                     $id
     *
     * @return int
     */
    public function delete(Request $request, $id)
    {
        $device = Device::findOrFail($id);
        $device->delete();

        return 204;
    }
}

<?php

namespace App\Transformers;

use App\Models\Support\Device;
use Flugg\Responder\Transformers\Transformer;

class DeviceTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = ['pingResults' => PingResultsTransformer::class];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param \App\Models\Support\Device $device
     *
     * @return array
     */
    public function transform(Device $device)
    {
        return [
            'id'           => (int) $device->id,
            'device_name'  => $device->name,
            'ip_address'   => (string) $device->ip,
            'active_state' => (boolean) $device->is_active,
        ];
    }
}

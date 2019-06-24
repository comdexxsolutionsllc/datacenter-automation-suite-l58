<?php

namespace App\Transformers;

use App\Models\Support\NetworkDevice;
use Flugg\Responder\Transformers\Transformer;

class NetworkDeviceTransformer extends Transformer
{

    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param \App\Models\Support\NetworkDevice $networkDevice
     *
     * @return array
     */
    public function transform(NetworkDevice $networkDevice)
    {
        return [
            'id' => (int) $networkDevice->id,
        ];
    }
}

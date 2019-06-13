<?php

namespace App\Transformers;

use App\Models\Support\PingResult;
use Flugg\Responder\Transformers\Transformer;

class PingResultsTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = ['device' => DeviceTransformer::class];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param \App\Models\Support\PingResult $pingResult
     *
     * @return array
     */
    public function transform(PingResult $pingResult)
    {
        return [
            'id'            => (int) $pingResult->id,
            'run_date'      => $pingResult->run_date,
            'timeout'       => $pingResult->timeout,
            'response_time' => $pingResult->response_time,
            'status'        => $pingResult->status,
        ];
    }
}

<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use App\Transformers\PingResultsTransformer;
use Flugg\Responder\Contracts\Transformable;

/**
 * App\Models\Support\PingResult
 *
 * @property int $id
 * @property int|null $device_id
 * @property string $run_date
 * @property int $timeout
 * @property int $reply_i
 * @property int $time_to_live
 * @property string $response_time
 * @property int $response_ttl
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Support\Device|null $device
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereReplyI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereResponseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereResponseTtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereRunDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereTimeToLive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\PingResult whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PingResult extends BaseModel implements Transformable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'device_id',
        'run_date',
        'timeout',
        'reply_i',
        'time_to_live',
        'response_time',
        'response_ttl',
        'status',
    ];

    /**
     * Get the Device for the PingResult.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'ping_results_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return $this->toArray();
    }

    /**
     * Get a transformer for the class.
     *
     * @return callable|\Flugg\Responder\Transformers\Transformer|string|null
     */
    public function transformer()
    {
        return PingResultsTransformer::class;
    }
}

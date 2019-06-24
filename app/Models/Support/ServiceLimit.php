<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ServiceLimit
 *
 * @property int                             $id
 * @property string                          $resource_operation_name
 * @property int                             $default_limit
 * @property int                             $min_limit
 * @property int                             $max_limit
 * @property int|null                        $burst_capacity
 * @property int                             $is_calls_per_second
 * @property string|null                     $is_adjustable
 * @property string|null                     $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ServiceLimit newModelQuery()
 * @method static Builder|ServiceLimit newQuery()
 * @method static Builder|ServiceLimit query()
 * @method static Builder|ServiceLimit whereBurstCapacity($value)
 * @method static Builder|ServiceLimit whereComments($value)
 * @method static Builder|ServiceLimit whereCreatedAt($value)
 * @method static Builder|ServiceLimit whereDefaultLimit($value)
 * @method static Builder|ServiceLimit whereId($value)
 * @method static Builder|ServiceLimit whereIsAdjustable($value)
 * @method static Builder|ServiceLimit whereIsCallsPerSecond($value)
 * @method static Builder|ServiceLimit whereMaxLimit($value)
 * @method static Builder|ServiceLimit whereMinLimit($value)
 * @method static Builder|ServiceLimit whereResourceOperationName($value)
 * @method static Builder|ServiceLimit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServiceLimit extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'resource_operation_name',
        'default_limit',
        'min_limit',
        'max_limit',
        'burst_capacity',
        'is_calls_per_second',
        'is_adjustable',
        'comments',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
        //
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'service_limit_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}

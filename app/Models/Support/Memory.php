<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Memory
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property string                          $model
 * @property string                          $capacity
 * @property string                          $type
 * @property string                          $speed
 * @property int                             $ecc
 * @property int                             $buffered
 * @property int                             $registered
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Memory newModelQuery()
 * @method static Builder|Memory newQuery()
 * @method static Builder|Memory query()
 * @method static Builder|Memory whereBuffered($value)
 * @method static Builder|Memory whereCapacity($value)
 * @method static Builder|Memory whereCreatedAt($value)
 * @method static Builder|Memory whereEcc($value)
 * @method static Builder|Memory whereId($value)
 * @method static Builder|Memory whereModel($value)
 * @method static Builder|Memory whereRegistered($value)
 * @method static Builder|Memory whereSpeed($value)
 * @method static Builder|Memory whereType($value)
 * @method static Builder|Memory whereUpdatedAt($value)
 * @method static Builder|Memory whereVendor($value)
 * @mixin \Eloquent
 */
class Memory extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'model',
        'capacity',
        'type',
        'speed',
        'ecc',
        'buffered',
        'registered',
    ];

    /**
     * @var string
     */
    protected $table = 'memory';

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
        return 'memory_index';
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

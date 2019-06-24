<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Disk
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property string                          $series
 * @property string                          $model
 * @property string                          $interface
 * @property string                          $capacity
 * @property string                          $seed
 * @property string                          $cache
 * @property string                          $latency
 * @property string                          $form_factor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Disk newModelQuery()
 * @method static Builder|Disk newQuery()
 * @method static Builder|Disk query()
 * @method static Builder|Disk whereCache($value)
 * @method static Builder|Disk whereCapacity($value)
 * @method static Builder|Disk whereCreatedAt($value)
 * @method static Builder|Disk whereFormFactor($value)
 * @method static Builder|Disk whereId($value)
 * @method static Builder|Disk whereInterface($value)
 * @method static Builder|Disk whereLatency($value)
 * @method static Builder|Disk whereModel($value)
 * @method static Builder|Disk whereSeed($value)
 * @method static Builder|Disk whereSeries($value)
 * @method static Builder|Disk whereUpdatedAt($value)
 * @method static Builder|Disk whereVendor($value)
 * @mixin \Eloquent
 */
class Disk extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'series',
        'model',
        'interface',
        'capacity',
        'seed',
        'cache',
        'latency',
        'form_factor',
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
        return 'disks_index';
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

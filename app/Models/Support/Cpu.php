<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Cpu
 *
 * @property int                             $id
 * @property string                          $architecture
 * @property string                          $vendor
 * @property string                          $family
 * @property string                          $model
 * @property string                          $speed
 * @property string                          $cache_size
 * @property int                             $number_of_cores
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Cpu newModelQuery()
 * @method static Builder|Cpu newQuery()
 * @method static Builder|Cpu query()
 * @method static Builder|Cpu whereArchitecture($value)
 * @method static Builder|Cpu whereCacheSize($value)
 * @method static Builder|Cpu whereCreatedAt($value)
 * @method static Builder|Cpu whereFamily($value)
 * @method static Builder|Cpu whereId($value)
 * @method static Builder|Cpu whereModel($value)
 * @method static Builder|Cpu whereNumberOfCores($value)
 * @method static Builder|Cpu whereSpeed($value)
 * @method static Builder|Cpu whereUpdatedAt($value)
 * @method static Builder|Cpu whereVendor($value)
 * @mixin \Eloquent
 */
class Cpu extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'architecture',
        'vendor',
        'family',
        'model',
        'speed',
        'cache_size',
        'number_of_cores',
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
        return 'cpu_index';
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

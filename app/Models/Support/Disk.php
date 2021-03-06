<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Disk
 *
 * @property int $id
 * @property string $vendor
 * @property string $series
 * @property string $model
 * @property string $interface
 * @property string $capacity
 * @property string $seed
 * @property string $cache
 * @property string $latency
 * @property string $form_factor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Disk newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Disk newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Disk query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereCache($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereFormFactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereInterface($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereLatency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereSeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Disk whereVendor($value)
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

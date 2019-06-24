<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use App\Models\General\Asset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Support\Datacenter
 *
 * @property int                                                                       $id
 * @property string                                                                    $code
 * @property string                                                                    $location
 * @property string                                                                    $status
 * @property string                                                                    $opening_date
 * @property \Illuminate\Support\Carbon|null                                           $created_at
 * @property \Illuminate\Support\Carbon|null                                           $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\General\Asset[] $assets
 * @method static Builder|Datacenter newModelQuery()
 * @method static Builder|Datacenter newQuery()
 * @method static Builder|Datacenter query()
 * @method static Builder|Datacenter whereCode($value)
 * @method static Builder|Datacenter whereCreatedAt($value)
 * @method static Builder|Datacenter whereId($value)
 * @method static Builder|Datacenter whereLocation($value)
 * @method static Builder|Datacenter whereOpeningDate($value)
 * @method static Builder|Datacenter whereStatus($value)
 * @method static Builder|Datacenter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Datacenter extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'code',
        'location',
        'status',
        'opening_date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/datacenters/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'datacenter_index';
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

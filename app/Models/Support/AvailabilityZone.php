<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\AvailabilityZone
 *
 * @property int                             $id
 * @property mixed                           $region_ids
 * @property string|null                     $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|AvailabilityZone newModelQuery()
 * @method static Builder|AvailabilityZone newQuery()
 * @method static Builder|AvailabilityZone query()
 * @method static Builder|AvailabilityZone whereComments($value)
 * @method static Builder|AvailabilityZone whereCreatedAt($value)
 * @method static Builder|AvailabilityZone whereId($value)
 * @method static Builder|AvailabilityZone whereRegionIds($value)
 * @method static Builder|AvailabilityZone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AvailabilityZone extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'region_ids',
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
        return 'availability_zone_index';
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

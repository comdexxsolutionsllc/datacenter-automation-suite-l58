<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ResourceName
 *
 * @property int                             $id
 * @property string                          $partition
 * @property int                             $service_namespace_id
 * @property int                             $service_region_id
 * @property string                          $accountable_type
 * @property int                             $accountable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ResourceName newModelQuery()
 * @method static Builder|ResourceName newQuery()
 * @method static Builder|ResourceName query()
 * @method static Builder|ResourceName whereAccountableId($value)
 * @method static Builder|ResourceName whereAccountableType($value)
 * @method static Builder|ResourceName whereCreatedAt($value)
 * @method static Builder|ResourceName whereId($value)
 * @method static Builder|ResourceName wherePartition($value)
 * @method static Builder|ResourceName whereServiceNamespaceId($value)
 * @method static Builder|ResourceName whereServiceRegionId($value)
 * @method static Builder|ResourceName whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResourceName extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'partition',
        'service_namespace_id',
        'service_region_id',
        'accountable_id',
        'accountable_type',
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
        return 'resource_name_index';
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

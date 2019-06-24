<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\AssetRegion
 *
 * @property int                             $id
 * @property string                          $name
 * @property string                          $identifier
 * @property string                          $endpoint
 * @property string                          $protocol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|AssetRegion newModelQuery()
 * @method static Builder|AssetRegion newQuery()
 * @method static Builder|AssetRegion query()
 * @method static Builder|AssetRegion whereCreatedAt($value)
 * @method static Builder|AssetRegion whereEndpoint($value)
 * @method static Builder|AssetRegion whereId($value)
 * @method static Builder|AssetRegion whereIdentifier($value)
 * @method static Builder|AssetRegion whereName($value)
 * @method static Builder|AssetRegion whereProtocol($value)
 * @method static Builder|AssetRegion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AssetRegion extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'identifier',
        'endpoint',
        'protocol',
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
        return 'asset_region_index';
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

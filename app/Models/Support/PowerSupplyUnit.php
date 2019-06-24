<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\PowerSupplyUnit
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property int                             $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|PowerSupplyUnit newModelQuery()
 * @method static Builder|PowerSupplyUnit newQuery()
 * @method static Builder|PowerSupplyUnit query()
 * @method static Builder|PowerSupplyUnit whereActive($value)
 * @method static Builder|PowerSupplyUnit whereCreatedAt($value)
 * @method static Builder|PowerSupplyUnit whereId($value)
 * @method static Builder|PowerSupplyUnit whereUpdatedAt($value)
 * @method static Builder|PowerSupplyUnit whereVendor($value)
 * @mixin \Eloquent
 */
class PowerSupplyUnit extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'active',
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
        // TODO: Implement searchableAs() method.
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        // TODO: Implement toSearchableArray() method.
    }
}

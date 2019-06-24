<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\FirewallZone
 *
 * @property int                             $id
 * @property string                          $network_asset_number
 * @property int                             $datacenter_id
 * @property int                             $network_device_id
 * @property string|null                     $available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|FirewallZone newModelQuery()
 * @method static Builder|FirewallZone newQuery()
 * @method static Builder|FirewallZone query()
 * @method static Builder|FirewallZone whereAvailable($value)
 * @method static Builder|FirewallZone whereCreatedAt($value)
 * @method static Builder|FirewallZone whereDatacenterId($value)
 * @method static Builder|FirewallZone whereId($value)
 * @method static Builder|FirewallZone whereNetworkAssetNumber($value)
 * @method static Builder|FirewallZone whereNetworkDeviceId($value)
 * @method static Builder|FirewallZone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FirewallZone extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'network_asset_number',
        'datacenter_id',
        'network_device_id',
        'available',
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
        return 'firewallzones_index';
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

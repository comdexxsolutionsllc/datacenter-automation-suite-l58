<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\FirewallZone
 *
 * @property int $id
 * @property string $network_asset_number
 * @property int $datacenter_id
 * @property int $network_device_id
 * @property string|null $available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\FirewallZone newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\FirewallZone newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\FirewallZone query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereDatacenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereNetworkAssetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereNetworkDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\FirewallZone whereUpdatedAt($value)
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

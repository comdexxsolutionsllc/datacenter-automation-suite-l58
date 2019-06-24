<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\IpAddress
 *
 * @property int                             $id
 * @property int|null                        $asset_owner
 * @property int                             $network_interface_card_id
 * @property int|null                        $firewall_zone_id
 * @property int                             $port_number
 * @property string|null                     $accountable_type
 * @property int|null                        $accountable_id
 * @property string                          $ip_address
 * @property string                          $ip_address_type
 * @property string                          $ip_address_visibility
 * @property string                          $gateway_address
 * @property int                             $subnet_address_id
 * @property string|null                     $other_ip_addresses
 * @property int                             $active
 * @property string|null                     $notes
 * @property string                          $allocation_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|IpAddress newModelQuery()
 * @method static Builder|IpAddress newQuery()
 * @method static Builder|IpAddress query()
 * @method static Builder|IpAddress whereAccountableId($value)
 * @method static Builder|IpAddress whereAccountableType($value)
 * @method static Builder|IpAddress whereActive($value)
 * @method static Builder|IpAddress whereAllocationDate($value)
 * @method static Builder|IpAddress whereAssetOwner($value)
 * @method static Builder|IpAddress whereCreatedAt($value)
 * @method static Builder|IpAddress whereFirewallZoneId($value)
 * @method static Builder|IpAddress whereGatewayAddress($value)
 * @method static Builder|IpAddress whereId($value)
 * @method static Builder|IpAddress whereIpAddress($value)
 * @method static Builder|IpAddress whereIpAddressType($value)
 * @method static Builder|IpAddress whereIpAddressVisibility($value)
 * @method static Builder|IpAddress whereNetworkInterfaceCardId($value)
 * @method static Builder|IpAddress whereNotes($value)
 * @method static Builder|IpAddress whereOtherIpAddresses($value)
 * @method static Builder|IpAddress wherePortNumber($value)
 * @method static Builder|IpAddress whereSubnetAddressId($value)
 * @method static Builder|IpAddress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IpAddress extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'asset_owner',
        'network_interface_card_id',
        'firewall_zone_id',
        'port_number',
        'accountable_type',
        'accountable_id',
        'ip_address',
        'ip_address_type',
        'ip_address_visibility',
        'gateway_address',
        'subnet_address_id',
        'other_ip_addresses',
        'active',
        'notes',
        'allocation_date',
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
        return 'ipaddresses_index';
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

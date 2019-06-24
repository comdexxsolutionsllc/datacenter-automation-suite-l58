<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use App\Models\General\Asset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Support\NetworkDevice
 *
 * @property int                                                                                       $id
 * @property string                                                                                    $asset_number
 * @property string|null                                                                               $serial_number
 * @property int                                                                                       $network_device_type_id
 * @property string                                                                                    $hostname
 * @property string                                                                                    $ip_address
 * @property string|null                                                                               $ip_address_alt
 * @property string                                                                                    $hardware_maker
 * @property string                                                                                    $hardware_version
 * @property string                                                                                    $device_os_version
 * @property int                                                                                       $total_ports
 * @property \Illuminate\Support\Carbon|null                                                           $created_at
 * @property \Illuminate\Support\Carbon|null                                                           $updated_at
 * @property-read \App\Models\General\Asset                                                            $asset
 * @property-read \App\Models\Support\NetworkDeviceType                                                $networkDeviceType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\SwitchportInformation[] $switchPortInformation
 * @method static Builder|NetworkDevice newModelQuery()
 * @method static Builder|NetworkDevice newQuery()
 * @method static Builder|NetworkDevice query()
 * @method static Builder|NetworkDevice whereAssetNumber($value)
 * @method static Builder|NetworkDevice whereCreatedAt($value)
 * @method static Builder|NetworkDevice whereDeviceOsVersion($value)
 * @method static Builder|NetworkDevice whereHardwareMaker($value)
 * @method static Builder|NetworkDevice whereHardwareVersion($value)
 * @method static Builder|NetworkDevice whereHostname($value)
 * @method static Builder|NetworkDevice whereId($value)
 * @method static Builder|NetworkDevice whereIpAddress($value)
 * @method static Builder|NetworkDevice whereIpAddressAlt($value)
 * @method static Builder|NetworkDevice whereNetworkDeviceTypeId($value)
 * @method static Builder|NetworkDevice whereSerialNumber($value)
 * @method static Builder|NetworkDevice whereTotalPorts($value)
 * @method static Builder|NetworkDevice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NetworkDevice extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'asset_number',
        'serial_number',
        'network_device_type_id',
        'hostname',
        'ip_address',
        'ip_address_alt',
        'hardware_maker',
        'hardware_version',
        'device_os_version',
        'total_ports',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function switchPortInformation(): HasMany
    {
        return $this->hasMany(SwitchportInformation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function networkDeviceType(): HasOne
    {
        return $this->hasOne(NetworkDeviceType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asset(): HasOne
    {
        return $this->hasOne(Asset::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/network/devices/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'networkdevice_index';
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

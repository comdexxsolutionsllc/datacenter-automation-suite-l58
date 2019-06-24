<?php

namespace App\Models\General;

use App\Models\BaseModel;
use App\Models\Support\Datacenter;
use App\Models\Support\OperatingSystem;
use App\Models\Support\SwitchportInformation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\General\Asset
 *
 * @property int                                                 $id
 * @property string                                              $serial_number
 * @property string                                              $hardware_id
 * @property string                                              $status
 * @property int|null                                            $datacenter_id
 * @property int|null                                            $network_device_id
 * @property int|null                                            $switchport_id
 * @property string                                              $network_interface_cards
 * @property string|null                                         $port_speed
 * @property string|null                                         $private_ip
 * @property string                                              $chassis
 * @property string                                              $motherboard_type
 * @property string                                              $cpus
 * @property string                                              $memory
 * @property string                                              $disks
 * @property int|null                                            $operating_system_id
 * @property string|null                                         $control_panel
 * @property string|null                                         $administrator_password
 * @property int                                                 $onhand_qty
 * @property int                                                 $pending_testing_qty
 * @property int                                                 $rma_qty
 * @property string|null                                         $last_checkin
 * @property \Illuminate\Support\Carbon|null                     $created_at
 * @property \Illuminate\Support\Carbon|null                     $updated_at
 * @property-read \App\Models\Support\Datacenter|null            $datacenter
 * @property-read \App\Models\General\Asset|null                 $networkDevice
 * @property-read \App\Models\Support\OperatingSystem|null       $operatingSystem
 * @property-read \App\Models\Support\SwitchportInformation|null $switchport
 * @method static Builder|Asset newModelQuery()
 * @method static Builder|Asset newQuery()
 * @method static Builder|Asset query()
 * @method static Builder|Asset whereAdministratorPassword($value)
 * @method static Builder|Asset whereChassis($value)
 * @method static Builder|Asset whereControlPanel($value)
 * @method static Builder|Asset whereCpus($value)
 * @method static Builder|Asset whereCreatedAt($value)
 * @method static Builder|Asset whereDatacenterId($value)
 * @method static Builder|Asset whereDisks($value)
 * @method static Builder|Asset whereHardwareId($value)
 * @method static Builder|Asset whereId($value)
 * @method static Builder|Asset whereLastCheckin($value)
 * @method static Builder|Asset whereMemory($value)
 * @method static Builder|Asset whereMotherboardType($value)
 * @method static Builder|Asset whereNetworkDeviceId($value)
 * @method static Builder|Asset whereNetworkInterfaceCards($value)
 * @method static Builder|Asset whereOnhandQty($value)
 * @method static Builder|Asset whereOperatingSystemId($value)
 * @method static Builder|Asset wherePendingTestingQty($value)
 * @method static Builder|Asset wherePortSpeed($value)
 * @method static Builder|Asset wherePrivateIp($value)
 * @method static Builder|Asset whereRmaQty($value)
 * @method static Builder|Asset whereSerialNumber($value)
 * @method static Builder|Asset whereStatus($value)
 * @method static Builder|Asset whereSwitchportId($value)
 * @method static Builder|Asset whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Asset extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'serial_number',
        'hardware_id',
        'status',
        'datacenter_id',
        'network_device_id',
        'switchport_id',
        'network_interface_cards',
        'port_speed',
        'private_ip',
        'chassis',
        'motherboard_type',
        'cpus',
        'memory',
        'disks',
        'operating_system_id',
        'control_panel',
        'administrator_password',
        'onhand_qty',
        'pending_testing_qty',
        'rma_qty',
        'last_checkin',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datacenter(): BelongsTo
    {
        return $this->belongsTo(Datacenter::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function networkDevice(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operatingSystem(): BelongsTo
    {
        return $this->belongsTo(OperatingSystem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function switchport(): BelongsTo
    {
        return $this->belongsTo(SwitchportInformation::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/assets/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'asset_index';
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

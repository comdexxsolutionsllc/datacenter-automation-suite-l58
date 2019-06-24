<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Support\SwitchportInformation
 *
 * @property int                                           $id
 * @property int                                           $network_device_id
 * @property int                                           $switchport_number
 * @property string                                        $category
 * @property string                                        $port_speed
 * @property string                                        $connection_type
 * @property string                                        $poe_status
 * @property string                                        $stackable_status
 * @property string                                        $duplex_type
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property-read \App\Models\Support\NetworkConfiguration $networkConfiguration
 * @property-read \App\Models\Support\NetworkDevice        $networkDevice
 * @method static Builder|SwitchportInformation newModelQuery()
 * @method static Builder|SwitchportInformation newQuery()
 * @method static Builder|SwitchportInformation query()
 * @method static Builder|SwitchportInformation whereCategory($value)
 * @method static Builder|SwitchportInformation whereConnectionType($value)
 * @method static Builder|SwitchportInformation whereCreatedAt($value)
 * @method static Builder|SwitchportInformation whereDuplexType($value)
 * @method static Builder|SwitchportInformation whereId($value)
 * @method static Builder|SwitchportInformation whereNetworkDeviceId($value)
 * @method static Builder|SwitchportInformation wherePoeStatus($value)
 * @method static Builder|SwitchportInformation wherePortSpeed($value)
 * @method static Builder|SwitchportInformation whereStackableStatus($value)
 * @method static Builder|SwitchportInformation whereSwitchportNumber($value)
 * @method static Builder|SwitchportInformation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SwitchportInformation extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'switchport_information';

    /**
     * @var array
     */
    protected $fillable = [
        'network_device_id',
        'switchport_number',
        'category',
        'port_speed',
        'connection_type',
        'poe_status',
        'stackable_status',
        'duplex_type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function networkDevice(): BelongsTo
    {
        return $this->belongsTo(NetworkDevice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function networkConfiguration(): BelongsTo
    {
        return $this->belongsTo(NetworkConfiguration::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/switchport/information/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'switchportinformation_index';
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

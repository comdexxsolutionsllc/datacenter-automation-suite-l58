<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\RaidCard
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property string                          $model
 * @property string                          $launch_date
 * @property string|null                     $expected_discontinuance
 * @property int                             $data_transfer_rate
 * @property mixed                           $supported_devices
 * @property mixed                           $supported_raid_levels
 * @property int                             $jbod_mode
 * @property int                             $number_of_internal_ports
 * @property int                             $number_of_supported_devices
 * @property int                             $embedded_memory
 * @property mixed                           $supported_oses
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|RaidCard newModelQuery()
 * @method static Builder|RaidCard newQuery()
 * @method static Builder|RaidCard query()
 * @method static Builder|RaidCard whereCreatedAt($value)
 * @method static Builder|RaidCard whereDataTransferRate($value)
 * @method static Builder|RaidCard whereEmbeddedMemory($value)
 * @method static Builder|RaidCard whereExpectedDiscontinuance($value)
 * @method static Builder|RaidCard whereId($value)
 * @method static Builder|RaidCard whereJbodMode($value)
 * @method static Builder|RaidCard whereLaunchDate($value)
 * @method static Builder|RaidCard whereModel($value)
 * @method static Builder|RaidCard whereNumberOfInternalPorts($value)
 * @method static Builder|RaidCard whereNumberOfSupportedDevices($value)
 * @method static Builder|RaidCard whereSupportedDevices($value)
 * @method static Builder|RaidCard whereSupportedOses($value)
 * @method static Builder|RaidCard whereSupportedRaidLevels($value)
 * @method static Builder|RaidCard whereUpdatedAt($value)
 * @method static Builder|RaidCard whereVendor($value)
 * @mixin \Eloquent
 */
class RaidCard extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'model',
        'launch_date',
        'expected_discontinuance',
        'data_transfer_rate',
        'supported_devices',
        'supported_raid_levels',
        'jbod_mode',
        'number_of_internal_ports',
        'number_of_supported_devices',
        'embedded_memory',
        'supported_oses',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'raidcards_index';
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

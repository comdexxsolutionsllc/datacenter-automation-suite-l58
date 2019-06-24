<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\MotherboardType
 *
 * @property int                             $id
 * @property string                          $vendor
 * @property string                          $model
 * @property string                          $form_factor
 * @property int|null                        $assigned_chassis
 * @property mixed                           $assigned_hdds
 * @property mixed                           $assigned_memory
 * @property mixed                           $assigned_networking_cards
 * @property mixed                           $assigned_raid_cards
 * @property string                          $bios_features
 * @property string                          $chipset
 * @property string                          $expansion_slots
 * @property string                          $front_side_bus
 * @property string                          $hdd_connection_type
 * @property mixed                           $processor_information
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|MotherboardType newModelQuery()
 * @method static Builder|MotherboardType newQuery()
 * @method static Builder|MotherboardType query()
 * @method static Builder|MotherboardType whereAssignedChassis($value)
 * @method static Builder|MotherboardType whereAssignedHdds($value)
 * @method static Builder|MotherboardType whereAssignedMemory($value)
 * @method static Builder|MotherboardType whereAssignedNetworkingCards($value)
 * @method static Builder|MotherboardType whereAssignedRaidCards($value)
 * @method static Builder|MotherboardType whereBiosFeatures($value)
 * @method static Builder|MotherboardType whereChipset($value)
 * @method static Builder|MotherboardType whereCreatedAt($value)
 * @method static Builder|MotherboardType whereExpansionSlots($value)
 * @method static Builder|MotherboardType whereFormFactor($value)
 * @method static Builder|MotherboardType whereFrontSideBus($value)
 * @method static Builder|MotherboardType whereHddConnectionType($value)
 * @method static Builder|MotherboardType whereId($value)
 * @method static Builder|MotherboardType whereModel($value)
 * @method static Builder|MotherboardType whereProcessorInformation($value)
 * @method static Builder|MotherboardType whereUpdatedAt($value)
 * @method static Builder|MotherboardType whereVendor($value)
 * @mixin \Eloquent
 */
class MotherboardType extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'vendor',
        'model',
        'form_factor',
        'assigned_chassis',
        'assigned_hdds',
        'assigned_memory',
        'assigned_networking_cards',
        'assigned_raid_cards',
        'bios_features',
        'chipset',
        'expansion_slots',
        'front_side_bus',
        'hdd_connection_type',
        'processor_information',
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
        return 'motherboardtypes_index';
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

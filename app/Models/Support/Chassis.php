<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Chassis
 *
 * @property int                             $id
 * @property int|null                        $asset_owner
 * @property string|null                     $accountable_type
 * @property int|null                        $accountable_id
 * @property string                          $vendor
 * @property string                          $model
 * @property string|null                     $serial_number
 * @property string                          $form_factor_in_u
 * @property string                          $chassis_type
 * @property string                          $power_supply
 * @property int                             $hot_swap_drive_bays
 * @property int                             $internal_drive_bays
 * @property int                             $expansion_slots
 * @property string                          $expansion_slot_information
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Chassis newModelQuery()
 * @method static Builder|Chassis newQuery()
 * @method static Builder|Chassis query()
 * @method static Builder|Chassis whereAccountableId($value)
 * @method static Builder|Chassis whereAccountableType($value)
 * @method static Builder|Chassis whereAssetOwner($value)
 * @method static Builder|Chassis whereChassisType($value)
 * @method static Builder|Chassis whereCreatedAt($value)
 * @method static Builder|Chassis whereExpansionSlotInformation($value)
 * @method static Builder|Chassis whereExpansionSlots($value)
 * @method static Builder|Chassis whereFormFactorInU($value)
 * @method static Builder|Chassis whereHotSwapDriveBays($value)
 * @method static Builder|Chassis whereId($value)
 * @method static Builder|Chassis whereInternalDriveBays($value)
 * @method static Builder|Chassis whereModel($value)
 * @method static Builder|Chassis wherePowerSupply($value)
 * @method static Builder|Chassis whereSerialNumber($value)
 * @method static Builder|Chassis whereUpdatedAt($value)
 * @method static Builder|Chassis whereVendor($value)
 * @mixin \Eloquent
 */
class Chassis extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'asset_owner',
        'accountable_id',
        'accountable_type',
        'vendor',
        'model',
        'serial_number',
        'form_factor_in_u',
        'chassis_type',
        'power_supply',
        'hot_swap_drive_bays',
        'expansion_slots',
        'expansion_slot_information',
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
        return 'chassis_index';
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

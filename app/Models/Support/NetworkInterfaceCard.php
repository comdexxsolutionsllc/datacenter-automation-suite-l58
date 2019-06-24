<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\NetworkInterfaceCard
 *
 * @property int                             $id
 * @property string                          $speed
 * @property string                          $duplex
 * @property string|null                     $mac_address
 * @property string|null                     $serial_number
 * @property int                             $number_of_ports
 * @property string                          $vendor
 * @property string                          $model
 * @property string                          $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|NetworkInterfaceCard newModelQuery()
 * @method static Builder|NetworkInterfaceCard newQuery()
 * @method static Builder|NetworkInterfaceCard query()
 * @method static Builder|NetworkInterfaceCard whereCreatedAt($value)
 * @method static Builder|NetworkInterfaceCard whereDuplex($value)
 * @method static Builder|NetworkInterfaceCard whereId($value)
 * @method static Builder|NetworkInterfaceCard whereMacAddress($value)
 * @method static Builder|NetworkInterfaceCard whereModel($value)
 * @method static Builder|NetworkInterfaceCard whereNumberOfPorts($value)
 * @method static Builder|NetworkInterfaceCard whereSerialNumber($value)
 * @method static Builder|NetworkInterfaceCard whereSpeed($value)
 * @method static Builder|NetworkInterfaceCard whereStatus($value)
 * @method static Builder|NetworkInterfaceCard whereUpdatedAt($value)
 * @method static Builder|NetworkInterfaceCard whereVendor($value)
 * @mixin \Eloquent
 */
class NetworkInterfaceCard extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [];

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
        return 'networkinterfacecards_index';
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

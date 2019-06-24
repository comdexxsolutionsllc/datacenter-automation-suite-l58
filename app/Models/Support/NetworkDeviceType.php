<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Support\NetworkDeviceType
 *
 * @property int                                    $id
 * @property string                                 $name
 * @property string|null                            $description
 * @property int                                    $active
 * @property \Illuminate\Support\Carbon|null        $created_at
 * @property \Illuminate\Support\Carbon|null        $updated_at
 * @property-read \App\Models\Support\NetworkDevice $networkDevice
 * @method static Builder|NetworkDeviceType newModelQuery()
 * @method static Builder|NetworkDeviceType newQuery()
 * @method static Builder|NetworkDeviceType query()
 * @method static Builder|NetworkDeviceType whereActive($value)
 * @method static Builder|NetworkDeviceType whereCreatedAt($value)
 * @method static Builder|NetworkDeviceType whereDescription($value)
 * @method static Builder|NetworkDeviceType whereId($value)
 * @method static Builder|NetworkDeviceType whereName($value)
 * @method static Builder|NetworkDeviceType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NetworkDeviceType extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function networkDevice(): BelongsTo
    {
        return $this->belongsTo(NetworkDevice::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/network/devices-types/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'networkdevicetype_index';
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

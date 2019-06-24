<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Support\NetworkConfiguration
 *
 * @property int                                                                                       $id
 * @property int                                                                                       $switchport_information_id
 * @property string                                                                                    $configuration
 * @property \Illuminate\Support\Carbon|null                                                           $created_at
 * @property \Illuminate\Support\Carbon|null                                                           $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\SwitchportInformation[] $switchportInformation
 * @method static Builder|NetworkConfiguration newModelQuery()
 * @method static Builder|NetworkConfiguration newQuery()
 * @method static Builder|NetworkConfiguration query()
 * @method static Builder|NetworkConfiguration whereConfiguration($value)
 * @method static Builder|NetworkConfiguration whereCreatedAt($value)
 * @method static Builder|NetworkConfiguration whereId($value)
 * @method static Builder|NetworkConfiguration whereSwitchportInformationId($value)
 * @method static Builder|NetworkConfiguration whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NetworkConfiguration extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'switchport_information_id',
        'configuration',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function switchportInformation(): HasMany
    {
        return $this->hasMany(SwitchportInformation::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/network/configurations/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'networkconfiguration_index';
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

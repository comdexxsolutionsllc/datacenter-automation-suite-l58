<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use App\Transformers\DeviceTransformer;
use Flugg\Responder\Contracts\Transformable;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Device
 *
 * @property int $id
 * @property string $name
 * @property string $ip
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\PingResult[] $pingResults
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Device whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Device extends BaseModel implements Transformable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ip',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the PingResults for the Device.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pingResults()
    {
        return $this->hasMany(PingResult::class);
    }

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
        return 'devices_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return $this->toArray();
    }

    /**
     * Get a transformer for the class.
     *
     * @return callable|\Flugg\Responder\Transformers\Transformer|string|null
     */
    public function transformer()
    {
        return DeviceTransformer::class;
    }
}

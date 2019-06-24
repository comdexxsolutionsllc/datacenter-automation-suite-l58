<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\General\Registrar
 *
 * @property int                                                                        $id
 * @property string                                                                     $name
 * @property string                                                                     $url
 * @property string                                                                     $type
 * @property \Illuminate\Support\Carbon|null                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                            $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\General\Domain[] $domains
 * @method static Builder|Registrar newModelQuery()
 * @method static Builder|Registrar newQuery()
 * @method static Builder|Registrar query()
 * @method static Builder|Registrar whereCreatedAt($value)
 * @method static Builder|Registrar whereId($value)
 * @method static Builder|Registrar whereName($value)
 * @method static Builder|Registrar whereType($value)
 * @method static Builder|Registrar whereUpdatedAt($value)
 * @method static Builder|Registrar whereUrl($value)
 * @mixin \Eloquent
 */
class Registrar extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'url',
        'type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domains(): HasMany
    {
        return $this->hasMany(Domain::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/registrars/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'registrar_index';
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

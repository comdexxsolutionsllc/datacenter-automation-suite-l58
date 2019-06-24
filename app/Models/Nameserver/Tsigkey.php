<?php

namespace App\Models\Nameserver;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Nameserver\Tsigkey
 *
 * @property int    $id
 * @property string $name
 * @property string $algorithm
 * @property string $secret
 * @property array  $created_at
 * @property array  $updated_at
 * @method static Builder|Tsigkey newModelQuery()
 * @method static Builder|Tsigkey newQuery()
 * @method static Builder|Tsigkey query()
 * @method static Builder|Tsigkey whereAlgorithm($value)
 * @method static Builder|Tsigkey whereCreatedAt($value)
 * @method static Builder|Tsigkey whereId($value)
 * @method static Builder|Tsigkey whereName($value)
 * @method static Builder|Tsigkey whereSecret($value)
 * @method static Builder|Tsigkey whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tsigkey extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nameserver_tsigkeys';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'algorithm',
        'secret',
    ];

    /**
     * Get created_at in array format
     *
     * @param string $value
     *
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Get updated_at in array format
     *
     * @param string $value
     *
     * @return array
     */
    public function getUpdatedAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/nameservers/tsigkeys/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'nameserver_tsigkey_index';
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

<?php

namespace App\Models\Nameserver;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Nameserver\Cryptokey
 *
 * @property int                                $id
 * @property int                                $domain_id
 * @property int                                $flags
 * @property int|null                           $active
 * @property string|null                        $content
 * @property array                              $created_at
 * @property array                              $updated_at
 * @property-read \App\Models\Nameserver\Domain $domain
 * @method static Builder|Cryptokey newModelQuery()
 * @method static Builder|Cryptokey newQuery()
 * @method static Builder|Cryptokey query()
 * @method static Builder|Cryptokey whereActive($value)
 * @method static Builder|Cryptokey whereContent($value)
 * @method static Builder|Cryptokey whereCreatedAt($value)
 * @method static Builder|Cryptokey whereDomainId($value)
 * @method static Builder|Cryptokey whereFlags($value)
 * @method static Builder|Cryptokey whereId($value)
 * @method static Builder|Cryptokey whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cryptokey extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nameserver_cryptokeys';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain_id',
        'flags',
        'active',
        'content',
    ];

    /**
     * Get the domain for this model.
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

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
        return config('dashboard.path') . "/nameservers/cryptokeys/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'nameserver_cryptokey_index';
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

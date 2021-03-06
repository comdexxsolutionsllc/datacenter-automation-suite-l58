<?php

namespace App\Models\Nameserver;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Nameserver\Domain
 *
 * @property int $id
 * @property string $name
 * @property string|null $master
 * @property int|null $last_check
 * @property string $type
 * @property int|null $notified_serial
 * @property string|null $account
 * @property array $created_at
 * @property array $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nameserver\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nameserver\Cryptokey[] $cryptokeys
 * @property-read int|null $cryptokeys_count
 * @property-read mixed $path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nameserver\Domainmetadata[] $metadata
 * @property-read int|null $metadata_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nameserver\Record[] $records
 * @property-read int|null $records_count
 * @method static \App\Builder\MyBuilder|\App\Models\Nameserver\Domain newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Nameserver\Domain newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Nameserver\Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereLastCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereMaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereNotifiedSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nameserver\Domain whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Domain extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nameserver_domains';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'master',
        'last_check',
        'type',
        'notified_serial',
        'account',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metadata(): HasMany
    {
        return $this->hasMany(Domainmetadata::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cryptokeys(): HasMany
    {
        return $this->hasMany(Cryptokey::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/nameservers/domains/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'nameserver_domain_index';
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

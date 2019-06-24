<?php

namespace App\Models\Nameserver;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Nameserver\Record
 *
 * @property int                                $id
 * @property int                                $domain_id
 * @property string|null                        $name
 * @property string|null                        $type
 * @property string|null                        $content
 * @property int|null                           $ttl
 * @property int|null                           $priority
 * @property int|null                           $change_date
 * @property int                                $disabled
 * @property string|null                        $ordername
 * @property int                                $auth
 * @property array                              $created_at
 * @property array                              $updated_at
 * @property-read \App\Models\Nameserver\Domain $domain
 * @method static Builder|Record newModelQuery()
 * @method static Builder|Record newQuery()
 * @method static Builder|Record query()
 * @method static Builder|Record whereAuth($value)
 * @method static Builder|Record whereChangeDate($value)
 * @method static Builder|Record whereContent($value)
 * @method static Builder|Record whereCreatedAt($value)
 * @method static Builder|Record whereDisabled($value)
 * @method static Builder|Record whereDomainId($value)
 * @method static Builder|Record whereId($value)
 * @method static Builder|Record whereName($value)
 * @method static Builder|Record whereOrdername($value)
 * @method static Builder|Record wherePriority($value)
 * @method static Builder|Record whereTtl($value)
 * @method static Builder|Record whereType($value)
 * @method static Builder|Record whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Record extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nameserver_records';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain_id',
        'name',
        'type',
        'content',
        'ttl',
        'priority',
        'change_date',
        'disabled',
        'ordername',
        'auth',
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
        return config('dashboard.path') . "/nameservers/records/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'nameserver_record_index';
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

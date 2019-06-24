<?php

namespace App\Models\General;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\Notification
 *
 * @property string         $id
 * @property string         $type
 * @property string         $notifiable_type
 * @property int            $notifiable_id
 * @property string         $data
 * @property bool|\DateTime $read_at
 * @property bool|\DateTime $created_at
 * @property bool|\DateTime $updated_at
 * @method static Builder|Notification newModelQuery()
 * @method static Builder|Notification newQuery()
 * @method static Builder|Notification query()
 * @method static Builder|Notification whereCreatedAt($value)
 * @method static Builder|Notification whereData($value)
 * @method static Builder|Notification whereId($value)
 * @method static Builder|Notification whereNotifiableId($value)
 * @method static Builder|Notification whereNotifiableType($value)
 * @method static Builder|Notification whereReadAt($value)
 * @method static Builder|Notification whereType($value)
 * @method static Builder|Notification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Notification extends BaseModel
{

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'notifiable_type',
        'notifiable_id',
        'data',
        'read_at',
    ];

    /**
     * Set the read_at.
     *
     * @param string $value
     *
     */
    public function setReadAtAttribute($value)
    {
        $this->attributes['read_at'] = ! empty($value) ? DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    /**
     * Get read_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
     */
    public function getReadAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Get created_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
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
     * @return bool|\DateTime
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
        return config('dashboard.path') . "/notifications/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'notifications_index';
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

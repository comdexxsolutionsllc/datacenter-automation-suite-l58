<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Note
 *
 * @property int            $id
 * @property string         $body
 * @property string         $noteable_type
 * @property int            $noteable_id
 * @property bool|\DateTime $created_at
 * @property bool|\DateTime $updated_at
 * @method static Builder|Note newModelQuery()
 * @method static Builder|Note newQuery()
 * @method static Builder|Note query()
 * @method static Builder|Note whereBody($value)
 * @method static Builder|Note whereCreatedAt($value)
 * @method static Builder|Note whereId($value)
 * @method static Builder|Note whereNoteableId($value)
 * @method static Builder|Note whereNoteableType($value)
 * @method static Builder|Note whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Note extends BaseModel
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'noteable_type',
        'noteable_id',
    ];

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
        return config('dashboard.path') . "/notes/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'notes_index';
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

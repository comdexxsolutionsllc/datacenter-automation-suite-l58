<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Support\Status
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $hexcode
 * @property int $visible
 * @property bool|\DateTime $deleted_at
 * @property bool|\DateTime $created_at
 * @property bool|\DateTime $updated_at
 * @property-read mixed $path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\Ticket[] $tickets
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereHexcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Status whereVisible($value)
 * @mixin \Eloquent
 */
class Status extends BaseModel
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'hexcode',
        'visible',
    ];

    /**
     * Commonly excluded statuses.
     *
     * @var array
     */
    protected $excludedStatuses = [
        'Closed',
        'Hidden',
        'Open',
        'Transferred',
    ];

    /**
     * List the common statuses.
     *
     * @return array
     */
    public function commonStatuses(): array
    {
        return $this->whereNotIn('name', $this->excludedStatuses)->pluck('description', 'name')->all();
    }

    /**
     * Get deleted_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
     */
    public function getDeletedAtAttribute($value)
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/statuses/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'statuses_index';
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

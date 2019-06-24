<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\OperatingSystem
 *
 * @property int                             $id
 * @property string                          $architecture
 * @property string                          $type
 * @property string                          $name
 * @property string                          $notes
 * @property int                             $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|OperatingSystem newModelQuery()
 * @method static Builder|OperatingSystem newQuery()
 * @method static Builder|OperatingSystem query()
 * @method static Builder|OperatingSystem whereActive($value)
 * @method static Builder|OperatingSystem whereArchitecture($value)
 * @method static Builder|OperatingSystem whereCreatedAt($value)
 * @method static Builder|OperatingSystem whereId($value)
 * @method static Builder|OperatingSystem whereName($value)
 * @method static Builder|OperatingSystem whereNotes($value)
 * @method static Builder|OperatingSystem whereType($value)
 * @method static Builder|OperatingSystem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OperatingSystem extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'architecture',
        'type',
        'name',
        'notes',
        'active',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/operating-systems/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'operatingsystem_index';
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

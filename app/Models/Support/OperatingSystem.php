<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\OperatingSystem
 *
 * @property int $id
 * @property string $architecture
 * @property string $type
 * @property string $name
 * @property string $notes
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\OperatingSystem newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\OperatingSystem newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\OperatingSystem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereArchitecture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\OperatingSystem whereUpdatedAt($value)
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

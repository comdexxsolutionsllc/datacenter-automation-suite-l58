<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Queue
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $description
 * @property int                             $visible
 * @property string|null                     $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Queue newModelQuery()
 * @method static Builder|Queue newQuery()
 * @method static Builder|Queue query()
 * @method static Builder|Queue whereCreatedAt($value)
 * @method static Builder|Queue whereDeletedAt($value)
 * @method static Builder|Queue whereDescription($value)
 * @method static Builder|Queue whereId($value)
 * @method static Builder|Queue whereName($value)
 * @method static Builder|Queue whereUpdatedAt($value)
 * @method static Builder|Queue whereVisible($value)
 * @mixin \Eloquent
 */
class Queue extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'visible',];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/queues/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'queue_index';
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

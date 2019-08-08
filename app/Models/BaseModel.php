<?php

namespace App\Models;

use Altek\Eventually\Eventually;
use App\Builder\MyBuilder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

/**
 * Class BaseModel
 */
abstract class BaseModel extends Model
{

    use Eventually, HasHashid, HashidRouting, Searchable;

    /**
     * Displayable Fields for export.
     *
     * @var array
     */
    public static $displayableFields = [];

    public function getPathAttribute()
    {
        $this->path();
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    abstract public function path(): string;

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    abstract public function searchableAs(): string;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    abstract public function toSearchableArray(): array;

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query)
    {
        return new MyBuilder($query);
    }
}

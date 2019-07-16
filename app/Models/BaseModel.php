<?php

namespace App\Models;

use Altek\Eventually\Eventually;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Class BaseModel
 */
abstract class BaseModel extends Model
{

    use Eventually, Searchable;

    /**
     * Displayable Fields for export.
     *
     * @var array
     */
    public static $displayableFields = [];

    /**
     * Return resource path.
     *
     * @return string
     */
    abstract public function path(): string;

    public function getPathAttribute()
    {
        $this->path();
    }

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
}

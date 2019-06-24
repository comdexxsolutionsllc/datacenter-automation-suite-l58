<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\TagType
 *
 * @property int                             $id
 * @property string                          $model
 * @property string|null                     $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|TagType newModelQuery()
 * @method static Builder|TagType newQuery()
 * @method static Builder|TagType query()
 * @method static Builder|TagType whereCreatedAt($value)
 * @method static Builder|TagType whereDescription($value)
 * @method static Builder|TagType whereId($value)
 * @method static Builder|TagType whereModel($value)
 * @method static Builder|TagType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TagType extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'model',
        'description',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        // TODO: Implement searchableAs() method.
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        // TODO: Implement toSearchableArray() method.
    }
}

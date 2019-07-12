<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\TagType
 *
 * @property int $id
 * @property string $model
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagType whereUpdatedAt($value)
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

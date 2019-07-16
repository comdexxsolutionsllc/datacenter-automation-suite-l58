<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\TagCloud
 *
 * @property int $id
 * @property int|null $tag_type
 * @property string $keyword
 * @property int|null $frequency
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereTagType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\TagCloud whereVisible($value)
 * @mixin \Eloquent
 */
class TagCloud extends BaseModel
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tag_cloud';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_type',
        'keyword',
        'frequency',
        'visible',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return 'tags';
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'tagcloud_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return $this->toArray();
    }
}

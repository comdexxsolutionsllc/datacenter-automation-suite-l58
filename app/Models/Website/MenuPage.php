<?php

namespace App\Models\Website;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Website\MenuPage
 *
 * @property int                             $id
 * @property string|null                     $text
 * @property string|null                     $route
 * @property string|null                     $url
 * @property string|null                     $target
 * @property string|null                     $icon
 * @property string|null                     $can
 * @property bool                            $isTitle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|MenuPage newModelQuery()
 * @method static Builder|MenuPage newQuery()
 * @method static Builder|MenuPage query()
 * @method static Builder|MenuPage whereCan($value)
 * @method static Builder|MenuPage whereCreatedAt($value)
 * @method static Builder|MenuPage whereIcon($value)
 * @method static Builder|MenuPage whereId($value)
 * @method static Builder|MenuPage whereIsTitle($value)
 * @method static Builder|MenuPage whereRoute($value)
 * @method static Builder|MenuPage whereTarget($value)
 * @method static Builder|MenuPage whereText($value)
 * @method static Builder|MenuPage whereUpdatedAt($value)
 * @method static Builder|MenuPage whereUrl($value)
 * @mixin \Eloquent
 */
class MenuPage extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text',
        'route',
        'url',
        'target',
        'icon',
        'can',
        'isTitle',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'isTitle' => 'bool',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return null;
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'menupage_index';
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

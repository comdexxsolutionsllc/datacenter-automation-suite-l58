<?php

namespace App\Models\Website;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Scout\Searchable;
use Lorisleiva\LaravelSearchString\Concerns\SearchString;

/**
 * App\Models\Website\AboutUs
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $portrait
 * @property string                          $job_title
 * @property string                          $job_summary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string                     $portrait_link
 * @method static Builder|AboutUs newModelQuery()
 * @method static Builder|AboutUs newQuery()
 * @method static Builder|AboutUs query()
 * @method static Builder|AboutUs usingSearchString($string)
 * @method static Builder|AboutUs whereCreatedAt($value)
 * @method static Builder|AboutUs whereId($value)
 * @method static Builder|AboutUs whereJobSummary($value)
 * @method static Builder|AboutUs whereJobTitle($value)
 * @method static Builder|AboutUs whereName($value)
 * @method static Builder|AboutUs wherePortrait($value)
 * @method static Builder|AboutUs whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutUs extends BaseModel
{

    use Searchable, SearchString;

    protected $searchStringColumns = [
        'name',
        'created_at',
    ];

    /**
     * @var string
     */
    protected $table = 'about_us';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'portrait',
        'job_title',
        'job_summary',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'portrait_link',
    ];

    /**
     * @return string
     */
    public function getPortraitLinkAttribute(): string
    {
        return ! is_null($this->portrait) ? $this->portrait : 'http://placehold.it/200x200';
    }

    /**
     * Path to resource.
     *
     * @return string
     */
    public function path(): string
    {
        return "/about-us/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'aboutus_index';
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

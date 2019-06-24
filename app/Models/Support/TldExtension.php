<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\TldExtension
 *
 * @property int                             $id
 * @property string                          $domain
 * @property string|null                     $description
 * @property string                          $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|TldExtension newModelQuery()
 * @method static Builder|TldExtension newQuery()
 * @method static Builder|TldExtension query()
 * @method static Builder|TldExtension whereCreatedAt($value)
 * @method static Builder|TldExtension whereDescription($value)
 * @method static Builder|TldExtension whereDomain($value)
 * @method static Builder|TldExtension whereId($value)
 * @method static Builder|TldExtension whereType($value)
 * @method static Builder|TldExtension whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TldExtension extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'domain',
        'description',
        'type',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/tld-extensions/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'tldextension_index';
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

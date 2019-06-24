<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ServiceNamespace
 *
 * @property int                             $id
 * @property int                             $services_id
 * @property string                          $namespace
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ServiceNamespace newModelQuery()
 * @method static Builder|ServiceNamespace newQuery()
 * @method static Builder|ServiceNamespace query()
 * @method static Builder|ServiceNamespace whereCreatedAt($value)
 * @method static Builder|ServiceNamespace whereId($value)
 * @method static Builder|ServiceNamespace whereNamespace($value)
 * @method static Builder|ServiceNamespace whereServicesId($value)
 * @method static Builder|ServiceNamespace whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServiceNamespace extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'services_id',
        'namespace',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
        //
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'service_namespace_index';
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

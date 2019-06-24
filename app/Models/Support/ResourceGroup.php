<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ResourceGroup
 *
 * @property int                             $id
 * @property string                          $serial_number
 * @property mixed                           $service_ids
 * @property string|null                     $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ResourceGroup newModelQuery()
 * @method static Builder|ResourceGroup newQuery()
 * @method static Builder|ResourceGroup query()
 * @method static Builder|ResourceGroup whereCreatedAt($value)
 * @method static Builder|ResourceGroup whereId($value)
 * @method static Builder|ResourceGroup whereNotes($value)
 * @method static Builder|ResourceGroup whereSerialNumber($value)
 * @method static Builder|ResourceGroup whereServiceIds($value)
 * @method static Builder|ResourceGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResourceGroup extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'serial_number',
        'service_ids',
        'notes',
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
        return 'resource_group_index';
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

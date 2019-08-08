<?php

namespace App\Models\Website;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use App\Models\Support\Technician;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Website\Chat
 *
 * @property int $id
 * @property string $unique_id
 * @property string $accountable_type
 * @property int $accountable_id
 * @property int $technician_id
 * @property string|null $description
 * @property mixed $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Website\Chat $accountable
 * @property-read mixed $path
 * @property-read \App\Models\Support\Technician $technician
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Chat newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Chat newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereAccountableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereAccountableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereTechnicianId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Chat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Chat extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'unique_id',
        'accountable_id',
        'accountable_type',
        'technician_id',
        'description',
        'message',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function accountable(): MorphTo
    {
        return $this->morphTo('accountable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function technician(): BelongsTo
    {
        return $this->belongsTo(Technician::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return 'chat';
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return null;
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return null;
    }
}

<?php

namespace App\Models\Support;

use App\Models\Roles\Employee;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\Support\Technician
 *
 * @property int                                                                        $id
 * @property int                                                                        $department_id
 * @property int                                                                        $employee_id
 * @property \Illuminate\Support\Carbon|null                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                            $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\Ticket[] $tickets
 * @property-read \App\Models\Roles\Employee                                            $user
 * @method static Builder|Technician newModelQuery()
 * @method static Builder|Technician newQuery()
 * @method static Builder|Technician query()
 * @method static Builder|Technician whereCreatedAt($value)
 * @method static Builder|Technician whereDepartmentId($value)
 * @method static Builder|Technician whereEmployeeId($value)
 * @method static Builder|Technician whereId($value)
 * @method static Builder|Technician whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Technician extends Pivot
{

    /**
     * @var string
     */
    protected $table = 'department_employee';

    /**
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'department_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
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

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'technician_index';
    }

    ///**
    // * Get all of the ticket's notes.
    // *
    // * @return \Illuminate\Database\Eloquent\Relations\MorphMany
    // */
    //public function notes(): MorphMany
    //{
    //    return $this->morphMany('App\Note', 'noteable');
    //}
}

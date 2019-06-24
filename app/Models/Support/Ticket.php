<?php

namespace App\Models\Support;

use App\Models\BaseModel;
use App\Models\Roles\Employee;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\Models\Support\Ticket
 *
 * @property int                                                                        $id
 * @property string                                                                     $ticket_id
 * @property string                                                                     $title
 * @property string                                                                     $body
 * @property int                                                                        $status_id
 * @property int                                                                        $department_id
 * @property int                                                                        $technician_assigned_id
 * @property int                                                                        $is_resolved
 * @property bool|\DateTime                                                             $deleted_at
 * @property bool|\DateTime                                                             $created_at
 * @property bool|\DateTime                                                             $updated_at
 * @property string                                                                     $ticketable_type
 * @property int                                                                        $ticketable_id
 * @property-read \App\Models\Support\Department                                        $department
 * @property-read \App\Models\Support\Status                                            $status
 * @property-read \App\Models\Support\Technician                                        $technicianAssigned
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\Ticket[] $user
 * @method static Builder|Ticket newModelQuery()
 * @method static Builder|Ticket newQuery()
 * @method static Builder|Ticket query()
 * @method static Builder|Ticket whereBody($value)
 * @method static Builder|Ticket whereCreatedAt($value)
 * @method static Builder|Ticket whereDeletedAt($value)
 * @method static Builder|Ticket whereDepartmentId($value)
 * @method static Builder|Ticket whereId($value)
 * @method static Builder|Ticket whereIsResolved($value)
 * @method static Builder|Ticket whereStatusId($value)
 * @method static Builder|Ticket whereTechnicianAssignedId($value)
 * @method static Builder|Ticket whereTicketId($value)
 * @method static Builder|Ticket whereTicketableId($value)
 * @method static Builder|Ticket whereTicketableType($value)
 * @method static Builder|Ticket whereTitle($value)
 * @method static Builder|Ticket whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ticket extends BaseModel
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'title',
        'body',
        'status_id',
        'department_id',
        'account_id',
        'account_type',
        'technician_assigned_id',
        'is_resolved',
    ];

    /**
     * Get the status for this model.
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the department for this model.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Get all of the owning ticketable models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function user(): MorphTo
    {
        return $this->morphTo('ticketable');
    }

    /**
     * Get the technician assigned for this model.
     */
    public function technicianAssigned()
    {
        return $this->hasOne(Technician::class, 'employee_id');
    }

    /**
     * @return \App\Models\Roles\Employee|\App\Models\Roles\Employee[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function technician()
    {
        return Employee::find($this->technicianAssigned->employee_id);
    }

    /**
     * Get deleted_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
     */
    public function getDeletedAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Get created_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
     */
    public function getCreatedAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Get updated_at in array format
     *
     * @param string $value
     *
     * @return bool|\DateTime
     */
    public function getUpdatedAtAttribute($value)
    {
        return DateTime::createFromFormat('j/n/Y g:i A', $value);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/tickets/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'tickets_index';
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

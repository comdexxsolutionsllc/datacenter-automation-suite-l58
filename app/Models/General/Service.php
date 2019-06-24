<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\General\Service
 *
 * @property int                                                                             $id
 * @property int                                                                             $account_id
 * @property string                                                                          $account_type
 * @property string                                                                          $service_type
 * @property string                                                                          $status
 * @property string|null                                                                     $last_payment
 * @property string|null                                                                     $last_invoice
 * @property \Illuminate\Support\Carbon|null                                                 $created_at
 * @property \Illuminate\Support\Carbon|null                                                 $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\General\InvoiceItem[] $invoiceItems
 * @method static Builder|Service newModelQuery()
 * @method static Builder|Service newQuery()
 * @method static Builder|Service query()
 * @method static Builder|Service whereAccountId($value)
 * @method static Builder|Service whereAccountType($value)
 * @method static Builder|Service whereCreatedAt($value)
 * @method static Builder|Service whereId($value)
 * @method static Builder|Service whereLastInvoice($value)
 * @method static Builder|Service whereLastPayment($value)
 * @method static Builder|Service whereServiceType($value)
 * @method static Builder|Service whereStatus($value)
 * @method static Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Service extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'account_id',
        'account_type',
        'service_type',
        'status',
        'last_payment',
        'last_invoice',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function invoiceItems(): BelongsToMany
    {
        return $this->belongsToMany(InvoiceItem::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/services/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'service_index';
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

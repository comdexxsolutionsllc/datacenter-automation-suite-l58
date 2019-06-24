<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\General\Invoice
 *
 * @property int                                                                             $id
 * @property int                                                                             $account_id
 * @property string                                                                          $account_type
 * @property string                                                                          $subtotal
 * @property string                                                                          $payment_option
 * @property string                                                                          $transaction_id
 * @property string|null                                                                     $paypal_email
 * @property int                                                                             $billing_info_id
 * @property string|null                                                                     $date
 * @property string|null                                                                     $date_due
 * @property string|null                                                                     $date_paid
 * @property \Illuminate\Support\Carbon|null                                                 $created_at
 * @property \Illuminate\Support\Carbon|null                                                 $updated_at
 * @property-read \App\Models\General\BillingInfo                                            $billingInfo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\General\InvoiceItem[] $invoiceItems
 * @method static Builder|Invoice newModelQuery()
 * @method static Builder|Invoice newQuery()
 * @method static Builder|Invoice query()
 * @method static Builder|Invoice whereAccountId($value)
 * @method static Builder|Invoice whereAccountType($value)
 * @method static Builder|Invoice whereBillingInfoId($value)
 * @method static Builder|Invoice whereCreatedAt($value)
 * @method static Builder|Invoice whereDate($value)
 * @method static Builder|Invoice whereDateDue($value)
 * @method static Builder|Invoice whereDatePaid($value)
 * @method static Builder|Invoice whereId($value)
 * @method static Builder|Invoice wherePaymentOption($value)
 * @method static Builder|Invoice wherePaypalEmail($value)
 * @method static Builder|Invoice whereSubtotal($value)
 * @method static Builder|Invoice whereTransactionId($value)
 * @method static Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Invoice extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'account_id',
        'account_type',
        'subtotal',
        'payment_option',
        'transaction_id',
        'paypal_email',
        'billing_info_id',
        'date',
        'date_due',
        'date_paid',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function billingInfo(): HasOne
    {
        return $this->hasOne(BillingInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/invoices/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'invoice_index';
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

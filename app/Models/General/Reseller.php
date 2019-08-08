<?php

namespace App\Models\General;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use App\Models\Support\SalesRep;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\General\Reseller
 *
 * @property int $id
 * @property string $account_id
 * @property int $company_id
 * @property string|null $expiry_date
 * @property int $salesrep_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\General\Company $company
 * @property-read mixed $path
 * @property-read \App\Models\Support\SalesRep $salesRep
 * @method static \App\Builder\MyBuilder|\App\Models\General\Reseller newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Reseller newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Reseller query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereSalesrepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Reseller whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reseller extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'account_id',
        'company_id',
        'expiry_date',
        'salesrep_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function salesRep(): HasOne
    {
        return $this->hasOne(SalesRep::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/resellers/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'reseller_index';
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

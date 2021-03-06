<?php

namespace App\Models\General;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\General\Domain
 *
 * @property int $id
 * @property int $account_id
 * @property string $account_type
 * @property int $registrar_id
 * @property string $domain_name
 * @property int $active
 * @property int $monitor
 * @property string|null $whois_record_updated
 * @property string|null $whois_record_created
 * @property string|null $whois_record_expiry
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @property-read \App\Models\General\Registrar $registrar
 * @method static \App\Builder\MyBuilder|\App\Models\General\Domain newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Domain newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereDomainName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereMonitor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereRegistrarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereWhoisRecordCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereWhoisRecordExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Domain whereWhoisRecordUpdated($value)
 * @mixin \Eloquent
 */
class Domain extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'account_id',
        'account_type',
        'registrar_id',
        'domain_name',
        'active',
        'monitor',
        'whois_record_updated',
        'whois_record_created',
        'whois_record_expiry',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registrar(): BelongsTo
    {
        return $this->belongsTo(Registrar::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/domains/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'domain_index';
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

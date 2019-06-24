<?php

namespace App\Models\Website;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Website\Pricing
 *
 * @property int                             $id
 * @property string                          $plan
 * @property string                          $price
 * @property array                           $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Pricing newModelQuery()
 * @method static Builder|Pricing newQuery()
 * @method static Builder|Pricing query()
 * @method static Builder|Pricing whereCreatedAt($value)
 * @method static Builder|Pricing whereDetails($value)
 * @method static Builder|Pricing whereId($value)
 * @method static Builder|Pricing wherePlan($value)
 * @method static Builder|Pricing wherePrice($value)
 * @method static Builder|Pricing whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pricing extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'plan',
        'price',
        'details',
    ];

    /**
     * @var string
     */
    protected $table = 'pricing';

    /**
     * Truncate details.
     *
     * @param $value
     * @param $length
     *
     * @return string
     */
    public static function truncate($value, $length = 40): string
    {
        return (strlen($value) > $length) ? substr($value, 0, $length) . '...' : $value;
    }

    /**
     * Get the plan's details.
     *
     * @param $value
     *
     * @return array
     */
    public function getDetailsAttribute($value): array
    {
        return explode('\n', $value);
    }

    /**
     * Get the plan's price.
     *
     * @param $value
     *
     * @return string
     */
    public function getPriceAttribute($value): string
    {
        return money_format('$%.2n', $value);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return 'pricing';
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'pricing_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        return $array;
    }
}

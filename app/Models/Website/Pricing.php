<?php

namespace App\Models\Website;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Website\Pricing
 *
 * @property int $id
 * @property string $plan
 * @property string $price
 * @property array $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Pricing newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Pricing newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Website\Pricing query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing wherePlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Website\Pricing whereUpdatedAt($value)
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

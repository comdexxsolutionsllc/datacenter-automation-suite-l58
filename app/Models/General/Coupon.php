<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\Coupon
 *
 * @property int                             $id
 * @property string                          $type
 * @property string                          $code
 * @property string                          $value
 * @property string                          $minimum_amount
 * @property string                          $maximum_discount
 * @property \Illuminate\Support\Carbon      $valid_start_time
 * @property \Illuminate\Support\Carbon      $valid_end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Coupon newModelQuery()
 * @method static Builder|Coupon newQuery()
 * @method static Builder|Coupon query()
 * @method static Builder|Coupon whereCode($value)
 * @method static Builder|Coupon whereCreatedAt($value)
 * @method static Builder|Coupon whereId($value)
 * @method static Builder|Coupon whereMaximumDiscount($value)
 * @method static Builder|Coupon whereMinimumAmount($value)
 * @method static Builder|Coupon whereType($value)
 * @method static Builder|Coupon whereUpdatedAt($value)
 * @method static Builder|Coupon whereValidEndTime($value)
 * @method static Builder|Coupon whereValidStartTime($value)
 * @method static Builder|Coupon whereValue($value)
 * @mixin \Eloquent
 */
class Coupon extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'type',
        'code',
        'value',
        'minimum_amount',
        'maximum_discount',
        'valid_start_time',
        'valid_end_time',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'valid_start_time' => 'datetime',
        'valid_end_time'   => 'datetime',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return null;
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'coupons_index';
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

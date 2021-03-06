<?php

namespace App\Models\General;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\Cart
 *
 * @property int $id
 * @property string $cart_data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\General\Cart newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Cart newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Cart whereCartData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\Cart whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cart extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'cart_data',
    ];

    public function setCartDataAttribute($value)
    {
        $this->attributes['cart_data'] = serialize($value);
    }

    public function getCartDataAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return 'cart';
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        // TODO: Implement searchableAs() method.
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        // TODO: Implement toSearchableArray() method.
    }
}

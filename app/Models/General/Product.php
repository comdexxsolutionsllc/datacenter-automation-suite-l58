<?php

namespace App\Models\General;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\General\Product
 *
 * @property int                             $id
 * @property string                          $qty On-hand qty
 * @property string                          $name
 * @property string|null                     $description
 * @property bool                            $taxable
 * @property bool                            $lineItem
 * @property string                          $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereDescription($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereLineItem($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereQty($value)
 * @method static Builder|Product whereTaxable($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'qty',
        'name',
        'taxable',
        'lineItem',
        'price',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'taxable'  => 'boolean',
        'lineItem' => 'boolean',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/products/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'products_index';
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

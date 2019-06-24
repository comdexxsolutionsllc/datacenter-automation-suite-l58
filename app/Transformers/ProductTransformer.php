<?php

namespace App\Transformers;

use App\Models\General\Product;
use Flugg\Responder\Transformers\Transformer;

class ProductTransformer extends Transformer
{

    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param \App\Models\General\Product $product
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'id' => (int) $product->id,
        ];
    }
}

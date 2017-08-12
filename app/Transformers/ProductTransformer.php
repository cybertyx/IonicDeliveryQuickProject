<?php

namespace DeliveryQuick\Transformers;

use League\Fractal\TransformerAbstract;
use DeliveryQuick\Models\Product;

/**
 * Class ProductTransformer
 * @package namespace DeliveryQuick\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{

    /**
     * Transform the \Product entity
     * @param \Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'description'   => $model->description,
            'price'         => $model->price,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}

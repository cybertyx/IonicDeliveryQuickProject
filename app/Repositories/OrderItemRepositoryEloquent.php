<?php

namespace DeliveryQuick\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DeliveryQuick\Repositories\OrderItemRepository;
use DeliveryQuick\Models\OrderItem;
use DeliveryQuick\Validators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent
 * @package namespace DeliveryQuick\Repositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

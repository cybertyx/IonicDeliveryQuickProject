<?php

namespace DeliveryQuick\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DeliveryQuick\Repositories\OrderRepository;
use DeliveryQuick\Models\Order;
use DeliveryQuick\Validators\OrderValidator;

/**
 * Class OrderRepositoryEloquent
 * @package namespace DeliveryQuick\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

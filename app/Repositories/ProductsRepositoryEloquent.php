<?php

namespace DeliveryQuick\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DeliveryQuick\Repositories\ProductsRepository;
use DeliveryQuick\Models\Products;
use DeliveryQuick\Validators\ProductsValidator;

/**
 * Class ProductsRepositoryEloquent
 * @package namespace DeliveryQuick\Repositories;
 */
class ProductsRepositoryEloquent extends BaseRepository implements ProductsRepository
{
    protected $skipPresenter = true;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Products::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    
}

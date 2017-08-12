<?php

namespace DeliveryQuick\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DeliveryQuick\Repositories\CategoryRepository;
use DeliveryQuick\Models\Category;
use DeliveryQuick\Validators\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace DeliveryQuick\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

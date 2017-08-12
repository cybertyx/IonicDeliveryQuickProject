<?php

namespace DeliveryQuick\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DeliveryQuick\Repositories\UserRepository;
use DeliveryQuick\Models\User;
use DeliveryQuick\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace DeliveryQuick\Repositories\App;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

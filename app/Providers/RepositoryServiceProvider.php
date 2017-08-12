<?php

namespace DeliveryQuick\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(
                'DeliveryQuick\Repositories\UserRepository',
                'DeliveryQuick\Repositories\UserRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\OrderRepository',
                'DeliveryQuick\Repositories\OrderRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\CategoryRepository',
                'DeliveryQuick\Repositories\CategoryRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\ClientRepository',
                'DeliveryQuick\Repositories\ClientRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\OrderItemRepository',
                'DeliveryQuick\Repositories\OrderRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\ProductsRepository',
                'DeliveryQuick\Repositories\ProductsRepositoryEloquent'
        );
        $this->app->bind(
                'DeliveryQuick\Repositories\CupomRepository',
                'DeliveryQuick\Repositories\CupomRepositoryEloquent'
        );
    }        
}

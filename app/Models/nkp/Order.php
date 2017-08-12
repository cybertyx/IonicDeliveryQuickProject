<?php

namespace DeliveryQuick\Models;

use Illuminate\Database\Eloquent\Model;
use DeliveryQuick\User;
use DeliveryQuick\Models\OrderItem;
use DeliveryQuick\Models\Client;
use DeliveryQuick\Models\Cupom;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

class Order extends Model implements Transformable, Presentable
{
    protected $fillable = [
        'client_id',
        'user_deliveryman_id',
        'total',
        'status',
    ];
    
    public function client() {
        return $this->belongsTo(Client::class);
    }
    
    public function cupom() {
        return $this->belongsTo(Cupom::class);
    }
    
    public function items() {
        return $this->hasMany(OrderItem::class);
    }
    
    public function deliveryman() {
        return $this->belongsTo(User::class, 'user_deliveryman_id', 'id');
    }
    
    public function products() {
        return $this->hasMany(Products::class);
    }

    public function transform(){
        return [
            'order' => $this->id
        ];
    }

    public function presenter() {
        return "Prettus\\Repository\\Presenter\\ModelFractalPresenter";
    }

    public function setPresenter(\Prettus\Repository\Contracts\PresenterInterface $presenter) {
        
    }

}

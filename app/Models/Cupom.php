<?php

namespace DeliveryQuick\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cupom extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'code',
        'value',
    ];
    
    public function findByCode($code) {
        $result = $this->where('code', $code)
                ->where('used', 0)
                ->first();
        if($result){
            return $result;
        } 
        throw (new \Illuminate\Database\Eloquent\ModelNotFoundException)->setModel(get_class($this));
    }
}

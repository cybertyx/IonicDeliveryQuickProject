<?php

namespace DeliveryQuick\Models;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
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

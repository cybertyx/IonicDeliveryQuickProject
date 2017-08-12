<?php

namespace DeliveryQuick\Http\Controllers\Api;

use \DeliveryQuick\Http\Controllers\Controller;
use DeliveryQuick\Repositories\CupomRepository;

class CupomController extends Controller
{

    /**
     * @var Cupom
     */
    private $cupom;
    
    public function __construct(CupomRepository $cupom) {
        $this->cupom = $cupom;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return $this->cupom->findByCode($code);
    }

}

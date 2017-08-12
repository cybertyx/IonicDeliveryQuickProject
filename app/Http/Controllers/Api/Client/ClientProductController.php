<?php

namespace DeliveryQuick\Http\Controllers\Api\Client;

use \DeliveryQuick\Http\Controllers\Controller;
use DeliveryQuick\Repositories\ProductsRepository;

class ClientProductController extends Controller
{

    /**
     * @var Product
     */
    private $product;
    
    public function __construct(ProductsRepository $product) {
        
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->skipPresenter(false)->all();
        return $products;
    }

}

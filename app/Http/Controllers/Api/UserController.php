<?php

namespace DeliveryQuick\Http\Controllers\Api;

use Illuminate\Http\Request;
use DeliveryQuick\Http\Controllers\Controller;
use DeliveryQuick\Repositories\UserRepository;
use Auth;

class UserController extends Controller
{
    public function __construct(UserRepository $user) {
        $this->user = $user;
    }
    
    public function authenticated() {
        $id = Auth::user()->id;
        $user = $this->user->with('client')->where('id', $id)->first();
        return $user;
    }
}

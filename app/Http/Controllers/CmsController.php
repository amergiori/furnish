<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CmsController extends MainController{
    
    public function dashboard(){
        self::$data['title'] = 'Dashboard';
        Order::getAll(self::$data);
        return view('cms.dashboard', self::$data);
    }

    public function orders(){

        Order::getAll(self::$data);
        self::$data['title'] = 'Order List';
        return view('cms.orders', self::$data);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Advertisement;

class MainController extends Controller{

 static public $data = ['error_top' => true];

  function __construct(){

    self::$data['menu'] = Menu::all()->toArray();
    self::$data['advertise'] = Advertisement::inRandomOrder()->first();
    
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;
use App\Categorie;
use App\Product;

class PageController extends MainController
{
    
    public function home(Request $request){
    
    self::$data['categories'] = Categorie::all()->toArray();
    self::$data['products'] = Product::all()->toArray();
    Product::allProducts(self::$data);
    self::$data['title'] = 'Home Page';
    return view('content.home', self::$data);
    }
 
    public function content($url){
       
        Content::getAll($url, self::$data);
        return view('content.content', self::$data);

    }

    public function search(Request $request){
    
        Product::autoComplete($request, self::$data);
        return self::$data;
    
      }
}

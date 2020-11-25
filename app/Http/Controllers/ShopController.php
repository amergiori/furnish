<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB, Cart, Session;
use App\Product;
use App\Order;

class ShopController extends MainController
{
  public function categories(){
   
    self::$data['title'] = 'Shop';
    self::$data['categories'] = Categorie::all()->toArray();
    return view('content.categories', self::$data);
    
  }
  
  public function product($category_url,Request $request) {

    self::$data['orderBy'] = $request['orderBy'];
    Product::getProducts($category_url, self::$data);
    self::$data['categories'] = Categorie::all()->toArray();
    self::$data['curl'] = $category_url;
    return view('content.products', self::$data);
  
  }

  public function item($categorie_url, $product_url){
  
    Product::getItem($product_url, self::$data);
    self::$data['purl'] = strtolower($product_url);
    self::$data['curl'] = strtolower($categorie_url);
    return view('content.item', self::$data);
    
  }

  public function addToCart(Request $request){
    
    Product::addToCart( $request['productID'] );

  }

  public function removeFromCart(Request $request){
    
    if(Cart::get($request['productID'])){
      
      Product::removeFromCart( $request['productID'] );
    
    }

  }

  public function checkout(){
    
    $cart = Cart::getContent()->toArray();
    sort($cart);
    self::$data['title'] = 'Checkout';
    self::$data['cart'] = $cart;
    return view('content.checkout', self::$data);
  
  }

  public function updateCart(Request $request){
  
    Product::updateCart($request);
    return redirect('shop/checkout');

  }

  public function clearCart(){

    Cart::clear();
    return redirect('shop/checkout');

  }

  public function checkoutRemoveItem(Request $request){

    if( Cart::get($request['productID']) ){
      
      Cart::remove($request['productID']);
      
    }
    
    return redirect('shop/checkout');
  }

  public function orderNow(){

    if( Cart::isEmpty() ){
      
      return redirect('shop/checkout');
    
    } else {

      if( !Session::has('user_id')){
        
        return redirect('user/login?rd=shop/checkout');
      
      } else {

        Order::save_new();
        return redirect('shop');

      }

    }

  }

}
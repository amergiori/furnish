<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session;
use DB;
use App\Product;

class Order extends Model
{
    static public function save_new(){

        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $items = Cart::getContent();
        foreach($items as $item){
            $product = Product::find($item->id);
            $product->stock -= $item->quantity;
            $product->update();
        }
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Your order has been saved!');
        Session::flash('sm-position', 'toast-top-center');

    }

    static public function getAll(&$data){

        $data['orders'] = DB::table('orders AS o')
        ->join('users AS u', 'u.id', '=', 'o.user_id')
        ->select('o.*', 'u.name')
        ->orderBy('o.created_at', 'desc')
        ->get();

    }

    static public function getUserOrders($id, &$data){
        $data['orders'] = DB::table('orders AS o')
        ->join('users AS u', 'u.id', '=', 'o.user_id')
        ->where('u.id', '=', $id)
        ->orderBy('o.created_at', 'desc')
        ->get();
    }
}

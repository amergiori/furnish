<?php

namespace App;
use App\Categorie;
use DB, Cart, Session;
use Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    static public function getProducts($category_url, &$data){
        
        $products = DB::table('products AS p')
        ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.url', 'c.title')
        ->where('c.url', '=', $category_url)
        ->orderBy('price', $data['orderBy']);

        if ($data['total_count'] = $products->count()){
            
            $products = $products->paginate(6);
            $data['products'] = $products;
            $data['title'] = $products[0]->title . ' Products';
        
        } else{
        
            abort(404);
        
        }
    }

    static public function getItem($product_url, &$data){
        
        if( $item = self::where('purl', '=', $product_url)->first() ){
        $data['product'] = $item->toArray();
        $data['title'] = $data['product']['ptitle'];

        } else {
        
        abort(404);

        }
    }

    static public function addToCart($productID) {
    
        if( !empty($productID) && is_numeric($productID) ){
            
            if( $product = self::find($productID) ){
                
                $product = $product->toArray();
                if ( !Cart::get($productID)){
                
                    Cart::add($productID, $product['ptitle'], $product['price'], 1, []);
                    Session::flash('sm', $product['ptitle'] . ' added to cart!');
                    Session::flash('sm-position', 'toast-top-center');

                }
            
            }
            

        }

    }

    static public function removeFromCart($productID) {
    
        if( !empty($productID) && is_numeric($productID) ){
            
            if ( Cart::get($productID)){
            
                Session::flash('sm',  'Item removed from cart!');
                Session::flash('sm-position', 'toast-top-center');
                Cart::remove($productID);

            }
            
        }

    }


    static public function updateCart($request){

        if (!empty($request['productID']) && is_numeric($request['productID'])){

            if( !empty($request['op']) ){

                

                if( $product = Cart::get($request['productID']) ){

                    $product = $product->toArray();
                    
                    if($request['op'] == 'plus'){
    
                        Cart::update($request['productID'], ['quantity' => 1]);
    
                    } elseif($request['op'] == 'minus'){
    
                        Cart::update($request['productID'], ['quantity' => -1]);

                }


                }

            }

        }

    }

    static public function save_product($request){

        $directory = Categorie::find($request['category_id']);
        $directory = $directory['url'];
        $image_name = 'no-image.jpg';

        if( $request->hasFile('pimage') && $request->file('pimage')->isValid() ){

            $file = $request->file('pimage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('pimage')->move( public_path() . '/images/products/' . $directory . '/' , $image_name);
            $img = Image::make( public_path() . '/images/products/'. $directory .'/' . $image_name );
            $img->resize(370, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }


        $product = new self();
        $product->categorie_id = $request['category_id'];
        $product->ptitle = $request['ptitle'];
        $product->article = $request['article'];
        $product->purl = $request['purl'];
        
        if($image_name=='no-image.jpg'){
            $product->pimage = $image_name;
        } else {
            $product->pimage = $directory . '/' .$image_name;
        }

        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product created successfully!');
        Session::flash('sm-position', 'toast-top-center');


    }


    static public function update_product($request, $id){

        $directory = Categorie::find($request['category_id']);
        $directory = $directory['url'];
        $image_name = '';

        if( $request->hasFile('pimage') && $request->file('pimage')->isValid() ){

            $file = $request->file('pimage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('pimage')->move( public_path() . '/images/products/' . $directory . '/' , $image_name);
            $img = Image::make( public_path() . '/images/products/'. $directory .'/' . $image_name );
            $img->resize(370, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }


        $product = self::find($id);
        $product->categorie_id = $request['category_id'];
        $product->ptitle = $request['ptitle'];
        $product->article = $request['article'];
        $product->purl = $request['purl'];
        
        if( $image_name ){
            $product->pimage = $directory . '/' .$image_name;
        }

        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product updated successfully!');
        Session::flash('sm-position', 'toast-top-center');

    }
    static public function allProducts(&$data){
        
        $products = DB::table('products AS p')
        ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.url', 'c.title')
        ->get();
        $data['data'] = $products; 
    }

    static public function autoComplete($request, &$data){
        if ( !empty( $request['search'] ) && is_string($request['search'])) {
  
            $search = trim(filter_var($request['search'], FILTER_SANITIZE_STRING));
            $search = strtoupper($search);
            
           
            
            if ($search) {
              
              $data['search'] = DB::table('products AS p')
              ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
              ->select('ptitle', 'c.title', 'article', 'c.url', 'p.purl')
              ->where('ptitle', 'LIKE', '%' . $search . '%')
              ->orWhere('article', 'LIKE', '%' .$search . '%')
              ->get();
              
            }
            
          }
    }
}
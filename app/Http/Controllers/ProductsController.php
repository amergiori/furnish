<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Session;

class ProductsController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       self::$data['title'] = 'Manage Categories';
       self::$data['products'] = Product::paginate(5);
       return view('cms.products.products', self::$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    
        self::$data['title'] = 'Add Product';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.products.add_product', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request){
        
        Product::save_product($request);
        return redirect('cms/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        self::$data['item_id'] = $id;
        return view('cms.products.delete_product', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        self::$data['title'] = 'Edit Category';
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['product_item'] = Product::find($id)->toArray();
        return view('cms.products/edit_product', self::$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id){
        
        Product::update_product($request, $id);
        return redirect('cms/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Product::destroy([$id]);
        Session::flash('sm', 'Successfully deleted product from database');
        Session::flash('sm-position', 'toast-top-center');
        return redirect('cms/products');

    }
}

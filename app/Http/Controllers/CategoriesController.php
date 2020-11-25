<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Session;

class CategoriesController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       self::$data['title'] = 'Manage Categories';
       self::$data['categories'] = Categorie::all()->toArray();
       return view('cms.categories.categories', self::$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    
        self::$data['title'] = 'Add Category';
        return view('cms.categories.add_category', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request){
        
        Categorie::save_category($request);
        return redirect('cms/categories');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        self::$data['item_id'] = $id;
        return view('cms.categories.delete_category', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        self::$data['title'] = 'Edit Category';
        self::$data['category_item'] = Categorie::find($id)->toArray();
        return view('cms.categories/edit_category', self::$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id){
        
        Categorie::update_category($request, $id);
        return redirect('cms/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Categorie::destroy([$id]);
        Session::flash('sm', 'Successfully deleted category from database');
        Session::flash('sm-position', 'toast-top-center');
        return redirect('cms/categories');

    }
}

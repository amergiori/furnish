<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use Session;

class MenuController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       self::$data['title'] = 'Manage Menu';
       return view('cms.menu.menu', self::$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    
        self::$data['title'] = 'Add Page to Menu';
        return view('cms.menu.add_menu', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request){
        
        Menu::save_menu($request);
        return redirect('cms/menu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        self::$data['item_id'] = $id;
        return view('cms.menu.delete_menu', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        self::$data['title'] = 'Edit Link';
        self::$data['menu_item'] = Menu::find($id)->toArray();
        return view('cms.menu/edit_menu', self::$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id){
        
        Menu::update_menu($request, $id);
        return redirect('cms/menu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Menu::destroy([$id]);
        Session::flash('sm', 'Successfully deleted page from database');
        Session::flash('sm-position', 'toast-top-center');
        return redirect('cms/menu');

    }
}

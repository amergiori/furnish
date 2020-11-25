<?php

namespace App\Http\Controllers;

use Session;
use App\Menu;
use App\Content;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\ContentRequest;

class ContentController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       self::$data['contents'] = Content::all()->toArray();
       self::$data['title'] = 'Manage Content';
       return view('cms.content.content', self::$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        self::$data['title'] = 'Add Content';
        return view('cms.content.add_content', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request){
        
        Content::save_content($request);
        return redirect('cms/content');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        self::$data['item_id'] = $id;
        return view('cms.content.delete_content', self::$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        self::$data['title'] = 'Edit Link';
        self::$data['category_item'] = Categorie::all()->toArray();
        self::$data['content_item'] = Content::find($id)->toArray();
        return view('cms/content/edit_content', self::$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id){
        
        Content::update_content($request, $id);
        return redirect('cms/content');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Content::destroy([$id]);
        Session::flash('sm', 'Successfully deleted content from database');
        Session::flash('sm-position', 'toast-top-center');
        return redirect('cms/content');

    }
}

<?php

namespace App;

use App\Menu;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model{
    
    static public function getAll($url, &$data){
    
        if( $menu = Menu::where('url', '=', $url)->first() ){
            
            $data['contents'] = Menu::find($menu->id)->contents;
            $data['title'] = $menu->title;
            $data['url'] = $url;

        } else {
            abort(404);
        }
   
    }

    static public function save_content($request){

        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->ctitle = $request['ctitle'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'New content is now stored!');
        Session::flash('sm-position', 'toast-top-center');

    }

    static public function update_content($request, $id){

        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->ctitle = $request['ctitle'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Updated successfully!');
        Session::flash('sm-position', 'toast-top-center');

    }
}

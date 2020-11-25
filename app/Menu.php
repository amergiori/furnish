<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    public function contents(){

        return $this->hasMany('App\Content');

    }

    static public function save_menu($request){

        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'New page in menu is now stored!');
        Session::flash('sm-position', 'toast-top-center');

    }

    static public function update_menu($request, $id){

        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Updated successfully!');
        Session::flash('sm-position', 'toast-top-center');

    }
}

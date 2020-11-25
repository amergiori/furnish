<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Hash, Session;
use App\Users_role;
use Image;

class User extends Model
{
    static public function validateUser($email, $password){

        $valid = false;

        $user = DB::table('users AS u')
        ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')
        ->where('u.email', '=', $email)
        ->first();

        if( $user && Hash::check($password, $user->password) ){

            $valid = true;
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);

            if($user->role_id == 8) {
                Session::put('is_admin', true);
            }

            Session::flash('sm', 'Welcome back '. $user->name);
            Session::flash('sm-position', 'toast-top-center');
        }

        return $valid;

    }

    static public function save_new($request){

        $image_name = 'no-profile-image.jpg';

        if( $request->hasFile('image') && $request->file('image')->isValid() ){

            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images/profile-images/' , $image_name);
            $img = Image::make( public_path() . '/images/profile-images/' . $image_name );
            $img->resize(370, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }

        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        if( $image_name ){
            $user->profile_image = 'profile-images/' . $image_name;
        }
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUES($uid, 2)");
        Session::put('user_id', $uid);
        Session::put('user_name', $request['name']);
        Session::flash('sm', 'Welcome '. $request['name']);
        Session::flash('sm-position', 'toast-top-center');
    }

    static public function getUser($id ,&$data){
        
        $user = DB::table('users AS u')
        ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')
        ->where('ur.uid', '=', $id)
        ->select('u.*', 'ur.*')
        ->first();

        $data['user'] = $user;
    }

    static public function update_user($id, $request){
        
        $image_name = '';

        if( !empty($request['profile_image']) && $request->hasFile('profile_image') && $request->file('profile_image')->isValid() ){

            $file = $request->file('profile_image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('profile_image')->move( public_path() . '/images/profile-images/' , $image_name);
            $img = Image::make( public_path() . '/images/profile-images/' . $image_name );
            $img->resize(370, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }
    

        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        if( !empty($request['password']) ){
            $user->password = bcrypt($request['password']);
        }
        if(!empty($image_name)){
            $user->profile_image = 'profile-images/' . $image_name;
        }
        if( !empty($request['role_id']) ){
            $user_role = Users_role::find($id);
            $user_role->role_id = $request['role_id'];
            $user_role->update();
        }
        $user->save();
        Session::flash('sm', 'Your profile has been updated');
        Session::flash('sm-position', 'toast-top-center');
        Session::put('user_name', $request['name']);
    }


    static public function getAll(&$data){

        $data['users'] = DB::table('users AS u')
        ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')
        ->select('u.*', 'ur.*')
        ->get();

    }



}

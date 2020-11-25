<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ProfileRequest;
use App\User;
use App\Order;
use Session;

class UserController extends MainController{

     function __construct(){

         parent::__construct();
         $this->middleware('signguard',['except' => ['logout', 'index', 'edit', 'getOrders']]);

     }

    public function getSignin(){
        self::$data['title'] = 'Login';
        return view('forms.login', self::$data);
    }

    public function postSignin(SigninRequest $request){
        $returnRedirect = !empty($request['rd']) ? $request['rd'] : '';
        if( User::validateUser($request['email'], $request['password']) ){
            return redirect($returnRedirect);
        } else {
            self::$data['title'] = 'Login';
            return view('forms.login', self::$data)->withErrors('Email & password do not match');
        }

    }

    public function getRegister(){

        self::$data['error_top'] = false;
        self::$data['title'] = 'Register';
        return view('forms.register', self::$data);

    }

    public function postRegister(RegisterRequest $request){

        User::save_new($request);
        return redirect('/');
        
    }

    public function index(){
        
        self::$data['title'] = 'My Account';
        User::getUser(Session::get('user_id'), self::$data);
        Order::getUserOrders(Session::get('user_id'), self::$data);
        return view('user.profile', self::$data);
    }
    
    public function edit(){
        
        self::$data['title'] = 'Edit My Account';
        User::getUser(Session::get('user_id'), self::$data);
        return view('user.edit_profile', self::$data);
    }
  
    public function update(ProfileRequest $request){
        
        User::update_user($request, Session::get('user_id'));
        return redirect('user/profile');
    }

    public function logout(){

        Session::flush();
        return redirect('user/login');

    }
}

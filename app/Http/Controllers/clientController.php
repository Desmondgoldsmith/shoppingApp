<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function home(){
        return view('client.home');
    }

    public function shop(){
        return view('client.shop');
    }

    public function cart(){

        return view('client.cart');
    }

    public function checkout(){

        return view('client.checkout');
    }
    
    public function contact(){

        return view('client.contact');
    }
    
    public function login(){

        return view('client.login');
    }
    
    public function dashboard(){

        return view('admin.dashboard');
    }


}

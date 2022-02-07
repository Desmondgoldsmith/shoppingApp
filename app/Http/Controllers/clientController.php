<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function home(){
       $products = Product::all();
       return view('client.home')->with('products',$products);
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

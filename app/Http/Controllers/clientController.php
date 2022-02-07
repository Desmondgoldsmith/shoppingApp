<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function home(){
       $products = Product::all();
       $sliders = Slider::all();
       $categories = category::all();
     
       return view('client.home')->with('products',$products)->with('sliders',$sliders)->with('categories',$categories);
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

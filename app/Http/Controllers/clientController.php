<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Slider;
use App\cart;

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

    public function cart(Request $request,$id){
     $products = Product::find($id);
     $categories = category::all();
     $sliders = Slider::all();
     
     $oldCart = Session::has('cart') ? Session::get('cart'):null;
     $cart = new cart($oldCart);
     $cart->add($products,$id);
     Session::put('cart',$cart);
     dd(Session::get('cart'));
     return view('client.cart')->with('products',$products)->with('categories',$categories)->with('sliders',$sliders);
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

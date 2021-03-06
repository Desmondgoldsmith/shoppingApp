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
        $products = Product::all();
        $categories = category::all();

        return view('client.shop')->with('products',$products)->with('categories',$categories);
    }

    public function addtoCart($id){
     $products = Product::find($id);
     $categories = category::all();
     $sliders = Slider::all();
     
     $oldCart = Session::has('cart') ? Session::get('cart'):null;
     $cart = new cart($oldCart);
     $cart->add($products,$id);
     Session::put('cart',$cart);
    //  dd(Session::get('cart'));
     return back();
    }

  public function updateQuantity(Request $request,$id){
    $oldCart = Session::has('cart') ? Session::get('cart'):null;
    $cart = new cart($oldCart);
    // $quantity = $request->quantity;
    // $product = Product::find($id);
    $cart->updateCart($id,$request->quantity);
    Session::put('cart',$cart); 
    
    return back();
  }

    public function cart(){
      $categories = category::all();
        if(!Session::has('cart')){
            return redirect('/');
        }
     $oldCart = Session::get('cart');
     $cart = new cart($oldCart);
//   dd($cart->items);
     return view('client.cart',['products'=>$cart->items])->with('categories',$categories);

}

  public function delete($id){
    $oldCart = Session::has('cart') ? Session::get('cart'):null;
    $cart = new cart($oldCart);
    $cart->removeItem($id);

    if(count($cart->items) > 0){
     Session::put('cart',$cart); 
    }else{
        Session::forget('cart');
    }

    
    return back();
  }


    public function checkout(){
      if(!Session::has('client')){
        return view('client.login');
      }
      $categories = category::all();
        return view('client.checkout')->with('categories',$categories);
    }
    
    public function contact(){

        return view('client.contact');
    }
    
    public function login(){

        return view('client.login');
    }

    public function register(){

      return view('client.register');
    }
    public function dashboard(){

        return view('admin.dashboard');
    }       

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function addSlider(){
      
        return view('admin.addSlider');
    }
    
    public function slider(){
      
        return view('admin.slider');
    }
    public function addProduct(){
      
        return view('admin.addProduct');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(){

        return view('admin.addcategory');
    }
    
    public function Category(){

        $category = category::all();
        return view('admin.catigoryList')->with('category',$category);
      }

    //   public function categories()
    // {
    //   $category = category::all();
    //   return view('admin.catigoryList')->with('category',$category);

    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(){

        return view('admin.addcategory');
    }
    
    public function Category(){

        return view('admin.catigorylist');
    }
}

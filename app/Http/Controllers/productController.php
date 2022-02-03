<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addProduct(){
      $categories = category::all();
      return  view('admin.addProduct')->with('categories',$categories);
    
    }
    public function viewProduct(){
      $products = Product::all();
      return  view('admin.RealProduct')->with('products',$products);
    
    }

    public function saveProduct(Request $request){

         $this->validate($request,[
         'productName'=>'required',
         'productPrice'=>'required',
         'productCategory'=>'required',
         'productImage'=>'image|nullable|max:1999'
         ]);
         if($request->hasFile('productImage')){
             $fileNameWithExt = $request->file('productImage')->getClientOriginalName();
            //  get file name
            $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('productImage')->getClientOriginalExtension();
        //   store filename in database
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
            $path = $request->file('productImage')->storeAs('public/productImages',$fileNameToStore);

            }else{
                $fileNameToStore = 'noimage.jpg';
            }

         $product = new Product();
         $product->productName = $request->input('productName');
         $product->productPrice = $request->input('productPrice');
         $product->productCategory = $request->input('productCategory');
         $product->productImage = $fileNameToStore;
         $product->save();
        return  back()->with('status','Product Saved Successfully');
     
    }
}

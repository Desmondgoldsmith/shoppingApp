<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                $fileNameToStore = 'noimage.png';
            }

         $product = new Product();
         $product->productName = $request->input('productName');
         $product->productPrice = $request->input('productPrice');
         $product->productCategory = $request->input('productCategory');
         $product->productImage = $fileNameToStore;
         $product->save();
        return  back()->with('status','Product Saved Successfully');
     
    }

    public function editProduct($id){
      $products = Product::find($id);
      $categories = category::all();
     
      return view('admin.editProduct')->with('products',$products)->with('categories',$categories);
    }

    public function update(Request $request){
      $this->validate($request,[
        'productName'=>'required',
        'productPrice'=>'required',
        'productCategory'=>'required',
        'productImage'=>'image|nullable|max:1999'
        ]);
        
             

         $product = Product::find($request->input('id'));
         $product->productName = $request->input('productName');
         $product->productPrice = $request->input('productPrice');
         $product->productCategory = $request->input('productCategory');
         

         if($request->hasFile('productImage')){
            $fileNameWithExt = $request->file('productImage')->getClientOriginalName();
           //  get file name
           $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('productImage')->getClientOriginalExtension();
       //   store filename in database
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
           $path = $request->file('productImage')->storeAs('public/productImages',$fileNameToStore);
           
          // remove image which post has been deleted from the folder
           if($product->productImage != 'noimage.png'){
             Storage::delete('public/productImages/'.$product->productImage);
           }
           $product->productImage =$fileNameToStore;
           }
         $product->update();
            return  redirect('/viewProduct')->with('status','Product Updated Successfully');
     
    }
    
    public function prodCat($category){
      $products = Product::all()->where('productCategory',$category);
      $categories = category::all();

      return view('client.shop')->with('products',$products)->with('categories',$categories);
    }

    public function delete($id){
      $product = Product::find($id);
      $product->delete();
     return redirect('/viewProduct')->with('status','Product with ID '.$product->id.' Deleted Successfully');
    }
}

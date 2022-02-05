<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderController extends Controller
{
    public function sliderAdd(){
    return view('admin.addSlider');
    }
    
    public function slider(){ 
        $sliders = Slider::all();     
        return view('admin.slider')->with('sliders',$sliders);
    }

    public function save(Request $request){
      $this->validate($request,[
          'sliderDescription1'=> 'required',
          'sliderDescription2'=> 'required',
          'sliderImage'=> 'nullable|max:1999|required'
      ]);

        $fileNameWithExt = $request->file('sliderImage')->getClientOriginalName();
       //  get file name
       $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
       $extension = $request->file('sliderImage')->getClientOriginalExtension();
   //   store filename in database
       $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
       $path = $request->file('sliderImage')->storeAs('public/sliderImages',$fileNameToStore);
      
       $sliders = new Slider();
       $sliders->sliderDescription1 = $request->input('sliderDescription1');
       $sliders->sliderDescription2 = $request->input('sliderDescription2');
       $sliders->sliderImage = $fileNameToStore;
       $sliders->save();       
       return back()->with('status','Slider Saved Successfully');
    }

    public function edit($id){
        $sliders = Slider::find($id);
        return view('admin.editSlider')->with('sliders',$sliders);
    }

    public function update(Request $request){
      $this->validate($request,[
        'sliderDescription1'=> 'required',
        'sliderDescription2'=> 'required',
        'sliderImage'=> 'nullable|max:1999|required'   
      ]);

      if($request->hasFile('sliderImage')){
      $fileNameWithExt = $request->file('sliderImage')->getClientOriginalName();
      //  get file name
      $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
      $extension = $request->file('sliderImage')->getClientOriginalExtension();
  //   store filename in database
      $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
      $path = $request->file('sliderImage')->storeAs('public/sliderImages',$fileNameToStore);
     
      $sliders = Slider::find($request->input('id'));
      $sliders->sliderDescription1 = $request->input('sliderDescription1');
      $sliders->sliderDescription2 = $request->input('sliderDescription2');

// remove image which post has been deleted from the folder
    Storage::delete('public/sliderImages/'.$sliders->sliderImage);    
      $sliders->sliderImage = $fileNameToStore;
}
      $sliders->update();       
      return redirect('/slider')->with('status','Slider Saved Successfully');
      }
    
 public function terminate($id){
    $slider = Slider::find($id);
    $slider->delete();

    return back()->with('status','Slider Deleted Successfully');
     

 }


    }

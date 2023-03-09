<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Brand_Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
   public function index(){
    $cats = Category::all();
    return view('backend.pages.brands.add',compact('cats'));
   }
   public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'cat_id' => 'required'
    ]);
    $brands = new Brands;
    if($request->image){
        $image = $request->file('image');
        $customName = rand().".".$image->getClientOriginalExtension();
        $location = public_path("backend/assets/brand/".$customName);
        Image::make($image)->resize(300, 200)->save($location);
    }
    $brands->name = $request->name;
    $brands->cat_id = $request->cat_id;
    $brands->image =  $customName;
    $brands->save();

    $brandId = Brands::where('name',$request->name)->first();
    if($request->images){
        $mImages = $request->file('images');
      foreach($mImages as $mImage){
        $brand_gallery = new Brand_Gallery;
        $mCustomName = rand().".".$mImage->getClientOriginalExtension();
        $location = public_path("backend/assets/brand/gallery/".$mCustomName);
        Image::make($mImage)->resize(300, 200)->save($location);

        $brand_gallery->brand_id = $brandId->id;
        $brand_gallery->images = $mCustomName;
        $brand_gallery->save();
      }
    }
    return back();
    
   }
   public function show(){
    $brands = Brands::all();
    return view('backend.pages.brands.mange',compact('brands'));
   }
   public function view($id){
    $brand = Brands::find($id);
    $galleries = Brand_Gallery::where('brand_id',$brand->id)->get();
    return view('backend.pages.brands.view',compact('brand','galleries'));
   }
   public function edit($id){
    $brand = Brands::find($id);
    $cats = Category::all();
    $galleries = Brand_Gallery::where('brand_id',$brand->id)->get();
    return view ('backend.pages.brands.edit',compact("brand","galleries","cats"));
   } 
   function update(Request $request, $id){
      $brand = Brands::find($id);
      if($request->image){
         if(File::exists(public_path("backend/assets/brand/".$brand->image))){
          File::delete(public_path("backend/assets/brand/".$brand->image));
          $image = $request->file('image');
          $customName = rand().".".$image->getClientOriginalExtension();
          $location = public_path("backend/assets/brand/".$customName);
          Image::make($image)->resize(300, 200)->save($location);
          $brand->name = $request->name;
          $brand->cat_id = $request->cat_id;
          $brand->image = $customName;
          $brand->update();
        }
        
      }
      else{
        $brand->name = $request->name;
        $brand->cat_id = $request->cat_id;
        $brand->update();
      }
      return back();
   }
   function deletegallery($id){
    $deletegallery = Brand_Gallery::find($id);
    if(File::exists(public_path("backend/assets/brand/gallery/".$deletegallery ->images))){
      File::delete(public_path("backend/assets/brand/gallery/".$deletegallery ->images));
    }
    $deletegallery->delete();
    return back();
   }
   function updategallery(Request $request, $id){
    if($request->images){
      $mImages = $request->file('images');
    foreach($mImages as $mImage){
      $brand_gallery = new Brand_Gallery;
      $mCustomName = rand().".".$mImage->getClientOriginalExtension();
      $location = public_path("backend/assets/brand/gallery/".$mCustomName);
      Image::make($mImage)->resize(300, 200)->save($location);

      $brand_gallery->brand_id = $id;
      $brand_gallery->images = $mCustomName;
      $brand_gallery->save();
    }
  }
  return back();
  
   }
   function deletebrand($id){
    $brand = Brands::find($id);
    $brand_gallery = Brand_Gallery::where("brand_id",$brand->id)->get();
    foreach($brand_gallery as $item){
      if(File::exists(public_path("backend/assets/brand/gallery/".$item ->images))){
        File::delete(public_path("backend/assets/brand/gallery/".$item ->images));
      }
    }
    if(File::exists(public_path("backend/assets/brand/".$brand ->image))){
      File::delete(public_path("backend/assets/brand/".$brand ->image));
    }
    $brand->delete();
    return back();
   }
   function insertbrand(Request $request){
      $validator = Validator::make($request->all(),[
        'name'=>'required',
        'cat_id' =>'required',
        'image' => 'required|mimes:jpeg,jpg,png,gif',
        'images' => 'required'
      ]);
      if($validator->fails()){
        return response()->json([
          'status'=>"failed",
          'errors'=>$validator->messages()
        ]);
      }
      else{
        $brands = new Brands;
    if($request->image){
        $image = $request->file('image');
        $customName = rand().".".$image->getClientOriginalExtension();
        $location = public_path("backend/assets/brand/".$customName);
        Image::make($image)->resize(300, 200)->save($location);
    }
    $brands->name = $request->name;
    $brands->cat_id = $request->cat_id;
    $brands->image =  $customName;
    $brands->save();

    $brandId = Brands::where('name',$request->name)->first();
    if($request->images){
        $mImages = $request->file('images');
      foreach($mImages as $mImage){
        $brand_gallery = new Brand_Gallery;
        $mCustomName = rand().".".$mImage->getClientOriginalExtension();
        $location = public_path("backend/assets/brand/gallery/".$mCustomName);
        Image::make($mImage)->resize(300, 200)->save($location);

        $brand_gallery->brand_id = $brandId->id;
        $brand_gallery->images = $mCustomName;
        $brand_gallery->save();
      }
    }
    return response()->json([
      'msg'=>"Data Succcessfully Inserted"
    ]);
      }
   }
}

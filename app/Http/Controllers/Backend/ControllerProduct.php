<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ControllerProduct extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
       }
    public function index(){
        return view("backend.pages.product.add");
    }
    public function insert(Request $formData){
        $product = new Products;
        $product->name = $formData->name;
        $product->des = $formData->des;
        $product->price = $formData->price;
        $product->quantity = $formData->quantity;
        $product->status = $formData->status;
        $product->save();
        return back();
    }
    public function show(){
        $products = Products::all();
        return view('backend.pages.product.manage',compact('products'));
    }
    public function active($id){
        $product = Products::find($id);
        $product->status = '2';
        $product->update();
        return back();
    }
    public function inactive($id){
        $product = Products::find($id);
        $product->status = '1';
        $product->update();
        return back();
    }
    public function delete($id){
        $product = Products::find($id);
        $product->delete();
        return back();
    }
    function edit($id){
        $product = Products::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }
    function update(Request $request, $id){
        $product = Products::find($id);
        $product->name = $request->name;
        $product->des = $request->des;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->update();
        return redirect()->route('showproduct');

    }
}

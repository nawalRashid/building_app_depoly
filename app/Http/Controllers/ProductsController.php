<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
  public function create(Request $request){

    $request->validate([
        'p_name' => 'required',
        'p_price' => 'required',
        'myimage' => 'required|mimes:jpg',

    ]);

    $image =$request->myimage;
    $imageFileName = time() . '.' . $image->extension();
    $image->move(public_path('images'), $imageFileName);



      $productName = $request->p_name;
      $productPrice = $request->p_price;
      $productImage = $imageFileName;

      $myproduct = new Product;
      $myproduct->name = $productName;
      $myproduct->price = $productPrice;
      $myproduct->img = $productImage;
      $myproduct->save();



     return back();
  }

  public function show(){

      $data['products'] = Product::all();
      return view('showproduct')->with($data);
  }
}

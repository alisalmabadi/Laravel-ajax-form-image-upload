<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(){
        return view('product-add');
    }
    public function show(Request $data){
        $name='image-'.rand(1,900000000).'.'.$data->file('file')->getClientOriginalExtension();
        $data->file('file')->move(public_path('images'),$name);
        $product=new Product();
        $product->title=$data->title;
        $product->imageurl=$name;
        $product->save();
        echo '../images/'.$name;
    }

}

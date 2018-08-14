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
       // $res=URL::asset("images/").$name;
        echo '../images/'.$name;
        /*$image=Product::all();
        $image=$image->where('imageurl',$name);
        return view('product-add')->with('image',$image);*/
/*
$allowedExts = array("gif", "jpeg", "jpg", "png","GIF","JPEG","JPG","PNG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

        if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
          && in_array($extension, $allowedExts)) {
         if ($_FILES["file"]["error"] > 0) {
            echo "0";
        } else {
        $target = "upload/";
        move_uploaded_file($_FILES["file"]["tmp_name"], $target. $_FILES["file"]["name"]);
        echo  "upload/" . $_FILES["file"]["name"];
    }
                } else {
                 echo "0";
                   }*/

    }

}

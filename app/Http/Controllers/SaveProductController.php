<?php

namespace App\Http\Controllers;
use App\ProductPic;
use Illuminate\Http\Request;

class SaveProductController extends Controller
{
    public function save(Request $data){
        /*$base64_str = substr($_POST['base64_image'], strpos($_POST['base64_image'], ",")+1);

       //decode base64 string
       $decoded = base64_decode($base64_str);

       $png_url = "product-".strtotime('now').".png";
       //create png from decoded base 64 string and save the image in the parent folder
       $result = file_put_contents($png_url, $decoded);
        /***********************************************
        $data = Input::all();
       $png_url = "perfil-".time().".jpg";
       $path = public_path() . "/img/designs/" . $png_url;
       $img = $data['fileo'];
       $img = substr($img, strpos($img, ",")+1);
       $data = base64_decode($img);
       $success = file_put_contents($path, $data);
       print $success ? $png_url : 'Unable to save the file.';
        ////////////
         $data=Input::all();
         $base64_str=substr($data->base64_image,strpos($data->base64_image,",")+1);
        $decoded=base64_decode($base64_str);
        $url='image-'.strtotime('now').'.png';
        $result=file_put_contents(public_path('images'),$decoded);*/
       /* $data = Input::all();
        $png_url = "perfil-".time().".png";
        $path = public_path() . "/images/" . $png_url;
        $img = $data['base64_image'];
        $img = substr($img, strpos($img, ",")+1);
        $data = base64_decode($img);
        $success = file_put_contents($path, $data);
        print $success ? $png_url : 'Unable to save the file.';
        $productpic= new ProductPic();
        $productpic->url=$path;
        $productpic->save();*/
        //$data = Input::all();
        $png_url = "perfil-".time().".png";
        $path = public_path() . "/images/" . $png_url;
        $img = $data->base64_image;
        $img = substr($img, strpos($img, ",")+1);
        $data = base64_decode($img);
        $success = file_put_contents($path, $data);
       // print $success ? $png_url : 'Unable to save the file.';
        $productpic= new ProductPic();
        $productpic->url=$path;
       if($productpic->save()){
           echo 'ok';
       }
    }
}

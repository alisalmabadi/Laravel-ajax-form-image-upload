<?php

namespace App\Http\Controllers;
use App\User;
use App\UserNote;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    public function show(){
      return  view('add-note');
    }

    public function store(Request $data){
        $user_id = \Auth::user()->id;  // \Auth::guard('web')->user();
        $title=$data->title;
    $content=$data->content;
    $note=new UserNote();
    $note->title=$title;
    $note->content=$content;
    $note->user_id=$user_id;
   // $note->user_id=5;
    $note->save();
    return back();

    }

    public function index(){
        $note=UserNote::all();
        return view('notes',compact('note'));
    }
}

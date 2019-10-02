<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\img;

use Illuminate\Http\Response;
use Redirect,View;
use Input,DB;

class imgController extends Controller
{
    //
     // protected $article='';

  public function __construct(){
    $this->img = new img;
  }

 public function imgstore(Request $request)
    {
        $file=$request->file('cover');
        $path='image';
        $rule=['jpg','png','gif'];

        $img=$this->img->upload_img($file,$path,$rule);
        return $img;
    }
}

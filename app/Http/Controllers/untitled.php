<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;

use Illuminate\Http\Request;
use App\Http\Models\img;

use Illuminate\Http\Response;
use Redirect,View;
use Input,DB;
use Session;

class ProductsController extends Controller
{

    public function create(){
        return view('products.create');
    }

    public function search(){
        return view('products.search');
    }

     public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


  public function __construct(){
    $this->img = new img;
  }


public function searchproduct(Request $request)
    {
        $this->validate($request, [
            'brandname' => 'required|max:50',
            'color' => 'required|max:50',
            'size' => 'required|max:2',
            'price' => 'required|max:10',
            'year' => 'required|max:4',
            'series' => 'required|max:20'
        ]);

        $color = $request->color;
        $brandname = $request->brandname;
        $size = $request->size;
        $price = $request->price;
        $year = $request->year;
        $series = $request->series;

        return redirect()->route('products.getpost', [$color,$brandname,$size,$price,$year,$series]);
    }

     public function getpost($color,$brandname,$size,$price,$year,$series)
    {
        return view('products.getpost', compact('color','brandname','size','price','year','series'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'brandname' => 'required|max:50',
            'color' => 'required|max:50',
            'size' => 'required|max:2',
            'price' => 'required|max:10',
            'year' => 'required|max:4',
            'series' => 'required|max:20'
        ]);
        $file=$request->file('cover');

        if($file==null){
        $img='image/logo.jpg';
     }
     else{
        if($file->isValid()){

        $path='image';
        $rule=['jpg','png','gif'];

        $img=$this->img->upload_img($file,$path,$rule);
        }
        
     }



         $product = Product::create([
        'customer_id' => Session::get('customer')[0]->id,
            'brandname' => $request->brandname,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        'year' => $request->year,
        'series' => $request->series,
        'img'=>$img,
        ]);


        session()->flash('success', 'Success Post!');
        return redirect()->route('products.show', [$product]);
    }
}

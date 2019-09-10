<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

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

public function searchproduct(Request $request)
    {
        $this->validate($request, [
            'brandname' => 'required|max:50',
            'color' => 'required|max:50',
            'size' => 'required|max:2'
        ]);

        $color = $request->color;
        $brandname = $request->brandname;
        $size = $request->size;

        return redirect()->route('products.getpost', [$color,$brandname,$size]);
    }

     public function getpost($color,$brandname,$size)
    {
        return view('products.getpost', compact('color','brandname','size'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'brandname' => 'required|max:50',
            'color' => 'required|max:50',
            'size' => 'required|max:2'
        ]);

         $product = Product::create([
            'brandname' => $request->brandname,
            'color' => $request->color,
            'size' => $request->size,
        ]);


        session()->flash('success', 'Success Post!');
        return redirect()->route('products.show', [$product]);
    }
}

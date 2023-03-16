<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoUserController extends Controller
{
     public function index()
    {
  
            return view('secciones.productos')->with('product',Product::where('status','existencia')->get());

    }

       public function show($id)
    {
        
        $product=Product::find($id);
            return view('secciones.detalle')->with('product',$product);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
            return view('admin.secciones.product.index')->with('product',Product::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.product.index')->with('product',Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->nombre = $request->nombre;
        $product->precio = $request->precio;
        $product->cantidad = $request->cantidad;
        $product->descripcion = $request->descripcion;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;

        $product->save();

        return view('admin.secciones.product.index')->with('product',Product::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product=Product::find($id);
            return view('admin.secciones.product.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       
        $product=Product::find($id);
            return view('admin.secciones.product.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product =  Product::find($id);

        $product->nombre = $request->nombre;
        $product->precio = $request->precio;
        $product->cantidad = $request->cantidad;

        $product->descripcion = $request->descripcion;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        
        return view('admin.secciones.product.index')->with('product',Product::all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::find($id);
        $product->delete();
        return view('admin.secciones.product.index')->with('product',Product::all());

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
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
  
            return view('admin.secciones.product.index')->with('product',Product::all())->with('brand',Brand::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.product.index')->with('product',Product::all())->with('brand',Brand::all());
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
        $product->tipo = $request->tipo;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        if($request->hasFile('img1')){
            $img1= $request->file('img1');
            $destino='admin/files/productos/';
            $origen=$img1->getClientOriginalName();
            $img1->move( $destino,$origen);
            $product->img1 = $origen;
        }
        if($request->hasFile('img2')){
            $img2= $request->file('img2');
            $destino='admin/files/productos/';
            $origen=$img2->getClientOriginalName();
            $img2->move( $destino,$origen);
            $product->img2 = $origen;
        }
        if($request->hasFile('img3')){
            $img3= $request->file('img3');
            $destino='admin/files/productos/';
            $origen=$img3->getClientOriginalName();
            $img3->move( $destino,$origen);
            $product->img3 = $origen;
        }
        $product->save();

        return view('admin.secciones.product.index')->with('product',Product::all())->with('brand',Brand::all());
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
            return view('admin.secciones.product.show')->with('product',$product)->with('brand',Brand::all());
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
            return view('admin.secciones.product.edit')->with('product',$product)->with('brand',Brand::all());
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
        $product->tipo = $request->tipo;
        $product->descripcion = $request->descripcion;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        if($request->hasFile('img1')){
            $img1= $request->file('img1');
            $destino='admin/files/productos/';
            $origen=$img1->getClientOriginalName();
            $img1->move( $destino,$origen);
            unlink('admin/files/productos/'.$product->img1);
            $product->img1 = $origen;
        }
        if($request->hasFile('img2')){
            $img2= $request->file('img2');
            $destino='admin/files/productos/';
            $origen=$img2->getClientOriginalName();
            $img2->move( $destino,$origen);
            unlink('admin/files/productos/'.$product->img2);
            $product->img2 = $origen;
        }
        if($request->hasFile('img3')){
            $img3= $request->file('img3');
            $destino='admin/files/productos/';
            $origen=$img3->getClientOriginalName();
            $img3->move( $destino,$origen);
            unlink('admin/files/productos/'.$product->img3);
            $product->img3 = $origen;
        }
       
        $product->save();
        return view('admin.secciones.product.index')->with('product',Product::all())->with('brand',Brand::all());
    
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
        unlink('admin/files/productos/'.$product->img1);
        unlink('admin/files/productos/'.$product->img2);
        unlink('admin/files/productos/'.$product->img3);
        return view('admin.secciones.product.index')->with('product',Product::all())->with('brand',Brand::all());

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreBrandRequest;
// use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
;
            return view('admin.secciones.brand.index')->with('brand',Brand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.brand.index')->with('brand',Brand::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();

        $brand->nombre = $request->nombre;
        if($request->hasFile('imagen')){
            $imagen= $request->file('imagen');
            $destino='admin/files/brand/';
            $origen=$imagen->getClientOriginalName();
            $imagen->move( $destino,$origen);
            $brand->imagen = $origen;
        }
        $brand->save();
        return view('admin.secciones.brand.index')->with('brand',Brand::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand=Brand::find($id);
        return view('admin.secciones.brand.show')->with('brand',$brand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
        return view('admin.secciones.brand.edit')->with('brand',$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand=Brand::find($id);
        $brand->nombre = $request->nombre;
        if($request->hasFile('imagen')){
            $imagen= $request->file('imagen');
            $destino='admin/files/brand/';
            $origen=$imagen->getClientOriginalName();
            $imagen->move( $destino,$origen);
            unlink('admin/files/brand/'.$brand->imagen);
            $brand->imagen = $origen;
        }
        $brand->save();
        return view('admin.secciones.brand.index')->with('brand',Brand::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $brand=Brand::find($id);
        unlink('admin/files/brand/'.$brand->imagen);

        $brand->delete();
        return view('admin.secciones.brand.index')->with('brand',Brand::all());
    }
}

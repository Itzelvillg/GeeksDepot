<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreImageRequest;
// use App\Http\Requests\UpdateImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.secciones.image.index')->with('image',Image::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.image.index')->with('image',Image::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();

        $image->product_id = $request->product_id;
        $image->imagen = $request->imagen;
        
        $image->save();
        return view('admin.secciones.image.index')->with('image',Image::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image=Image::find($id);
        return view('admin.secciones.image.show')->with('image',$image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image=Image::find($id);
        return view('admin.secciones.image.edit')->with('image',$image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image=Image::find($id);
        $image->product_id = $request->product_id;
        $image->imagen = $request->imagen;
        
        $image->save();
        return view('admin.secciones.image.index')->with('image',Image::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Image::find($id);
        $image->delete();
        return view('admin.secciones.image.index')->with('image',Image::all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Request;
// use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('admin.secciones.blog.index')->with('blog',Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.secciones.blog.index')->with('blog',Blog::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();

        $blog->titulo = $request->titulo;
        $blog->noticia = $request->noticia;
        $blog->imagen = $request->imagen;
        $blog->save();

        return view('admin.secciones.blog.index')->with('blog',Blog::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::find($id);
            return view('admin.secciones.blog.show')->with('blog',$blog);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $blog=Blog::find($id);
            return view('admin.secciones.blog.edit')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $blog =  Blog::find($id);

        $blog->titulo = $request->titulo;
        $blog->noticia = $request->noticia;
        $blog->imagen = $request->imagen;
        $blog->save();
        return view('admin.secciones.blog.index')->with('blog',Blog::all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =  Blog::find($id);
        $blog->delete();
        return view('admin.secciones.blog.index')->with('blog',Blog::all());

    }
}

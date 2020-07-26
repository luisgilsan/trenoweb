<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:category.create')->only(['create','store']);
        $this->middleware(['can:category.index','verified'])->only(['index']);
        $this->middleware('can:category.edit')->only(['edit','update']);
        $this->middleware('can:category.show')->only(['show']);
        $this->middleware('can:category.destroy')->only(['destroy']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        ProductCategory::deletePicture($category->id);
        $category->delete();
        dd('aqui');
        return back()->with('info','Categoria Eliminada');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::paginate();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = False;
        if ($image = ProductCategory::setPicture($request->image)){
            $request->request->add(['picture'=> $image]);
        }
        $obj_to_save = $request->except('image','_token');
        $category = ProductCategory::create($obj_to_save);

        return redirect()->route('category.edit', $category->id)
        ->with('info','Categoria Guardada');
        echo "Guardado ";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $category)
    {
        $name_image = $category->picture ? $category->picture : 'none';
        return view('category.show',compact('category','name_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
        $name_image = $category->picture ? $category->picture : 'none';
        return view('category.edit',compact('category','name_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        $image = False;
        if ($image = ProductCategory::updatePicture($request->image,$category->id)){
            $request->request->add(['picture'=> $image]);
        }
        $new_category = $request->except('image','_token');
        $category->update($new_category);
        // return view('category.edit', compact('category','name_image'))
        // ->with('info','Categoria Actualizada');  

        return redirect()->route('category.edit', $category->id)
        ->with('info','Categoria Actualizada');
    }


    
}

<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:products.create')->only(['create','store']);
        $this->middleware(['can:products.index','verified'])->only(['index']);
        $this->middleware('can:products.edit')->only(['edit','update']);
        $this->middleware('can:products.show')->only(['show']);
        $this->middleware('can:products.destroy')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::paginate();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
        if ($image = product::setPicture($request->image)){
            $request->request->add(['picture'=> $image]);
        }
        $obj_to_save = $request->except('image','_token');
        $product = product::create($obj_to_save);

        return redirect()->route('products.edit', $product->id)
        ->with('info','Producto Guardado');
        echo "Guardado ";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        dd($product);
        $name_image = $product->picture ? $product->picture : 'none';
        return view('products.show',compact('product','name_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $name_image = $product->picture ? $product->picture : 'none';
        return view('products.edit',compact('product','name_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $image = False;
        if ($image = product::updatePicture($request->image,$product->id)){
            $request->request->add(['picture'=> $image]);
        }
        !$request->for_sale ? $request->request->add(['for_sale'=> 0]) : false;
        !$request->discount ? $request->request->add(['discount'=> 0]) : false;
        $new_product = $request->except('image','_token');
        $product->update($new_product);
        return redirect()->route('products.edit', $product->id)
        ->with('info','Producto Actualizado');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        product::deletePicture($product->id);
        $product->delete();

        return back()->with('info','Producto Eliminado');
    }
}

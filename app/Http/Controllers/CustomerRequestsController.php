<?php

namespace App\Http\Controllers;

use App\customer_requests;
use Illuminate\Http\Request;

class CustomerRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = customer_requests::paginate();
        return view('customer_requests.index', compact('lines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj_to_save = $request->except('_token');
        $obj_to_save['state'] = 'draft';
        $customer_requests = customer_requests::create($obj_to_save);
        // return redirect()->route('category.edit', $category->id)
        // ->with('info','Categoria Guardada');
        // echo "Guardado ";
        echo "Solicitud guardada";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer_requests  $customer_requests
     * @return \Illuminate\Http\Response
     */
    public function show(customer_requests $customer_requests)
    {
        dd($customer_requests);

        return view('products.show',compact('customer_requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer_requests  $customer_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_requests $customer_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer_requests  $customer_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer_requests $customer_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer_requests  $customer_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_requests $customer_requests)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\customer_request;
use Illuminate\Http\Request;

class CustomerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = customer_request::paginate();
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
        $customer_requests = customer_request::create($obj_to_save);
        // return redirect()->route('category.edit', $category->id)
        // ->with('info','Categoria Guardada');
        // echo "Guardado ";
        echo "Solicitud guardada";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer_request  $customer_request
     * @return \Illuminate\Http\Response
     */
    public function show(customer_request $customer_request)
    {
        $customer_request = CustomerRequestController::change_state_name($customer_request);
        return view('customer_requests.show',compact('customer_request'));
    }

    /**
     * Format state from the request.
     *
     */
    public static function change_state_name(customer_request $name){
        $name['state'] = ($name['state'] == 'draft' ? 'Borrador': 'Revisado');
        return $name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer_request  $customer_request
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_request $customer_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer_request  $customer_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer_request $customer_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer_request  $customer_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_request $customer_request)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\role;
use App\product;
use App\Http\Controllers\Controller;


class CatalogController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        $role = new role();
        $role->name = 'Rol Administrador';
        $role->airline = 'Avianca';
        $role->description = 'SN';
        $role->save();

        role::create([
            'name' => 'Gerente proyecto',
            'airline' => 'Satena',
            'description' => 'SN'
        ]);
        return 'Role Guardado';
    }

    public function index()
    {
        $products = product::paginate();
        return view('catalog.index', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = role::findOrFail($id);
        $role->name ='jaja';  
        return $role;
    }

}
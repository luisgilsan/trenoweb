<?php

namespace App\Http\Controllers;

use App\role;
use App\Http\Controllers\Controller;

class ControllerTest extends Controller
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
        $allregs = role::all();
        dd($allregs);
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
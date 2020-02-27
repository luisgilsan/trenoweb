<?php

namespace App\Http\Controllers;

use App\unit_measurement;
use Illuminate\Http\Request;

class UnitMeasurementController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:unit.create')->only(['create','store']);
        $this->middleware(['can:unit.index','verified'])->only(['index']);
        $this->middleware('can:unit.edit')->only(['edit','update']);
        $this->middleware('can:unit.show')->only(['show']);
        $this->middleware('can:unit.destroy')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = unit_measurement::paginate();

        dd($units);

        return view('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = unit_measurement::create($request->all());
        return redirect()->route('units.edit', $unit->id)
        ->with('info','Producto Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(unit_measurement $unit)
    {
        return view('units.show',compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(unit_measurement $unit)
    {
        return view('units.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unit_measurement $unit)
    {
        $unit->update($request->all());

        return redirect()->route('units.edit', $unit->id)
        ->with('info','Unidad Actualizada');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(unit_measurement $unit)
    {
        $unit->delete();

        return back()->with('info','Unidad Eliminada');
    }
}

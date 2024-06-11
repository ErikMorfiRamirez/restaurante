<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeseroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mesero.atencion_clientes');
    }
    public function menu()
    {
        return view('mesero.menu_atencion_clientes');
    }
    public function mesas()
    {
        return view('mesero.mesas_atencion_clientes');
    }
    public function mesas_detalle()
    {
        return view('mesero.mesas_detalle_atencion_clientes');
    }
    public function pedidos()
    {
        return view('mesero.pedidos_atencion_clientes');
    }

    public function menu_detalle(){
        return view('mesero.menu_detalle_atencion_clientes');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

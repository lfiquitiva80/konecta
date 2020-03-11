<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Alert;


class clientesController extends Controller
{
              /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$clientes = clientes::pluck('razon_social','id');
        
        return view('clientes.index');
        //dd(pe::all());
       

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
        
        //dd($request-> all());
        $clientes =  new clientes($request-> all());
        $clientes->save();
        Alert::success('', 'La información  ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->id;
        $clientes = clientes::find($request->id);
        $clientes->fill($request->all());
        $clientes->save();
        Alert::success('', 'ha sido sido editado con exito! !')->persistent('Close');

        return redirect()->route('clientes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $clientes = clientes::find($id);
         $clientes->delete();
         Alert::success('', 'el Cliente ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('clientes.index');
    }
    public function tablaindex(){
       
 $clientes = clientes::all();
 //$tipo = tipo::all();
         return Datatables::of($clientes)
         ->addColumn('botones' , 'clientes.actions' )
         ->addColumn('delete' , 'clientes.destroy' )       
         ->rawColumns(['botones','delete'])
         ->toJson();
    }
}

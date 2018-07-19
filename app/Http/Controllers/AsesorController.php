<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesores;

class AsesorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores = Asesores::all();
        return view('Asesores.index', compact('asesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Asesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'codigo' => 'required|numeric|min:1',
            'nombre' => 'required|string|max:45'
          ]);
        Asesores::create($request->all());
        return redirect('/')->with([swal()->autoclose(1500)->success('Registro Exitoso', 'Se ha agregado un nuevo registro')]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesores = Asesores::find($id);
        return view('Asesores.edit', compact('asesores'));
    }

    public function show($id)
    {
        return "ingreso al method show".$id;
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
        Asesores::findOrFail($id)->update($request->all());
        return redirect('createA')->with([swal()->autoclose(1500)->success('Actualización Exitosa', 'Se ha agregado un nuevo registro')]);
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $asesores=Asesores::find($id);
       Asesores::where('idvendedor', '=', $id)->delete();
       return redirect('createA')->with([swal()->autoclose(1500)->success('Registro Eliminado', 'Se ha eliminado un registro')]);


    }
}

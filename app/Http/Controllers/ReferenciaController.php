<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referencias;
class ReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $referencias=Referencias::all();
        return view('Referencias.index', compact('referencias'));
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
        $rules=[
            'codigo'=>'required',
            'nombre'=>'required'
        ];
        $messages=[
            'codigo.required' => 'el codigo de la referencia es obligatorio',
            'nombre.required'=> 'El nombre de la referencia es obligatorio'
        ];
        // return $request;
        if($request->ajax()){
            $result=Referencias::create($request->all());
            $array = array('status' => 'trueInsert' );
            return response()->json($array);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $reference=Referencias::findOrFail($id);
            return $reference;
            // return "hola";
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
        if($request->ajax()){
            $reference=Referencias::findOrfail($id)->update($request->all());
            $array =array('status'=>'trueUpdate' );
            return response()->json($array);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $references=Referencias::findOrfail($id);
        Referencias::where('idreferencias','=' , $id)->delete();
        return  redirect('references')->with([swal()->autoclose(1500)->success('Registro eliminado','registro eliminado con exito')]);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\DocumentoRequest;
use App\Documento;

class DocumentoCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $documentos = Documento::all();
    $documentos = Documento::all()->toJson();

      // error_log($documentos);
        error_log('metodo index metodo get');


       
       $vector =  json_decode($documentos);

        foreach($vector as $v){
            try{
                $v->imagen=  base64_encode( file_get_contents(public_path().$v->imagen));
            }catch(Exception $e) {
                error_log('error');
            }
        
           
        }
        //dd($documentos);
        //dd(json_encode($vector));


      //return view('documentos.index')->with('documentos',$documentos);
    return $vector;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        error_log('metodo create');
        //return view('documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoRequest $request)
    {

        error_log($request);
        error_log('metodo estore metodo post');
       /*$documento = new Documento();
        $documento->nombre = $request->nombre;
        $documento->descripcion = $request->descripcion;
        $documento->cantidad = $request->cantidad;
        $documento->user_id = 1;

        $documento->save();
        
        
        return redirect()->route('documento.index');*/
        //return [1];

        $mivariable = "hola";
        print_r(json_encode($mivariable));

        return $mivariable;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        error_log($id);
        error_log('metodo show');
        /*$documento = Documento::where('id', '=', $id)->delete();
        return redirect()->route('documento.index');*/

        return 1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        error_log('metodo edit');
        /*$documento = Documento::find($id);

        return view('documentos.edit')->with('documento',$documento);*/
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentoRequest $request, $id)
    {   
        error_log('metodo update');
       /* $documento = Documento::find($id);

        $documento->update($request->all());

        return redirect()->route('documento.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        error_log('metodo delete');

        return 1;
    }


    /*METODOS ADICIONALES*/

    public function decodificar($j){

        
        $array = json_decode($j);

        return $array;
    }
}

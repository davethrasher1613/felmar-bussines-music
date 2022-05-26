<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instrumento;
use Illuminate\Support\facades\Storage;

class InstrumentoController extends Controller



{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 return Instrumento::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instrumentos.instrumento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([

            'imagen'=>"required|image|max:2048"
        ]);
    
        $guardarinstrumento=request()->except('_token');
        if($request->hasfile('imagen')){
        
            $guardarinstrumento['imagen']=$request->file('imagen')->store('imagesproducto', 'public');
            
        }

    Instrumento::insert($guardarinstrumento);
    return redirect()->route('consultas.stockfelmar'); 
      
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $busqueda=Instrumento::findOrFail($id);
        return view('consultas.actualizar', compact('busqueda'));
        
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
        

        $busqueda=request()->except(['_token','_method']);

        if($request->hasFile('imagen')){
            $instrumento=Instrumento::findOrfail($id);
            Storage::delete('public/'.$instrumento->foto);
            $busqueda['imagen']=$request->file('imagen')->store('imagesproducto','public');
        }
        Instrumento::where('id', '=',$id)->update($busqueda);
        $instrumento=Instrumento::findOrfail($id);
        return redirect()->route('consultas.stockfelmar');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}


 

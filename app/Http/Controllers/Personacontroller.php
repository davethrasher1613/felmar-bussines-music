<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class Personacontroller extends Controller
{
    //

    public function edit($numeroDocumento){
        $persona=Persona::findOrFail($numeroDocumento);
        //return view('persona.edit', compact('persona'));
        return $persona;
    }
}

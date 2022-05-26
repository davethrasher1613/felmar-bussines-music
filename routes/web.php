<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Instrumento;
use App\Models\Tipo;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SocialController;


//use App\Models\Consulta;



//login facebook

Route::get('auth/facebook',[SocialController::class,'redirectFacebook']);
Route::get('auth/facebook/callback',[SocialController::class,'callbackFacebook']);



Route::get('/', [MainController::class, 'post_list']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('index', function () {
    return view('registros.index');
})->name('registros.index');

Route::get('amplificadores', function () {
    return view('registros.amplificador');
})->name('registros.amplificador');

Route::get('bajos', function () {
    return view('registros.bajo');
})->name('registros.bajo');

Route::get('baterias', function () {
    return view('registros.bateria');
})->name('registros.bateria');

Route::get('guitarras', function () {
    return view('registros.guitarra');
})->name('registros.guitarra');

Route::get('pedales', function () {
    return view('registros.pedal');
})->name('registros.pedal');

Route::get('teclados', function () {
    return view('registros.teclado');
})->name('registros.teclado');

Route::get('vientos', function () {
    return view('registros.viento');
})->name('registros.viento');

//stock 
 Route::get('stockfelmar', function () {
       
       $producto=Instrumento::select('id','tipo','nombre','modelo','descripcion','cantidad','precio','imagen')
       ->orderby('nombre','asc')
       ->paginate(5);
      
         return view('consultas.stockfelmar',compact('producto'));
        
    })->name('consultas.stockfelmar');


// cierre stock


//mostrar productos en vista guitarras

Route::get('guitarras', function () {
       
     $guitarra=Instrumento::all()->where('tipo', '1')
    ->take(12);
 
   
      return view('registros.guitarra',compact('guitarra'));
     
 })->name('registros.guitarra');


// cierre de mostrar productos en vista guitarras

//mostrar productos en vista index

Route::get('index', function () {
       
    $variedad=Instrumento::all()->where('tipo')
   ->take(12);

  
     return view('registros.index',compact('variedad'));
    
})->name('registros.index');


// cierre de mostrar productos en vista index








//mostrar productos en vista amplificadores

Route::get('amplificador', function () {
       
    $amplificador=Instrumento::all()->where('tipo','5')
   ->take(12);

  
     return view('registros.amplificador',compact('amplificador'));
    
})->name('registros.amplificador');


// cierre de mostrar productos en vista amplificadores



//mostrar productos en vista bajos

Route::get('bajo', function () {
       
    $guitarrabaja=Instrumento::all()->where('tipo','2')
   ->take(12);

  
     return view('registros.bajo',compact('guitarrabaja'));
    
})->name('registros.bajo');

// cierre de mostrar productos en vista bajos




//mostrar productos en vista baterias

Route::get('bateria', function () {
       
    $bateria=Instrumento::all()->where('tipo','3')
   ->take(12);

  
     return view('registros.bateria',compact('bateria'));
    
})->name('registros.bateria');

// cierre de mostrar productos en vista baterias




//mostrar productos en vista pedales

Route::get('pedal', function () {
       
    $pedal=Instrumento::all()->where('tipo','4')
   ->take(12);

  
     return view('registros.pedal',compact('pedal'));
    
})->name('registros.pedal');

// cierre de mostrar productos en vista pedales



//mostrar productos en vista pianos y teclados

Route::get('teclado', function () {
       
    $teclado=Instrumento::all()->where('tipo','6')
   ->take(12);

  
     return view('registros.teclado',compact('teclado'));
    
})->name('registros.teclado');

// cierre de mostrar productos en vista pianos y teclados



//mostrar productos en vista vientos

Route::get('viento', function () {
       
    $viento=Instrumento::all()->where('tipo','7')
   ->take(12);

  
     return view('registros.viento',compact('viento'));
    
})->name('registros.viento');

// cierre de mostrar productos en vista vientos




Route::resource('instrumentos',InstrumentoController::class);
Route::resource('consultas',InstrumentoController::class);





//tipos de instrumento


Route::get('tipoinstrumento', function () {
    return view('tipos.tipoinstrumento');
})->name('tipos.tipoinstrumento');





Route::post('tipoinstrumento', function (Request $request) {
    /* return view('products.store'); */
    /* return 'Guardando datos'; */
    /* return $request->all(); */
    $guardartipoinstrumento=new Tipo;
    $guardartipoinstrumento->codTipo=$request->input('codTipo');
    $guardartipoinstrumento->nombreInstrumento=$request->input('nombreInstrumento');
  

    $guardartipoinstrumento->save();
return redirect()->route('tipos.tipoinstrumento');
})->name('tipos.tipoinstrumento');


//cierre de tipos de instrumentos












//combobox categorias

Route::get('instrumentos', function () {
    //    return view('products.index');
        $codTipos=Tipo::all();
        return view('instrumentos.instrumento',compact('codTipos'));
    })->name('instrumentos.instrumento');

//cierre combobox



//mostrar productos

Route::get('consultas', function () {
    //    return view('products.index');
        $busqueda=Instrumento::orderBy('created_at','desc')->get();
        return view('consultas.instrumentoconsulta',compact('busqueda'));
    })->name('consultas.instrumentoconsulta');
//cerrar productos
    

//consulta


    Route::get('consultas', function (Request $request) {
    
        $consulta=$request->input('buscarproducto');
        $busqueda=Instrumento::select('id','tipo','nombre','modelo','descripcion','cantidad','precio','imagen')
        ->where('nombre','LIKE', '%' .$consulta.'%')
        ->orwhere('modelo' ,'LIKE', '%' .$consulta.'%')
     
      
     ->orwhere('descripcion',$consulta)
     ->paginate(5);
    
    
   
      
      

    
        
    return view('consultas.instrumentoconsulta',compact('busqueda'));
    // return view('productos.busqueda');
    })->name('consultas.instrumentoconsulta'); 
    //cierre consulta

    //consultas cliente


    Route::get('consultas.buscarproducto', function (Request $request) {
    
        $consultas=$request->input('buscar');
        $busquedacliente=Instrumento::select('id','tipo','nombre','modelo','descripcion','cantidad','precio','imagen')
        ->where('nombre','LIKE', '%' .$consultas.'%')
        ->orwhere('modelo' ,'LIKE', '%' .$consultas.'%')
     
      
     ->orwhere('descripcion',$consultas)
     ->paginate(12);
    
    
   
    
    return view('consultas.buscarproducto',compact('busquedacliente'));
    // return view('productos.busqueda');
    })->name('consultas.buscarproducto'); 
    //cierre consulta


    //cierre de consulñtas del cliente



    // eliminar productos
Route::delete('eliminar/{id}', function($id) {
    //return $id; 
    $buscar=Instrumento::findOrFail($id);
    $buscar->delete();
    return redirect()->route('consultas.stockfelmar');
 })->name('consultas.destroy'); 

 //cierre de eliminacion

 
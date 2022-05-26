<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return user::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $existente = User::where('email',$request->email)->get();
        $existentenumero = User::where('numerodocumento',$request->numerodocumento)->get();

if($existente->count()!=0 or $existentenumero->count()!=0){

    return 'error: email o numero de documento duplicado';
}



$users= new user;
$users->nombre =$request->nombre;
 $users->apellido =$request->apellido;
$users->tipodocumento=$request->tipodocumento;
$users->numerodocumento=$request->numerodocumento;
$users->telefono=$request->telefono;
$users->email=$request->email;
$users->password=Hash::make($request->password);
$users->email_verified_at=date('y-m-d');
$users->save();
print('registro almacenado');




      //  return user::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email, Request $request)
    {
        $campo= filter_var($email, FILTER_VALIDATE_EMAIL)?'email':'id';

$users= User::where($campo, $email)->get();


if($users->count()==0){

    return"error... correo no encontrado";
}
return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return user::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return user::destroy($id);
    }
}

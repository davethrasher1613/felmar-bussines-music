<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;
class SocialController extends Controller
{


public function redirectFacebook(){

return Socialite::driver('facebook')->redirect();



}



public function callbackFacebook(){


    try {
        $FacebookUser=Socialite::driver('facebook')->user();

        $findUser=User::where('fb_id',$FacebookUser->id)->firts();

if ($findUser) {
    Auth::login($findUser);
    return redirect()->intended('dashboard');
}else{
$newUser =User::create([

'name'=> $FacebookUser->name,
'email'=> $FacebookUser->email,
'fb_id'=> $FacebookUser->fb_id,
'password'=> encrypt('12345678')


]);

Auth::login($newUser);
return redirect()->intended('dashboard');
}
    

} catch (Exception $e) {
  dd($e->getMessage());
       }



}




















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

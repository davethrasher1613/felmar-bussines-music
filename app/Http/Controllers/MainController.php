<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client ;

class MainController extends Controller
{
    protected $conexion;

    public function __construct()
    {
        $this->conexion = new Client(['base_uri'=>
        'http://jsonplaceholder.typicode.com/',]);
    }

    public function post_list(){

    $respuesta = $this-> conexion->request('GET','posts')->getBody()->getContents();
    $respuesta=json_decode($respuesta, true);
    dd($respuesta);

    }

    public function show_post($id){


        $respuesta= $this-> conexion->request('GET','posts/'.$id)->getBody()->getContents();
    $respuesta=json_decode($respuesta,true);
    dd($respuesta);
    }
}

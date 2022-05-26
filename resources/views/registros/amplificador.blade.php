 


@extends('layouts/layout')



@section('content')

  

<div class="titulo">
                  <h2 style="text-align: center;">Amplificadores</h2>

                  </div>




              
<div class="parrafo" >
                  <p >En esta seccion te mostraremos una gran variedad de amplificadorfes desde 10 wats en adelante, contamos con amplificadores de valbulas y transitores, manejamos marcas tales como: Randall, Marshall, Orange, Fender, Deans, Mega, Peavey etc... que esperas!!? animate y compra el tuyo </p>
                  
                  </div>

 
                  <div class="main -contect" style="margin-top:30px;">
    <form class="form-search" action="{{route('consultas.buscarproducto')}}" method="get" action="" align="center">

    <input type="search" name="buscar" placeholder="buscar.." required>
    <button   class="fa fa-search" type="submit"> BUSCAR  </button>
   
    </form> 

                  </div>
                  
    <style>

input:hover{
    background-color: #D7DBDD ;
   

}
input{
    height: 40px;
    width: 600px;
   

}


button{
color: white;
background-color: rgb(251, 210, 27);

border-radius: 200px;
width: 120px;
height: 40px;
}


</style>

              
            
<div class="container">
                  @foreach($amplificador as $amplificadores)
                
                      <div class="item">
                      <img src="{{$amplificadores->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$amplificadores->nombre}}</h2> 
                          <h2>{{$amplificadores->modelo}}</h2> 
                          <h2>{{$amplificadores->descripcion}}</h2>
                          <h2> $ {{$amplificadores->precio}}</h2>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>


                    @endsection('')
            
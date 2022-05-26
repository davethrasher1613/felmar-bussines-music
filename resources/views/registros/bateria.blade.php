@extends('layouts/layout')



@section('content')
<div class="titulo">
                  <h2 style="text-align: center;">Baterias Acusticas Y electricas</h2>

                  </div>

<div class="parrafo" >
                  <p >En esta seccion podras encontrar multiples tipos de baterias desde kits para niños hasta kits profesionales, podras encontrar los accesorios que necesites como hit hats, toms, pedlaes de bombo etc... por otro lado encontraras dos tipos de baterias que son electrica y acustica con doble pedal o sencillo, que esperas? animate y rompe las barreras del sonido!!! </p>
                  
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
                    background-color: rgb(233, 193, 13);
                    border-radius: 200px;
                    width: 120px;
                    height: 40px;
                    }
                    
                    
                    </style>
                    





<div class="container">
                  @foreach($bateria as $baterias)
                
                      <div class="item">
                      <img src="{{$baterias->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$baterias->nombre}}</h2> 
                          <h2>{{$baterias->modelo}}</h2> 
                          <h2>{{$baterias->descripcion}}</h2>
                          <h2>${{$baterias->precio}}</h2>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>



                              
                    @endsection('')
            
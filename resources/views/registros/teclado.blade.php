@extends('layouts/layout')



@section('content')


<div class="titulo">
                  <h2 style="text-align: center;">Teclados</h2>

                  </div>


                  <div class="parrafo" >
                  <p >En esta seccion te mostraremos una gran variedad de pianos y teclados desde 2 octavas hasta 8 o mas, tenemos marcas como yamaha, Bechstein, Bluthner,
                    Bosendorfer (desde Austria), Fazioli (from Italy), Petrof/Weinbach, Estonia, Kawai, Samick, Young Chang. ¿Que esperas para comprar? </p>
                  
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
                  @foreach($teclado as $teclados)
                
                      <div class="item">
                      <img src="{{$teclados->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$teclados->nombre}}</h2> 
                          <h2>{{$teclados->modelo}}</h2> 
                          <h2>{{$teclados->descripcion}}</h2>
                          <h2>${{$teclados->precio}}</h3>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>


          




           
                    @endsection('')

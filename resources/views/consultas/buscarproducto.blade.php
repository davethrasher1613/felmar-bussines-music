@extends('layouts/layout')



@section('content')

<div class="titulo">

                  <h2 style="text-align: center;">Productos encontrados</h2>

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
                  @if(count($busquedacliente)<=0)
<div class="parrafobusqueda">
  <p   colspan="8">¡LO SENTIMOS PRODUCTO NO ENCONTRADO, POR FAVOR PRUEBA CON OTRO!</p>
</div>

 @else
                  @foreach($busquedacliente as $busquedaclientes)
                
                      <div class="item">
                      <img src="{{$busquedaclientes->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$busquedaclientes->nombre}}</h2> 
                          <h3>{{$busquedaclientes->modelo}}</h3> 
                          <h3>{{$busquedaclientes->descripcion}}</h3>
                          <h3>{{$busquedaclientes->precio}}</h3>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      @endif
                      </div>
                  
                   
                  

                    @endsection('')
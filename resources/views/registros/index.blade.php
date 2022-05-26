@extends('layouts/layout')



@section('content')




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
  
<div class="main -contect" style="margin-top:30px;">
    <form class="form-search" action="{{route('consultas.buscarproducto')}}" method="get" action="" align="center">

    <input type="search" name="buscar" placeholder="buscar.." required>
    <button   class="fa fa-search" type="submit"> BUSCAR  </button>
   
    </form> 

                  </div>

    <br>
    <br>
    

    <div id="contenedor-slider" class="contenedor-slider" style="width:1600px; height: 600px;">
                    <div id="slider" class="slider">
                        <section class="slider__section"><img style="height: 600px; width:1600px;"src="/Felmarsoacha/img/pgbienvenida.JPEG" class="slider__img"></section>
                        <section class="slider__section"><img style="height: 600px; width:1600px;" src="/Felmarsoacha/img/contamos.JPEG" class="slider__img"></section>
                        <section class="slider__section"><img style="height: 600px; width:1600px;" src="/Felmarsoacha/img/amplificadores.jpeg" class="slider__img"></section>
                        <section class="slider__section"><img style="height: 600px; width:1600px;" src="/Felmarsoacha/img/bajos.jpeg" class="slider__img"></section>
                        <section class="slider__section"><img  style="height: 600px; width:1600px;" src="/Felmarsoacha/img/baterias8.jpg" class="slider__img"></section>
                        <section class="slider__section"><img style="height: 600px; width:1600px;" src="/Felmarsoacha/img/guitarras1.jpg" class="slider__img"></section>
                        <section class="slider__section"><img  style="height: 600px; width:1600px;" src="/Felmarsoacha/img/pedales.jpeg" class="slider__img"></section>
                        <section class="slider__section"><img style="height: 600px; width:1600px;" src="/Felmarsoacha/img/otros.jpeg" class="slider__img"></section>
                        
                    </div>


                   
                    <div id="btn-prev" class="btn-prev">&#60;</div>
                    <div id="btn-next" class="btn-next">&#62;</div>
                </div>
            </div>
            
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

            <script src="/Felmarsoacha/js/index.js"></script>
        </div>
    </div>
  

<body>
  











  
    
  
      
                
                  <br>
                  <br>
                  <br>
                 


                  <div class="titulo">
                  <h2 style="text-align: center;">Bienvenido a Felmar Bussines Music!!</h2>

                  </div>
                  
                  <br>
                  

                  <div class="parrafo" >
                  <p > Bienvenido a felmar Bussines Music, nos encontramos en soacha cundinamarca como sede local, quisimos modernizarnos en el mercado y ahora tenemos nuestra tienda virtual, contamos con los mejores productos, accesorios, libros e instrumentos musicales para tu carrera o practica diaria, tenemos productos nacionales e internacionales, busca el producto que mas te guste y disfruta de esta gran experiencia musicovirtual con Felmar Business Music!!!</p>
                  
                  </div>
              
   
                  
   


                  <div class="container">
                  @foreach($variedad as $variedades)
                
                      <div class="item">
                      <img src="{{$variedades->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$variedades->nombre}}</h2> 
                          <h2>{{$variedades->modelo}}</h3> 
                          <h2>{{$variedades->descripcion}}</h2>
                          <h2>{{$variedades->precio}}</h3>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>


      
      
     

    
      @endsection('')

    




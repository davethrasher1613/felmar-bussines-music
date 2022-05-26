<!DOCTYPE html>
<html  lang="es">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Inicio Felmar Business Music</title> 
  
  
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/felmar.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/actualizar.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/tablaconsultas.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/formulario.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/register.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/login.css">
  <link rel="stylesheet" href="/Felmarsoacha/resources/css/recuperar.css">
  
 
 




  <head>

    <div   class="logo">

 
      <a href="{{route('registros.index')}}"> <img src ="/Felmarsoacha/img/captura.jpg" width="700px" height="259px" >  <br/>  </img></a>
  
  
  
  
  </div>
    
    
    
    <div class="menu">

    

      <ul>
          <li> <a href="{{route('registros.index')}}">INICIO</a> </li>
      
              <li><a href="{{route('registros.amplificador')}}" >AMPLIFICADORES</a> </li>

             
              
                  <li><a href="{{route('registros.bajo')}}" >BAJOS</a> </li>
                    
                      <li><a href="{{route('registros.bateria')}}" >BATERIAS</a>
                       
                          <li><a href="{{route('registros.guitarra')}}" >GUITARRAS</a> </li>

                            <li><a href="{{route('registros.pedal')}}" >PEDALES</a> </li> 
                            
                            <li><a href="{{route('registros.teclado')}}" >TECLADOS</a> </li>





                            <li><a href="{{route('registros.viento')}}" >VIENTO</a> </li>
  
                                  <li><a href="/Felmarsoacha/public/login" >INICIAR SESIÓN</a>
                                  <ul class="submenu">
                                      <li><a href="/Felmarsoacha/public/register">REGISTRATE</a></li>
                                     
                                      
                                    
                                      
  </ul> 
                           
                                      
                                                                  
  </ul>


          </div>
        </head>

        @yield('content')



                      
        <div class="pagos">
                <img src="/Felmarsoacha/img/metodosdepago.jpeg" >
              </div>
              <br>
      <br>
      <br>

        <footer>

<div class="footer">

<h2 class="titulo_footer">Felmar Bussines Music interactua con sus clientes</h2>


<div class="redes_sociales">
<i class="fab fa-facebook f">Felmar Soacha</i>
<i class="fab fa-twitter">Felmar_Bussines_Music/Soacha</i>
<i class="fab fa-whatsapp">+573133399549 o +573194156527</i>

</div>

<div class="copyrigth">
<p >© Copyright 2021-2022  Daniel David Albarracin Yepes, Juan Sebastian Vaquero Arango / todos los derechos reservados </p>
</div>

</footer>
<script src="https://kit.fontawesome.com/e3aa94006d.js" crossorigin="anonymous"></script>
</div>            
</body>
          


         

</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    //PARA EL MENU
   <div class="container my-5">
    <a href="{{ route('xIndex') }}" class="btn btn-primary">Inicio</a><br>
    <a href="{{ route('xGaleria') }}" class="btn btn-danger">Galeria</a><br>
    <a href="{{ route('xLista') }}" class="btn btn-primary">Lista</a><br>

   </div>

   //PARA EL TITULO
   <div class="container my-4">
        @yield('titulo')

   </div>

    //PARA EL CUERPO o SECCION
   <div class="container my-4">
        @yield('cuerpo')

   </div>

    //PARA PIE DE PAGINA //BG-DARK: FONDO COLOR NEGRO  //TEXT-WHITE: TEXTO BLANCO
   <div class="container bg-dark text-white text-center">       
        PIE DE PAGINA

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
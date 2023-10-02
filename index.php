<!doctype html>
<html lang="es">

<head>
  <title>Speech123</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="app/style.css">

</head>

  <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand ms-2" href="#">Speech Text</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Opciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acerca de</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="row mt-5 subMenu"> </div>

          <div class="row mt-2">
            <div class="col-xs-1 col-sm-2 col-md-3"></div>
            <div class="col-12 col-xs-10 col-sm-8 col-md-6 selectVoice" id="menuSelect">
              Seleccionar voz: <select id='voiceList'></select> <br><br>
            </div>
            <div class="col-xs-1 col-sm-2 col-md-3"></div>
          </div> 

          <div class="row">
            <div class="col-xs-1 col-sm-2 col-md-3"></div>
              <div class="col-12 col-xs-10 col-sm-8 col-md-6">
                <textarea name="Input" class="form-control" id="txtInput" cols="30" rows="10">
                
                </textarea>
                <button class="btn btn-dark" id="btnSpeak">Escuchar</button>
              </div>
            <div class="col-xs-1 col-sm-2 col-md-3"></div>
          </div>    
          <!--<input class="form-control" id='txtInput' /> -->
      <script src="app/app.js"> </script>

    <footer class="mt-5">
      <!-- place footer here -->
      <div class="row">
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-10 col-md-10 text-light mt-4 ms-3">
          <h1>Speech Text</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt doloremque, maxime, repudiandae id omnis magni ipsum asperiores, odit unde architecto illum corporis facere ratione placeat suscipit. Fuga, quaerat aliquam?
            Assumenda cum earum, architecto dolorem quibusdam, eum aut dignissimos esse animi, ullam est consequatur ex possimus error sunt ratione doloribus. Neque facere aliquam cumque nihil? Modi beatae illo accusamus illum.
            Eaque facilis ipsam ex saepe eius aperiam error porro eos numquam eveniet blanditiis, veniam eligendi assumenda. Accusantium ipsam voluptate saepe consequuntur, nesciunt commodi, temporibus eligendi fugiat nisi dolorum, dicta nobis.
            Quasi similique explicabo recusandae aliquam voluptates, repellendus at enim adipisci earum nemo beatae provident ea ipsum voluptatibus quam unde voluptatem! Temporibus voluptate laborum delectus veritatis cum eligendi consequatur voluptatibus quaerat.
          </p>
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
      </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>

</html>


<?php
require_once 'database/db_users.php';





$conectar=conn();
            
          
            $query= mysqli_query($conectar,"SELECT scheId,mon,tus,wen,thu,fri,sat,sun,time FROM generalSchedules where profileId='$profileId'");
               

?>
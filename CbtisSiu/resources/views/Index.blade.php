<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .carta{
        margin-left: -120px;
        margin-top: 80px;
      }
      .carta2{
        margin-left: 350px;
        margin-top: 80px;
      }
    </style>
</head>
<body class="bg-muted">
  <nav class="navbar navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://cbtisno17.files.wordpress.com/2014/11/logo_de_dgeti1.png?w=640" alt="" width="50" height="48" class="d-inline-block align-text-top">
        <span class="fs-2 text-center text-light">Bienvenido al servicio de registro y generacion del CBtis</span>
      </a>
    </div>
  </nav>
  
    <div class="container position-absolute top-50 start-50 translate-middle">
      <div class="row">
        @if(session('Info'))
        <div class="alert alert-success d-flex justify-content-center" style="margin-top = 100px;">{{session('Info')}}</div>
      @endif
        <div class="col-7">
          <div class="carta card bg-warning text-dark mb-3" style="width: 19rem;">
            <img src="https://cdn-icons-png.flaticon.com/512/3201/3201052.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Inscripciones</h4>
              <p class="card-text">¿Listo para el mundo de los chavos?</p>
              <p class="card-text">Para continuar con el servicio de inscripciones, presiona el boton que esta a continuacion</p>
              <a href="{{route('students.create')}}" class="btn btn-success text-white">Click Me</a>
            </div>
          </div>
        </div>
        
        <div class="col-5">
          <div class="carta2 bg-dark text-white mb-3" style="width: 18rem;">
            <img src="https://i.pinimg.com/originals/5c/6f/ff/5c6fffb2ba4d0bbbb63e9c2c2ee30969.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Lista de aspirantes</h4>
              <p class="card-text">¿Deseas confirmar el listado?</p>
              <p class="card-text">Para continuar con el servicio de registro de alumnos, presiona el boton a continuacion, se mostraran los alumnos ya registrados</p>
              <a href="{{ route('Lista') }}" class="btn btn-light">Click Me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
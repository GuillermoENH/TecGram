<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
      .bordes{
        border: 10px solid blue;
        padding: 10px 20px 3px;
      }
    </style>
</head>
<body class="bg-info">
    <nav class="navbar navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('index')}}">
            <img src="https://cbtisno17.files.wordpress.com/2014/11/logo_de_dgeti1.png?w=640" alt="" width="50" height="48" class="d-inline-block align-text-top">
            <span class="fs-2 text'light">Rellenar los siguientes datos para la inscripcion</span>
          </a>
        </div>
      </nav>
      <br>
      <h5 class="d-flex justify-content-center text-light">Llena el siguiente formulario para que tu registro sea guardado exitosamente</h5>
      @if(session('info'))
        <div class="alert alert-success d-flex justify-content-center">{{session('info')}}</div>
      @endif
      <div class="container d-flex justify-content-center">
        <form action="{{route('students.store')}}" class="form-outline bordes bg-light">
          @method('post')
          @csrf
          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="ApellidoP" placeholder="Apellido paterno">
              @error('ApellidoP')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Apellido P</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="ApellidoM" placeholder="Apellido materno">
              @error('ApellidoM')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Apellido M</label>
            </div>
          </div>
          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
              @error('Nombre')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="CURP" placeholder="CURP" style="text-transform:uppercase;">
              @error('CURP')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">CURP</label>
            </div>
          </div>
          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="Ciudad" placeholder="Ciudad">
              @error('Ciudad')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Ciudad</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="Domicilio" placeholder="Domicilio">
              @error('Domicilio')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Domicilio</label>
            </div>
          </div>
          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <input type="text" class="form-control" name="Colonia" placeholder="Colonia">
              @error('Colonia')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Colonia</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="numeric" class="form-control" name="CP" placeholder="Codigo postal" maxlength="5">
              @error('CP')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Codigo postal</label>
            </div>
          </div>
          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <input type="numeric" class="form-control" name="Telefono" placeholder="Telefono" maxlength="10">
              @error('Telefono')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Telefono</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="numeric" class="form-control" name="TelefonoP" placeholder="Telefono de padre o tutor" maxlength="10">
              @error('TelefonoP')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Telefono Alterno</label>
            </div>
            <div class="form-floating mb-4 col">
              <input type="email" class="form-control" name="Email" placeholder="Correo electronico">
              @error('Email')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Correo electronico</label>
            </div>
          </div>

          <div class="row g-3">
            <div class="form-floating mb-4 col">
              <select name="Especialidad1" class="form-select" id="">
                <option selected>Materia de especialidad</option>
                <option value="Programación">Programacion</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="Electronica">Electronica</option>
                <option value="Administracion de RH">Administracion de RH</option>
              </select>
              @error('Especialidad1')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Especialidad 1*</label>
            </div>
            <div class="form-floating mb-4 col">
              <select name="Especialidad2" class="form-select" id="">
                <option selected>Materia de especialidad</option>
                <option value="Programación">Programacion</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="Electronica">Electronica</option>
                <option value="Administracion de RH">Administracion de RH</option>
              </select>
              @error('Especialidad2')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Especialidad 2*</label>
            </div>
          </div>
          <div class="row g-3">
            <div class="form-floating mb-8 col-lg-8">
              <input type="numeric" name="Promedio" class="form-control" placeholder="Promedio general">
              @error('Promedio')
              <small>
                <strong>{{$message}}</strong>
              </small>
          @enderror
              <label for="floatingInput">Promedio general</label>
            </div>
            <div class="form-floating mb-4 col">
              <button type="submit" class="btn btn-primary btn-lg">Continuar</button>
            </div>
          </div>

            </div>
          </div>
        </form>
      </div>
</body>
</html>
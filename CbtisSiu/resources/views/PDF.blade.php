<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="card mt-4">
        <div class="card-header">
              <h5 class="card-title font-weight-bold">Alumnos registrados</h4>
        </div>
              <table class="table-primary table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>No de ficha</th>
                          <th>Apellido paterno</th>
                          <th>Apellido materno</th>
                          <th>Nombre</th>
                          <th>CURP</th>
                          <th>Ciudad</th>
                          <th>Domicilio</th>
                          <th>Colonia</th>
                          <th>Código postal</th>
                          <th>Teléfono móvil</th>
                          <th>Teléfono del padre o tutor</th>
                          <th>Correo electrónico</th>
                          <th>Especialidad 1</th>
                          <th>Especialiad 2</th>
                          <th>Promedio general</th>
                      </tr>
                  </thead>

                  <tbody>
                      @forelse ($students as $s)
                          <tr>
                              <td>{{$s->id}}</td>
                              <td>{{ $s->ApellidoP }}</td>
                              <td>{{ $s->ApellidoM }}</td>
                              <td>{{ $s->Nombre }}</td>
                              <td>{{ $s->CURP }}</td>
                              <td>{{ $s->Ciudad }}</td>
                              <td>{{ $s->Domicilio }}</td>
                              <td>{{ $s->Colonia }}</td>
                              <td>{{ $s->CP }}</td>
                              <td>{{ $s->Telefono }}</td>
                              <td>{{ $s->TelefonoP }}</td>
                              <td>{{ $s->Email }}</td>
                              <td>{{ $s->Especialidad1 }}</td>
                              <td>{{ $s->Especialidad2 }}</td>
                              <td>{{ $s->Promedio }}</td>
                          </tr>
                      @empty

                      @endforelse
                  </tbody>
              </table>
        </div>
    </div>
        </table>
    </div>
</body>

</html>

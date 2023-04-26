
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CRUD con HTML, CSS y Tailwind</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css" integrity="sha512-JBJMLevlk8FfEg7vp53FhHvV7yW8t/dgVQASERwD3q4H4he8tE9/XnWsNSKVJvL1VWnR8hN2VJomNenq3t4o4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form>
      <fieldset>
        <legend>Agregar registro</legend>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
          <option value="">Seleccione una opción</option>
          <option value="activo">Activo</option>
          <option value="inactivo">Inactivo</option>
        </select>
        <br>
        <button type="submit">Agregar</button>
        <button type="button" onclick="eliminarRegistro()">Eliminar</button>
      </fieldset>
    </form>
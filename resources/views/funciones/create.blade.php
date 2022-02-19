<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Función</title>
</head>
<body>
    <h1>Crear Función</h1>
    <a href="{{route('funciones.index')}}">Volver </a>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>pelicula</label>
        <input type="text" name="pelicula">
        <br/>
        <label>fecha</label>
        <input type="text" name="fecha">
        <br/>
        <label>hora</label>
        <input type="text" name="hora">
        <br/>
        <button type="submit">Agregar Función</button>


    </form>
</body>
</html>
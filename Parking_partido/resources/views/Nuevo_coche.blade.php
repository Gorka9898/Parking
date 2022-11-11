@extends('inicio')


@section('anadir_coche')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="border: 1px solid black; margin-bottom: 50px;">

<div id="cuerpo1" style="border: 1px solid black;height:70px; background-color:lightblue; border-radius:1%;" class="d-flex">

    <h1 style=" font-size:20px; margin:20px" class="col-12">Añadir Coche</h1>

</div>

<h5 style="margin: 20px; margin-left:35px" class="col-12">Coches</h5>

<form method="post" action="{{route('anadir_coche')}}">
    {{ csrf_field() }}
    &nbsp;&nbsp;&nbsp;&nbsp; Matricula: <input type="text" class="col-12" style="width:60%; margin-left:4%;" name="matricula"><br><br>
    
    @error('matricula')<div class="alert alert-danger">
        {{ $message }} </div>
    @enderror   

    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Marca: <input type="text" class="col-12" style="width:60%; margin-left:4%;" name="marca"><br><br>
    
    @error('marca')
    <div class="alert alert-danger">
        {{ $message }} 
    </div>
    @enderror   
   
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Modelo: <input type="text" class="col-12" style="width:60%; margin-left:4%;" name="modelo"><br><br>
    
    @error('modelo')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror   
    
    <br>
   
    <div style="width: 100%;margin: 20px;">
        <button type="submit" style="margin: 20px;"> <strong>+</strong> Añadir coche</button>
    </div>


</form>

</div>
    
</body>
</html>

<!Doctype html>
<html>

<head>
    <title>
        Ejercicio Coches
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container" style="width: 60%; margin-left:20%">


            <div style="border:1px solid black; margin-bottom:50px;background-color:lightblue; border-radius:1%;height:60px; display:flex;align-items:center">
            <h1 style="width:80%; float:left">Lista Coches</h1>
            <select name="s1" id="s1" style="width:10%">
            <option value="">Elige optcion</option>
            <option value="Anadir"><a src="{{route('Nuevo_coche')}}" >Anadir</a> </option><!--Poner links con a dentro del option-->
            <option value="Lista" ><a src="{{route('Buscar_coche')}}">Lista</a></option>
            <option value="Borrar"><a src="{{route('Lista_coches')}}">Borrar</a></option>
        </select>

        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------CONTENEDOR 1---------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->

        <div>
            @yield('Nuevo_coche')
        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 2----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->



        <div>
            @yield('Lista_coches')
        </div>


        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 3----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


        <div>
            @yield('Buscar_coche')
        </div>


    </div>




</body>

</html>

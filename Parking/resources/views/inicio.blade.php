
<!Doctype html>
<html>

<head>
    <title>
        Ejercicio Tarea
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container" style="width: 60%; margin-left:20%">


            <div style="border:1px solid black; margin-bottom:50px;background-color:lightblue; border-radius:1%;height:60px; display:flex;align-items:center">
            <h1 style="width:80%; float:left">Lista Coches</h1>
            <select name="s1" id="s1" style="width:10%">
            <option value="Anadir">Anadir</option><!--Poner links con a dentro del option-->
            <option value="Lista">Lista</option>
            <option value="Borrar">Borrar</option>
        </select>

        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------CONTENEDOR 1---------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


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

        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 2----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->



        <div style="border: 1px solid black;">



            <div id="cuerpo2" style="border: 1px solid black;height:70px; background-color:lightgrey; border-radius:1%;" class="d-flex">

                <h1 style=" font-size:20px; margin:20px" class="col-12">Coches actuales</h1>

            </div>

            <h5 style="margin: 20px; margin-left:35px; border-bottom: 1px solid lightgrey; border-width:60%;width:90%; " class="col-12">Coches</h5>


            <div style="margin: 5%;">
                              <table class="table">

                <tr>
                    <td>
                        <b>Matricula</b>
                    </td>
                    <td>
                        <b>Marca</b>
                    </td>
                    <td>
                        <b>Modelo</b>
                    </td>
                    <td>
                        <b>Botones de borrado</b>
                    </td>
                </tr>
            <!--aqui va each-->@foreach($elCoche as $data)<!--Esto es un each camuflado-->

                    
                                    
                    <tr>    
                        <td>{{$data->matricula}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{$data->marca}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{$data->modelo}}&nbsp;&nbsp;&nbsp;&nbsp;</td>             
   

                        <td>
                            <form method="POST" action="{{route('borrar_coche', [$data->id])}}" ><!-- Meter el action con variable e id -->
                                {{ csrf_field() }}
                                @method('delete')<input type="submit" name="borrar_tarea"class="bg-danger" value="borrar_tarea">
                            </form>
                        </td>

                    </tr>



               <br>
<!------------------->
               

@endforeach
</table>

<!------------------->

               <!-- aqui va endforeach -->
            </div>





        </div>



    </div>







</body>

</html>

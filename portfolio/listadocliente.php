<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <title>ABM Clientes</title>
</head>
<body>
    <section>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ABM Ventas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="registro.php">Nuevo cliente <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="listadocliente.php">Listado de clientes <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmproducto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmventas.php">Ventas</a>
            </li>
          </ul>
        </div>
      </nav>
    </section><!-- Modal -->
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
        <h1>Listado de clientes</h1>
        </div>
        <div class="col-12">
        <table class="table table-hover">
                <thead>
                <tr>
                    <th>CUIT</th>            
                    <th>Nombre</th>            
                    <th>Correo</th>          
                    <th>Domicilio</th>          
                </tr>
                </thead>
                <tbody>
                                <tr>
                    <td><a href="abmcliente.php?id=41">20384563422</a></td>
                    <td>Nuevo Nombre</td>
                    <td><a href="mailto:correo@correo">correo@correo</a></td>
                    <td>(Personal) av moreau, Puerto Madero, Ciudad de Buenos Aires</td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=40">20333000122</a></td>
                    <td>Juan Daniel Perez</td>
                    <td><a href="mailto:juan@gmail.com">juan@gmail.com</a></td>
                    <td>(Comercial) Av Alicia Moreau de Justo 1150, Puerto Madero, Ciudad de Buenos Aires<br>(Laboral) San Martín 987, Calamuchita, Córdoba</td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=39">38103441</a></td>
                    <td>nombre</td>
                    <td><a href="mailto:correo@correo">correo@correo</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=38">26155565213</a></td>
                    <td>fdbdfv</td>
                    <td><a href="mailto:ij@wsw.com">ij@wsw.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=37">3245678</a></td>
                    <td>Ariel</td>
                    <td><a href="mailto:arielcasazola@gmail.com">arielcasazola@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=36">1111111</a></td>
                    <td>Bernabé</td>
                    <td><a href="mailto:nelson.tarche@gmail.com">nelson.tarche@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=35">34256786</a></td>
                    <td>Datos Autorización Viaje</td>
                    <td><a href="mailto:correo@correo">correo@correo</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=34">26946543871</a></td>
                    <td>Pedro Perez</td>
                    <td><a href="mailto:pedroperez@gmail.com">pedroperez@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=33">11234554342</a></td>
                    <td>Juan Perez</td>
                    <td><a href="mailto:juanperez@hotmail.com">juanperez@hotmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=15">1</a></td>
                    <td>santiago</td>
                    <td><a href="mailto:santeemansilla@gmail.com">santeemansilla@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=14">6151616</a></td>
                    <td>Gabriel</td>
                    <td><a href="mailto:gabriel@gmail.com">gabriel@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=13">1111111</a></td>
                    <td>Bernabé</td>
                    <td><a href="mailto:nelson.tarche@gmail.com">nelson.tarche@gmail.com</a></td>
                    <td>(Personal) Florida, Santa Fé, Santa Fé</td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=12">1111111</a></td>
                    <td>Bernabé</td>
                    <td><a href="mailto:nelson.tarche@gmail.com">nelson.tarche@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=5">1111111</a></td>
                    <td>Bernabé</td>
                    <td><a href="mailto:nelson.tarche@gmail.com">nelson.tarche@gmail.com</a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=3"></a></td>
                    <td>Ricardo Peralta</td>
                    <td><a href="mailto:"></a></td>
                    <td></td>
                </tr>
                                <tr>
                    <td><a href="abmcliente.php?id=2"></a></td>
                    <td>Ezequiel Velazques</td>
                    <td><a href="mailto:eze@mail.com">eze@mail.com</a></td>
                    <td></td>
                </tr>
                                </tbody>
            </table>
        </div>
    </div>
</div>

    <script>

        $('#grilla').DataTable();


        function fBuscarLocalidad(){
            idProvincia = $("#lstProvincia option:selected").val();
            $.ajax({
	            type: "GET",
	            url: "abmcliente.php?do=buscarLocalidad",
	            data: { id:idProvincia },
	            async: true,
	            dataType: "json",
	            success: function (respuesta) {
                    $("#lstLocalidad option").remove();
                    $("<option>", {
                        value: 0,
                        text: "Seleccionar",
                        disabled: true,
                        selected: true
                    }).appendTo("#lstLocalidad");
                
                    for (i = 0; i < respuesta.length; i++) {
                        $("<option>", {
                            value: respuesta[i]["idlocalidad"],
                            text: respuesta[i]["nombre"]
                            }).appendTo("#lstLocalidad");
                        }
                    $("#lstLocalidad").prop("selectedIndex", "0");
	            }
	        });
        }

        function fAgregarDomicilio(){
            var grilla = $('#grilla').DataTable();
            grilla.row.add([
                $("#lstTipo option:selected").text() + "<input type='hidden' name='txtTipo[]' value='"+ $("#lstTipo option:selected").val() +"'>",
                $("#lstProvincia option:selected").text() + "<input type='hidden' name='txtProvincia[]' value='"+ $("#lstProvincia option:selected").val() +"'>",
                $("#lstLocalidad option:selected").text() + "<input type='hidden' name='txtLocalidad[]' value='"+ $("#lstLocalidad option:selected").val() +"'>",
                 $("#txtDireccion").val() + "<input type='hidden' name='txtDomicilio[]' value='"+$("#txtDireccion").val()+"'>",
                ""
            ]).draw();
            $('#modalDomicilio').modal('toggle');
            limpiarFormulario();
        }

        function limpiarFormulario(){
            $("#lstTipo").val(0);
            $("#lstProvincia").val(0);
            $("#lstLocalidad").val(0);
            $("#txtDireccion").val("");
        }
    </script>
</body>
</html>
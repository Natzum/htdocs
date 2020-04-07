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
    <title>ABM Ventas</title>
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
            <li class="nav-item ">
              <a class="nav-link" href="listadocliente.php">Listado de clientes <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmproducto.php">Productos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="abmventas.php">Ventas</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Registro de ventas</h1>
        </div>
    </div>
    <div class="row">
    <div class="col-6">
        <form action="" method="POST">
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtFecha">Fecha:</label>
                <input type="date" required class="form-control" name="txtFecha" id="txtNtxtFechaombre" value="2020-04-01">
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="lstCliente">Cliente:</label>
                <select required class="form-control" name="lstCliente" id="lstCliente">
                    <option disabled selected value="">Seleccionar</option>
                                                                                <option value="41">Nuevo Nombre</option>
                                                                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="lstProducto">Producto:</label>
                <select required class="form-control" name="lstProducto" id="lstProducto">
                    <option disabled selected value="">Seleccionar</option>
                     <option value='3'>Abono</option><option value='2'>Soporte</option><option value='1'>Membresia</option>                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtCorreo">Importe:</label>
                <input type="text" class="form-control" name="txtImporte" id="txtImporte" value="0" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <input type="submit" class="btn btn-primary" name="btnInsertar" id="btnInsertar" value="Insertar">
                <a href="index.php" class="btn btn-secondary">Limpiar</a>
                <input type="submit" class="btn btn-danger" name="btnBorrar" id="btnInsertar" value="Borrar">
                <input type="submit" class="btn btn-success" name="btnActualizar" id="btnInsertar" value="Actualizar">
            </div>
        </div>
        </form>
        </div>
        <div class="col-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>           
                    <th>Fecha</th>            
                    <th>Cliente</th>          
                    <th>Producto</th>          
                    <th>Precio</th>          
                </tr>
                </thead>
                <tbody>
                                <tr>
                    <td>1</td>
                    <td><a href="abmventa.php?id=4">10/01/2020</a></td>
                    <td><a target="_blank" href="abmcliente.php?pos=5">Bernabé</a></td>
                    <td><a target="_blank" href="abmproducto.php?pos=1">Membresia</a></td>
                    <td>$ 13000.00</td>
                </tr>
                                <tr>
                    <td>2</td>
                    <td><a href="abmventa.php?id=3">08/01/2020</a></td>
                    <td><a target="_blank" href="abmcliente.php?pos=2">Ezequiel Velazques</a></td>
                    <td><a target="_blank" href="abmproducto.php?pos=2">Soporte</a></td>
                    <td>$ 500.00</td>
                </tr>
                                <tr>
                    <td>3</td>
                    <td><a href="abmventa.php?id=1">20/12/2019</a></td>
                    <td><a target="_blank" href="abmcliente.php?pos=2">Ezequiel Velazques</a></td>
                    <td><a target="_blank" href="abmproducto.php?pos=3">Abono</a></td>
                    <td>$ 3000.00</td>
                </tr>
                                <tr>
                    <td>4</td>
                    <td><a href="abmventa.php?id=5">15/01/2020</a></td>
                    <td><a target="_blank" href="abmcliente.php?pos=13">Bernabé</a></td>
                    <td><a target="_blank" href="abmproducto.php?pos=3">Abono</a></td>
                    <td>$ 800.00</td>
                </tr>
                                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>
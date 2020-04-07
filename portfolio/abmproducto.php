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
    <title>ABM Productos</title>
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
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Nuevo cliente <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="listadocliente.php">Listado de clientes <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="abmproducto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmventas.php">Ventas</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Registro de productos</h1>
        </div>
    </div>
    <div class="row">
    <div class="col-6">
        <form action="" method="POST">
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtNombre">Nombre:</label>
                <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtCantidad">Cantidad:</label>
                <input type="number" required class="form-control" name="txtCantidad" id="txtCantidad" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtPrecio">Precio:</label>
                <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <label for="txtCorreo">Descripción:</label>
                <textarea class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>
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
                    <th>Nombre</th>            
                    <th>Cantidad</th>          
                    <th>Precio</th>          
                </tr>
                </thead>
                <tbody>
                                <tr>
                    <td>1</td>
                    <td><a href="producto.php?pos=3">Abono</a></td>
                    <td>50</td>
                    <td>1100.00</td>
                </tr>
                                <tr>
                    <td>2</td>
                    <td><a href="producto.php?pos=2">Soporte</a></td>
                    <td>500</td>
                    <td>3080.00</td>
                </tr>
                                <tr>
                    <td>3</td>
                    <td><a href="producto.php?pos=1">Membresia</a></td>
                    <td>100</td>
                    <td>1650.00</td>
                </tr>
                                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>
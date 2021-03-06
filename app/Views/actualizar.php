<?php
  $Id = $datos[0]['Id'];
  $Nombre = $datos[0]['Nombre'];
  $Apellido = $datos[0]['Apellido'];
  $Correo = $datos[0]['Correo'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Actualizar Usuario</title>
  </head>
  <body>
    <div class="container">
    	<h1>Crud Codeigniter 4</h1>
			<div class="row">
				<div class="col-sm-12">
					<form class="" action="<?php echo base_url().'/actualizar' ?>" method="POST">
            <input type="text" name="Id" id="Id" value="<?php echo $Id; ?>" hidden="">
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu nombre" value="<?php echo $Nombre; ?>">
						</div>
						<div class="form-group">
							<label for="apellido">Apellido:</label>
							<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escribe tu apellido" value="<?php echo $Apellido; ?>">
						</div>
						<div class="form-group">
							<label for="correo">Correo:</label>
							<input type="text" class="form-control" name="correo" id="correo" placeholder="Escribe tu correo" value="<?php echo $Correo; ?>">
						</div>
						<button class="btn btn-primary mt-2" id="actualizar" name="actualizar">Actualizar</button>
					</form>
				</div>
			</div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

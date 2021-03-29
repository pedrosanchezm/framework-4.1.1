<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Crud CodeIgniter 4</title>
  </head>
  <body>
    <div class="container">
    	<h1>Crud Codeigniter 4</h1>
			<div class="row">
				<div class="col-sm-12">
					<form class="" action="<?php echo base_url().'/crear' ?>" method="POST">
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu nombre">
						</div>
						<div class="form-group">
							<label for="apellido">Apellido:</label>
							<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escribe tu apellido">
						</div>
						<div class="form-group">
							<label for="correo">Correo:</label>
							<input type="text" class="form-control" name="correo" id="correo" placeholder="Escribe tu correo">
						</div>
						<button class="btn btn-primary mt-2" id="guardar" name="guardar">Guardar</button>
					</form>
				</div>
			</div>
			<hr>
      <h2>Listado de personas</h2>
      <div class="row">
      	<div class="col-sm-12">
					<div class="table table-responsive">
						<table class="table table-hover table-bordered">
			        <thead class="thead-dark">
			          <tr>
			            <th scope="col">Id</th>
			            <th scope="col">Nombre</th>
			            <th scope="col">Apellido</th>
			            <th scope="col">Correo</th>
			            <th scope="col">Editar</th>
			            <th scope="col">Eliminar</th>
			          </tr>
			        </thead>
			        <tbody>
								<?php foreach ($datos as $key): ?>
									<tr>
										<td><?php echo $key->Id?></td>
										<td><?php echo $key->Nombre?></td>
										<td><?php echo $key->Apellido?></td>
										<td><?php echo $key->Correo?></td>
										<td><a href="<?php echo base_url().'/obtenerId/'.$key->Id ?>" class="btn btn-warning btn-sm">Editar</a></td>
										<td><a href="<?php echo base_url().'/eliminar/'.$key->Id ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
									</tr>
								<?php endforeach; ?>
			        </tbody>
			      </table>
		      </div>
      	</div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! https://youtu.be/0MMr5rj5NsM-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<script type="text/javascript">
			let mensaje = '<?php echo $mensaje ?>';

			if (mensaje=='0') {
				swal(':D','Fallo al agregar!','error');
			}else if(mensaje =='1'){
				swal(':(','Agregado con exito!','success');
			} else if (mensaje=='2') {
				swal(':D','Actualizado con exito!','success');
			}else if(mensaje =='3'){
				swal(':(','Fallo al actualizar!','error');
			} else if (mensaje=='4') {
				swal(':D','Eliminado con exito!','success');
			}else if(mensaje =='5'){
				swal(':(','Fallo al eliminar!','error');
			}

		</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

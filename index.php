
<!--listar los datos-->
<?php 

require_once "conexion.php"; 
$con = conectar(); 

$sql = "SELECT * FROM usuarios"; 
   //consulta 
$query = mysqli_query($con,$sql); 

//$mostrar = mysqli_fetch_array($query);
   // hay q recorrerlos 
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<title>Vista de Crud php</title>
	<?php require_once "scripts.php";  ?>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<!--formulario-->
				<form action="insert.php" method="POST">
					<input type="text" class="form-control mb-3" name="identificacion" placeholder="Identificacion">
					<input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
					<input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
					<input type="text" class="form-control mb-3" name="correo" placeholder="Correo">

					<input type="submit" class="btn btn-primary btn-block " >
				</form>
			</div>
			<div class="col-md-8">
				<!--tabla-->
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Identificación</th>
							<th scope="col">Nombre</th>
							<th scope="col">Teléfono</th>
							<th scope="col">Correo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>

                        <?php 
                          
                          while ($mostrar = mysqli_fetch_array($query)) {
                          	

                         ?>

                         <tr>
                         	<!--pon los datos de la bd-->
                         	<td><?php echo $mostrar['identificacion']; ?></td>
                         	<td><?php echo $mostrar['nombre']; ?></td>
                         	<td><?php echo $mostrar['telefono']; ?></td>
                         	<td><?php echo $mostrar['correo']; ?></td>
                         	<!--eliminar/editar-->
                         	 <td><a href="actualizar.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-info">Editar</a></td>
                         	 <td><a href="delete.php?id=<?php echo $mostrar['identificacion'] ?>" class="btn btn-danger">Eliminar</a></td>
                         </tr>
                       <?php 
                        }
                        ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>



</body>
</html>
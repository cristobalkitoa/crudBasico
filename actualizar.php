

<?php 

  require_once "conexion.php"; 
  $con = conectar(); 
  //VIENE POR LA URL()
  $id = $_GET['id']; 
  $sql=" SELECT * FROM usuarios WHERE identificacion='$id'"; 
  $query=mysqli_query($con,$sql);

  //ahora lo convertimos a array, NO SE RECORRE PORQ ES SOLO 1 DATO
  // DE AHI LA IMPORTANCIA DE VALUE EN FORM
  $row = mysqli_fetch_array($query);  

 ?>




<!DOCTYPE html>
<html lang="es">
<head>
	<title>Actualizar crud en php</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
     
     <div class="container mt-5">
     	<div class="row">
     		<div class="col-md-12">
     				<!--formulario-->
				<form action="update.php" method="POST">
					<!--	<input type="text" class="form-control mb-3" name="identificacion" value=""> recibe el nombre de la bd-->
				    <input type="hidden" name="identificacion" value="<?php echo $row['identificacion'] ?>">
					<input type="text" class="form-control mb-3" name="nombre" value="<?php echo $row['nombre'] ?>">
					<input type="text" class="form-control mb-3" name="telefono" value="<?php echo $row['telefono'] ?>">
					<input type="text" class="form-control mb-3" name="correo" value="<?php echo $row['correo'] ?>">

					<input type="submit" class="btn btn-primary btn-block " value="Actualizar" >
				</form>
     		</div>
     </div>
</body>
</html>


<?php 
  
  // se van a procesar los datos de actualizacion
  // y obtener los datos del form de actualizar
  require_once "conexion.php";
  $con = conectar(); 

  $id = $_POST['identificacion'];
  $nombre=$_POST['nombre'];
  $telefono=$_POST['telefono'];
  $correo=$_POST['correo'];


  $sql ="UPDATE usuarios SET nombre='$nombre', telefono='$telefono',correo='$correo' WHERE identificacion='$id'";
  
  $query=mysqli_query($con,$sql);

  //condicion 

  if ($query) {
  	header('location:index.php');
  }


 ?>
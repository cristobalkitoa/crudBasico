

<?php 

  require_once "conexion.php";
  $con = conectar();  
  
  $id = $_GET['id']; 

  $sql="DELETE FROM usuarios WHERE identificacion ='$id'";
  $query= mysqli_query($con,$sql);

  //condicion 

  if($query){
     header('location:index.php');
  } 
 ?>
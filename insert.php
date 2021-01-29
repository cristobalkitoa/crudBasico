

<?php 
require_once "conexion.php"; 
//llamamos a la conexion de mySQL
$con= conectar(); 
//recibir los datos de formulario
//VARIABLE -------NAME
$IDENTIFICACION = $_POST['identificacion'];
$NOMBRE =$_POST['nombre'];
$TELEFONO = $_POST['telefono'];
$CORREO=$_POST['correo']; 


//NUESTRA CONSULTA 
$sql="INSERT INTO usuarios VALUES('$IDENTIFICACION',
                                  '$NOMBRE',
                                  '$TELEFONO',
                                  '$CORREO')";
$query = mysqli_query($con,$sql);                                   
//condicion if 
if ($query) {
   header('location:index.php');
   //redirecciona al index
}
?>
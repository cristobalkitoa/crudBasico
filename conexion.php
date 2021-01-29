<?php 
  
  function conectar(){
   // recibimos los parametros
  	$host= "localhost";
  	$user= "root";
  	$pass= ""; //en mi caso no tiene pass
    $bd = "crud_php"; //nombre de la base datos

    //metodo para conectarnos ,le paso los parametros

    $con = mysqli_connect($host,$user,$pass); 
    // a que base nos conectamos !!
    mysqli_select_db($con,$bd);
    
    return $con;
  }


 ?>
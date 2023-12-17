

<?php

echo "<h2> Eliminiar!!!! </h2>";

require "./panel/conexion.php";


$id =$_GET['id'];


//eliminar algun registro de mi tabla de la BD

$queryEliminar = "DELETE FROM oradores WHERE id_orador ='$id'";

$deleteRegistro = mysqli_query($conexion,$queryEliminar);

if($deleteRegistro){

      echo "<script languaje='javascript'> alert('Registro eliminado');</script>";
      header('location: adminpanel.php');
  

} else{
    echo "<script languaje='javascript'> alert('No se pudo eliminar el registro'); </script>";
}


?>


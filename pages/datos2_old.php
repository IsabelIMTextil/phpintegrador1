<?php
echo "probando la base de datos";

echo $_POST["nombre"];
echo $_GET["apellido"];
echo $_GET["correo"];
echo $_GET["telefono"];
echo $_GET["comentario"];

$archivo = '/phpintegrador1/utiles/conexion.php';


if (file_exists($archivo) && is_readable($archivo)) {
    include $archivo;
    // El include fue exitoso, ahora puedes utilizar las funciones y variables definidas en el archivo incluido.
    echo "Include exitoso";
} else {
    // El archivo no existe o no es legible
    echo "Error al incluir el archivo";
}

include("../utiles/conexion.php");

$nombre= $_POST["nombre"]; 
echo "<br>" .$_POST["nombre"]  ;
$apellido=$_POST["apellido"]; ; 
$mail= $_POST["correo"]; ;
$telefono=$_POST["telefono"]; ; 
$tema=$_POST["comentario"]; ;

$conexion = new conections();
 $conexionMysql = $conexion->conect();
 $consulta= null ; 

 if ($conexionMysql){
     echo "<br>  ok coneccion ";
     //id_orador , nombre	, apellido	, mail	, tema, fecha_alta
     $consulta = $conexionMysql->prepare("INSERT INTO Oradores ( nombre	, apellido	, mail	, telefono, tema) VALUES (?, ?,?,?,?)");
 
 }else{
     echo "<br>   NO ok coneccion  ";
 }
  // Vincular parámetros y ejecutar la consulta

 
  $consulta->bind_param("sssss",  $nombre, $apellido, $mail,$telefono, $tema);
  $resultado = $consulta->execute();

  // Verificar el resultado de la inserción
  if ($resultado) {
      echo "<p>Registro insertado correctamente.</p>";
  } else {
      echo "<p>Error al insertar el registro: " . $consulta->error . "</p>";
  }

  conexionMysql->close();

 echo "NOS VAMOS DE LA FUNCION INSEERT"; 


 // Redirección a otra página
 // header("Location:../index.php");
 exit(); // Asegúrate de detener la ejecución del script después de la redirección
?>

?>
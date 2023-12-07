<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Oradores_textiles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}




$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);



$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Oradores</title>
</head>
<body>
<br><br>
<h1 class="text-center">Expositores</h1>

<?php 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        ?>        
        <div class="container">
    <div class="row">
        <div class="col-lg-12">
<table class="table table-border table-hover ">
  <thead>
    <tr>
      <th >#</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th >Tema</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th ><?= $row['id_orador'] ?></th>
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['apellido'] ?></td>
      <td><?= $row['tema'] ?></td>
    </tr>
   
  </tbody>
</table>
<?php 
}
}
?>   


</div>
</div>
</div>
</body>
</html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="stylesheet" href="../css/styles.css">
    <title>Oradores</title>
</head>
<body>

<header>
           
  <nav class="navbar navbar-expand-md navbar-light bg-light navbar-fixed-top">

    <div class="container-fluid">
      
      <a href="../index.php"><img src="../imagenes/logo.png" alt="Logo" width="150" height="70" class="d-inline-block align-text-top"></a>
      

      <a class="navbar-brand m-1" href="#"><strong>Charlas y talleres</strong></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light text-center">
          <li class="nav-item">
            <a class="nav-link" href="#nuevo">Lugar y fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#charlas">Charlas y vídeos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#talleres">Talleres: reservá tu lugar</a>
          </li>
          
          <li class="nav-4">
            <a class="nav-link active" aria-current="page" href="#presentacion">Dar una charla</a>
          </li>
          <!-- <li> <a  class="nav-link active" href="tickets.php"  target="_parent">Tickets</a></li> -->
           <li> <a  class="nav-link active login-nav " href="admin.php"  target="_parent">Login</a></li>
      
      
      
                      
       
        </ul>
       
      </div>
    </div>
</nav> 

</header>
<!--  termina  nav  -->

<br><br>
<div>
<h1 class="text-center">Lista de Expositores</h1>
</div>
<?php 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        ?>        
        
    <div class="row">
        <div class="col-12">
<table class="table table-border table-hover text-center">
  <thead class="bg-warning">
    <tr class="bg-warning-subtle">
      <th >#</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th >Tema</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="col-1"><?= $row['id_orador'] ?></th>
      <td class="col-2"><?= $row['nombre'] ?></td>
      <td class="col-2"><?= $row['apellido'] ?></td>
      <td class="col-4"><?= $row['tema'] ?></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>
<?php 
}
}
?>   




<!-- <footer id="">

<div>
       
    <div>
      <div class="row">
        <div class="row p-4 text-white w-100" id="fondo">

          <div class="col-xs-12 col-md-6 col-lg-3">  
            <p class="h3">De nosotros </p>
            <p class="text-decoration-none">Desde Buenos Aires, Argentina, impartimos clases presenciales y a distancia.</p>
          </div>
          
          <div class="col-xs-12 col-md-6 col-lg-3 text-white">
            <ul>
            <p class="h5 mb-3">Cursos y libros</p>
          <li><a href="#">Telar horizontal</a></li>
          <li><a href="#">Telar de cuadros</a></li>
          <li><a href="#">Diseño de indumentaria</a></li>
          <li><a href="#">Libros</a></li>
        </ul>
          </div>

          <div class="col-xs-12 col-md-6 col-lg-3">
           
            
            <ul>
            <p class="h5 mb-3">Links</p>
            <li><a href="#">Términos y condiciones</a></li>
          <li><a href="#">Políticas de privacidad</a></li>
            </ul>
          </div>

          <div class="col-12 col-md-6 col-lg-3 text-white"> 
              
            <ul>
            <p class="h5 mb-3">Contacto</p>
               <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
            </ul>
          </div>

          <div class="col-12">  
            <p class="text-center">Copyright - All rights reserved  &#174  2023</p> 
        </div>
            
      
      </div>
    </div>


    </footer>  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
 require "footer.php"
 ?>
</body>
</html>
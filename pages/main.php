<body>
  <main>
    <div class="container-fluid">
        
          <!--  empieza  carousel -->
          <div class="row">
            <div class="col-12">
              <div id="carouselExample" class="carousel slide">
                
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagenes/wichí.jpeg" class="d-block w-100" alt="Textiles Wichí">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning" >Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img src="imagenes/wichi.png" class="d-block w-100" alt="Textiles Mapuches">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>
            
                    <div class="carousel-item">
                      <img src="imagenes/diaguitas.png" class="d-block w-100" alt="Textiles del NOA">
                      <div class="carousel-caption text-right caption-center">
                        <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                        <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                        <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                        <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
            
                    </div>
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                  </button>
              </div>
            </div>

            <div class="body">
              <div id="charlas">
                <h2>Charlas sobre pueblos originarios</h2>
                <h5> Cultura, lengua, cosmovisión y técnicas textiles</h5>
              </div>
            </div>
            
          
          <!--  acá termina carousel -->
        </div> 
            
<!-- comienzan las cards -->
<div class="d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="imagenes/wichi-tec.jpeg" class="card-img-top img-fluid" alt="técnica textil wichí">
                <div class="card-body">
                    <button type="button" class="btn btn-warning btn-sm">Charla y vídeo</button>
                    <button type="button" class="btn btn-info btn-sm">Demostración</button>
                    <h5 class="card-title">Tejido Wichí</h5>
                    <p class="card-text">Los tejidos de la cultura Wichí se realizan con la fibra de chaguar o caraguatá, una planta que se usa desde tiempos prehispánicos con fines...</p>
                    <?php
                        echo "<td><a class='button [btn btn-warning btn-block]'href='pages/wichi.php' target='_blank'>más...</a></td></tr>"; 
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="imagenes/mapuche-tec.jpeg" class="card-img-top img-fluid" alt="técnica textil mapuche">
                <div class="card-body">
                    <button type="button" class="btn btn-warning btn-sm">Charla</button>
                    <button type="button" class="btn btn-info btn-sm">Demostración</button>
                    <h5 class="card-title">Técnica textil Mapuche</h5>
                    <p class="card-text">Los tejidos de la cultura Mapuche se realizan en telar vertical o "witral", que en lengua mapuche...</p>
                    <?php
                        echo "<td><a class='button [btn btn-warning btn-block]'href='pages/mapuche.php' target='_blank'>más...</a></td></tr>"; 
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="imagenes/diaguita-tec.jpeg" class="card-img-top img-fluid" alt="técnica textil del NOA">
                <div class="card-body">
                    <button type="button" class="btn btn-warning btn-sm">Charla y vídeos</button>
                    <button type="button" class="btn btn-info btn-sm">Demostración</button>
                    <h5 class="card-title">Técnica textil del NOA</h5>
                    <p class="card-text">El tejido en telar es una de las principales técnicas textiles del NOA. Se arma una urdimbre, conjunto de hilos paralelos, que se...</p>
                    <p class="card-text">
                        <?php
                            echo "<td><a class='button [btn btn-warning btn-block]'href='pages/noa.php' target='_blank'>más...</a></td></tr>"; 
                        ?>  
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>     

<!-- terminan las cards -->
    
                
            
            <!-- aquí conocé más -->
                <div class="row">
                        <div class="col-sm-6";>
                            <img src="imagenes/arqueologico.jpeg" class="img-fluid" alt="textil arqueológico" id="textil">
                            
                        </div>
            
                        <div class="col-sm-6"; id="arq">
                          <h4>Buenos Aires - 11 y 12 Nov. 2023</h4>
                            <p><small>Textiles arqueológicos: en el sitio preincaico de Santa Rosa de Tastil, Salta, se encontraron textiles que formaban parte de ajuares funerarios. Había telas, trenzados, gorros, ondas, redes y cordelería hechos con fibras de llama y de vicuña, fechados entre los años 1336 y 1439.</small></p>
            
                <!-- <botón conocé expositores - abrir en otra pestaña> -->
                    <!-- <button type="button" class="btn btn-warning" id="nuevo"><a href="pages/expositores.php">Conocé a los expositores</a></button> -->
                           
                    <?php
                    echo "<td><a class='button [btn btn-warning btn-block]'href='pages/expositores.php' target='_blank'>Conocé a los expositores</a></td></tr>"; 
                    ?>
                    </div>
                <!-- fin conocé más -->
            
                 <!-- inicio formulario -->
            
            <!-- <div class="container">
              <div class="row align-items-start">
                <div class="col-sm-3">
                   </div>
                      <div class="col-sm-6"> -->
            <!-- abrir tickets en otra pestaña -->
            
                  <div class="d-flex justify-content-center" >
                    <div id="subtitulo-talleres">
                      <h4>Talleres simultáneos con cupo limitado</h4>
                    </div>
                    <!--<div class="d-flex justify-content-center" >-->
                    <div id="talleres">
                      <p id="adquiri-tickets">Adquirí tu <a>ticket </a> aquí:</p>

                      <?php
                      // echo "<td><a class='button [btn btn-warning btn-block]'href='tickets.php' target='_blank'>TICKETS</a></td></tr>"; 
                      echo "<a class='button button-tickets' href='tickets.php' target='_blank'>TICKETS</a>";
                      ?>
                    </div>
                    <div id= "titulo-inscripciones">
                        <h3 id="font-titulo">INSCRIPCIONES PARA DAR CHARLAS</h3>  
                      </div>
                        <?php
                             //  require 'conexion.php';
                        ?>
                        <form action="../phpintegrador1/datos1.php" method="POST">
                            <div class="row">
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
                                </div>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"> </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="¿Sobre qué quieres hablar?" aria-label="¿Sobre qué quieres hablar?"></textarea>
                              </div>

                              <div id="subtitulo-recordatorio">
                                <p class="recordatorio-text-area">Recuerda incluir un título para tu charla</p>
                              </div> 
                              
                              <div class="d-grid gap-2">
                                <button type="button"class="btn btn-info active" id="botoncito" aria-pressed="true">ENVIAR</button>
                                <button type="button"class="btn btn-info active" id="botoncito2" aria-pressed="true">BORRAR</button>
                              </div>
                              <div class="border"></div>     
                                      
                          </form>
                    
                  </div>
                        
           
                      

                      <!--<div class="d-flex justify-content-center px-5">-->
                        <!--<div class="container-datos">-->   
                          
                      <!--</div> --> 
                        <!-- fin formulario -->
                      <!--</div>-->

                    </div>

                 
                    <!-- termina agrego segú clase  -->
      </div>  
    </div>   
        
  </main>

  
</body>

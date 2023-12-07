


<body>
    
<div class="row row-cols-1 row-cols-md-4 g-5">
<div class="col"></div>

<form action="datos.php" method="get">
    <!-- post para enviar y esconder la información /// get para traer y ver en la url -->
    <div class="col" id="username">
    <div class="mb-3">
   <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre" name="nombre" required>
</div>
</div>

<div class="col">
<div class="mb-3">
   <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="apellido" name="apellido" required>
</div>
</div>

<div class="mb-3">
    <div id="correo">
   <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@servidor.com" name="mail" required></div>
</div>
</div>
<!-- <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentarios"></textarea>
</div> -->



<div id="container">
       <div class="row">
          <div class="col-md-6 text-center">
                  <button onclick="" id="enviar" type="submit" class="btn btn-warning text-center" value="Enviar">Enviar</button>    
          </div>
          <div class="col-md-6 text-center">
                  <button onclick="" id="borrar" type="reset" class="btn btn-warning text-center" value="Borrar">Borrar</button>    
          </div>
       </div>
     </div>

<br>


</form>

    <!-- agrego formulario multiplicación -->
    <div class="container">
          <div id="entradas" action="">
              <form id="multiplicar" class="container">
                <div class="col-md-10" >
                  <label for="cantidad">Cantidad</label>  <br><input type="number" id="cantidad" placeholder="Cantidad" required> 
                </div>
                <div  class="col-md-10">
                  <label for="categoria">Categorías</label> 
                   <select id="categoria" type="number" class="form-select" aria-label="Default select example">
                    <option value="estudiantes">Estudiantes</option>
                    <option value="socios">Socios</option>
                    <option value="visitas">Visitas</option>
                    </select> 
                  </div>
              </form>
<!-- agrego botones bootstrap   -->
                
              <div class="alert alert-primary"  type="button" role="alert">Total a pagar: $ <span id="resultado"></span></div>
             
<!-- fin agrego botones    -->
              <!-- <div class="col-md-10">
             
              <button onclick="multiplicar()" type="button" ><p>Total a pagar: $ <span id="resultado"></span></p></button>
            </div> -->
             
          </div>
    </div>


     <div id="container">
       <div class="row">
          <div class="col-md-6 text-center">
                  <button id="borrar" type="reset" class="btn text-center" value="Borrar">Borrar</button>    
          </div>
          <div class="col-md-6 text-center">
                  <button onclick="multiplicar()" id="resumen" type="button" class="btn btn-secondary text-center">Resumen</button>    
          </div>
       </div>
     </div>
  








    <!-- comienza script - ticket = 200   - categorías: estudiante = 200 * 0,20; socio = 200 * 0,50; visita = 200 * 0,85 -->
 <script>
var estudiantes = 40;
var socios = 100;
var visitas = 170;

      function multiplicar(){
        let cantidad = document.getElementById("cantidad").value;
        console.log(document.getElementById("cantidad").value)

        let categoria = document.getElementById("categoria").value 

          if (categoria == "estudiantes"){
          valorTicket = 200 * 0,20
        console.log(valorTicket);

        let resumen = cantidad * estudiantes;
           document.getElementById("resultado").innerText = resumen;
      } else if (categoria == "socios"){
        valorTicket = 200 * 0,50
        console.log(valorTicket);

         let resumen1 = cantidad * socios;
           document.getElementById("resultado").innerText = resumen1;
      } else if (categoria == "visitas"){
         valorTicket = 200 * 0,85
        console.log(valorTicket)

         let resumen2 = cantidad * visitas;
            document.getElementById("resultado").innerText = resumen2;
       }     
      }  

     const capturaTotal = document.getElementById("resultado")

      </script>
    
</div>
</div></div>
<!-- total a Pagar -->


</body>
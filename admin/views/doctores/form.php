


<?php
    include('views/header.php');
?>
    <section>
      <div class="container text-left">
        <div class="row">
          <div class="col">
            <form action="doctores.php?action=save" method="post"> <!--Para darle la ubicaicon y con el metodo post-->            
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" placeholder="Captura tu nombre" value="" class="form-control" id="nombre" /> 
              </div>
              <div class="mb-3">
                  <label for="primer_apellido" class="form-label">Primer Apellido:</label>
                  <input type="text" name="primer_apellido" placeholder="Captura tu primer apellido" value="" class="form-control" id="primer_apellido" /> 
              </div>
              <div class="mb-3">
                  <label for="segundo_apellido" class="form-label">Segundo Apellido:</label>
                  <input type="text" name="segundo_apellido" placeholder="Captura tu segundo apellido" value="" class="form-control" id="segundo_apellido" /> 
              </div>
              <div class="mb-3">
                  <label for="fotografia" class="form-label">Fotografia:</label>
                  <input type="text" name="fotografia" placeholder="Captura tu fotografia" value="" class="form-control" id="fotografia" /> 
              </div>
              <input type="submit" name="save" value="Guardar" class="btn btn-success"/>
            </form>
          </div>
        </div>
      </div>
    </section>


<?php
    include('views/footer.php');
?>
<?php
    include('views/header.php');
?>
  <section>
    <div class="container text-left">
      <div class="row">
        <div class="col">
          <form action="doctores.php?action=<?php echo($action=='update')?'change&id_doctor='.$datos['id_doctor']:'save'; ?>" method="post"> <!--Para darle la ubicacion y con el metodo post-->            
            <h1><?php echo($action == 'update')?"Editar": "Nuevo"?> Doctor</h1>   <!--Si action es igual a update, entonces es editar, si no es nuevo
                          echo con if ternario-->
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" name="nombre" required="required" placeholder="Captura tu nombre" value="<?php echo(isset($datos["nombre"]))?$datos["nombre"]: '';?>" class="form-control" id="nombre" /> 
                                                              <!--Value es para que se quede el valor que se capturo-->
                                                              <!--isset es para saber si existe la variable, si existe la imprime-->
            </div>
            <div class="mb-3">
                <label for="primer_apellido" class="form-label">Primer Apellido:</label>
                <input type="text" name="primer_apellido" placeholder="Captura tu primer apellido" value="<?php echo(isset($datos["primer_apellido"]))?$datos["primer_apellido"]: '';?>" class="form-control" id="primer_apellido" /> 
            </div>
            <div class="mb-3">
                <label for="segundo_apellido" class="form-label">Segundo Apellido:</label>
                <input type="text" name="segundo_apellido" placeholder="Captura tu segundo apellido" value="<?php echo(isset($datos["segundo_apellido"]))?$datos["segundo_apellido"]: '';?>" class="form-control" id="segundo_apellido" /> 
            </div>
            <div class="mb-3">
                <label for="fotografia" class="form-label">Fotografia:</label>
                <input type="text" name="fotografia" required="required" placeholder="Captura tu fotografia" value="<?php echo(isset($datos["fotografia"]))?$datos["fotografia"]: '';?>" class="form-control" id="fotografia" /> 
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
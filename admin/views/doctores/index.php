<h1>Doctores</h1>

<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="doctores.php?action=create" type="button" class="btn btn-success">Nuevo</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fotografia</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato): ?>
        <tr>
            <th scope="row"><?php echo $dato['id_doctor']; ?></th>
            <td><?php echo $dato['primer_apellido']; ?></td>
            <td><?php echo $dato['segundo_apellido']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['fotografia']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="doctores.php?action=update&id_doctor=<?php echo $dato['id_doctor'];?>" class="btn btn-info">Actualizar</a>
                    <a href="doctores.php?action=delete&id_doctor=<?php echo $dato['id_doctor'];?>" class="btn btn-danger">Eliminar</a>
                                <!-- el resultado sera un arreglo con los datos que se pasan por url, action=delete&id_doctor= al doctor sobre el que pase el curso -->
                </div>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>
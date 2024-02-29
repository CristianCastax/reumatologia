<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col">
            <img src="img/logo.jpg" class="rounded mx-auto d-block" alt="...">

        </div>
    </div>

    <h1>Especialidades</h1>
    <p class="">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

    <table class="table">
        <thead>
            <tr>
                <th>Especialidad</th>
                <th>Responsable</th>
                <th>Extensión</th>
            </tr>
        </thead>
       
        <tbody> 
            <?php 
            include('especialidades_test.php');
            foreach($datos as $dato): ?>
            <tr>
                <td><?php echo $dato['especialidad']; ?></td>
                <td><?php echo $dato['nombre_doctor']; ?></td>
                <td><?php echo $dato['extension']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
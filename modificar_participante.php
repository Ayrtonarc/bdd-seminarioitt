<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b4b101d141.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <form class="col-4" p-3 method="POST">

<h3 class="text-center text-secondary">Modificar participantes</h3>
<?php
           
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                <input type="text" class="form-control" name="Organizacion">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero</label>
                <input type="text" class="form-control" name="Numero">
            </div>
    
            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Registrar</button>
    
        </form>
    </body>
</html>
<?php
    include "model/conexion.php";
    $ID=$_GET["ID"];
    $sql=$conexion->query(" select * from participantes where ID=$ID");
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
            include "controller/modificar_participante.php";

            while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" value="<?= $datos->Nombre?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno" value="<?= $datos->ApellidoPaterno?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno" value="<?= $datos->ApellidoMaterno?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                <input type="text" class="form-control" name="Organizacion" value="<?= $datos->Organizacion?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contacto</label>
                <input type="text" class="form-control" name="Contacto" value="<?= $datos->Contacto?>" >
                
            </div>

            <?php }           
            ?>
            
    
            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Modificar</button>
    
        </form>
    </body>
</html>
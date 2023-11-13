<?php
    include "model/conexion.php";
    $ID=$_GET["ID"];
    $sql=$conexion->query("select * from seminario where ID=$ID ");
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

<h3 class="text-center text-secondary">Modificar Seminarios</h3>
<input type="hidden" name="ID" value="<?=$_GET["ID"]?>">
<?php
            include "controller/modificar_seminarios.php";

            while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo Seminario</label>
                <input type="text" class="form-control" name="Titulo" value="<?= $datos->Titulo ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion" value="<?= $datos->Descripcion ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="Fecha" value="<?= $datos->Fecha ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lugar</label>
                <input type="text" class="form-control" name="Lugar" value="<?= $datos->Lugar ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Articulo</label>
                <input type="text" class="form-control" name="ArticuloExpuesto" value="<?= $datos->ArticuloExpuesto ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id Presentador</label>
                <input type="text" class="form-control" name="OradorPresentador" value="<?= $datos->OradorPresentador ?>" >
                
            </div>
            

            <?php }           
            ?>
            
    
            <button type="submit" class="btn btn-primary" name="btnmodsem" value="ok">Modificar seminario</button>
    
        </form>
    </body>
</html>
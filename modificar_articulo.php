<?php
    include "model/conexion.php";
    $ID=$_GET["ID"];
    $sql=$conexion->query("select * from articulo where ID=$ID ");
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

<h3 class="text-center text-secondary">Modificar Articulos</h3>
<input type="text" name="ID" value="<?=$_GET["ID"]?>">
<?php
            include "controller/modificar_articulos.php";

            while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo Articulo</label>
                <input type="text" class="form-control" name="TituloArticulo" value="<?= $datos->TituloArticulo ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autores</label>
                <input type="text" class="form-control" name="Autores" value="<?= $datos->Autores ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Revista Cientifica</label>
                <input type="text" class="form-control" name="RevistaCientifica" value="<?= $datos->RevistaCientifica ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Anio Publicacion</label>
                <input type="text" class="form-control" name="AnioPublicacion" value="<?= $datos->AnioPublicacion ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero Conacyt</label>
                <input type="text" class="form-control" name="NumeroConacyt" value="<?= $datos->NumeroConacyt ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Abstract</label>
                <input type="text" class="form-control" name="Abstract" value="<?= $datos->Abstract ?>" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enlace</label>
                <input type="text" class="form-control" name="Enlace" value="<?= $datos->Enlace ?>" >
            </div>

            <?php }           
            ?>
            
    
            <button type="submit" class="btn btn-primary" name="btnmodarticulo" value="ok">Modificar Articulos</button>
    
        </form>
    </body>
</html>
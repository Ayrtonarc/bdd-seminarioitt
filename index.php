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
    <script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>

    <h1 class="text-center p-3">Inicio Index</h1>
    <?php
        include "model/conexion.php";
        include "controller/eliminar_participantes.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" p-3 method="POST">

            <h3 class="text-center text-secondary">Registro de participantes</h3>
            <?php 
                
                include "controller/registro_participantes.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                <input type="text" class="form-control" name="Organizacion" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contacto</label>
                <input type="text" class="form-control" name="Contacto" >
                
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="btnregister" value="ok" >Registrar</button>
            
        </form>
        <div class="col-8 p-4">
                    <table class="table">
                        <thead class="bg-info">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido P  </th>
                            <th scope="col">Apellido M</th>
                            <th scope="col">Organizacion</th>
                            <th scope="col">Contacto</th>    
                            <th scope="col"></th>      

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "model/conexion.php";
                                $sql = $conexion->query("select * from participantes");
                                while($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->Nombre ?></td>
                                <td><?= $datos->ApellidoPaterno ?></td>
                                <td><?= $datos->ApellidoMaterno ?></td>
                                <td><?= $datos->Organizacion ?></td>
                                <td><?= $datos->Contacto ?></td>
                                
                                
                            
                                <td>
                                    <a href="modificar_participante.php?ID=<?=$datos->ID?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?ID=<?=$datos->ID?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                                
                            <?php }
                            ?>


                            
                            
                        </tbody>
            </table>

                                    

            

        </div>

        <?php
        include "model/conexion.php";
        include "controller/eliminar_oradores.php"
        ?>

        <div class="container-fluid row">
        <form class="col-4" p-3 method="POST">

            <h3 class="text-center text-secondary">Registro de oradores</h3>
            <?php 
                
                include "controller/registro_oradores.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Organizacion</label>
                <input type="text" class="form-control" name="Organizacion" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contacto</label>
                <input type="text" class="form-control" name="Contacto" >
                
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="btnregisterorador" value="ok" >Registrar Orador</button>
            
        </form>
        <div class="col-8 p-4">
                    <table class="table">
                        <thead class="bg-info">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido P  </th>
                            <th scope="col">Apellido M</th>
                            <th scope="col">Organizacion</th>
                            <th scope="col">Contacto</th>    
                            <th scope="col"></th>      

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "model/conexion.php";
                                $sql = $conexion->query("select * from orador");
                                while($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->Nombre ?></td>
                                <td><?= $datos->ApellidoPaterno ?></td>
                                <td><?= $datos->ApellidoMaterno ?></td>
                                <td><?= $datos->Organizacion ?></td>
                                <td><?= $datos->Contacto ?></td>
                                
                                
                            
                                <td>
                                    <a href="modificar_orador.php?ID=<?=$datos->ID?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="" href="index.php?ID=<?=$datos->ID?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                                
                            <?php }
                            ?>


                            
                            
                        </tbody>
            </table>
        </div>

        
        <?php
        include "model/conexion.php";
        include "controller/eliminar_articulos.php"
        ?>
        
        <div class="container-fluid row">
        <form class="col-4" p-3 method="POST">

            <h3 class="text-center text-secondary">Registro de Articulos</h3>
            <?php 
                
                include "controller/registro_articulos.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo Articulo</label>
                <input type="text" class="form-control" name="TituloArticulo" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autores</label>
                <input type="text" class="form-control" name="Autores" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Revista Cientifica</label>
                <input type="text" class="form-control" name="RevistaCientifica" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Anio Publicacion</label>
                <input type="text" class="form-control" name="AnioPublicacion" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero Conacyt</label>
                <input type="text" class="form-control" name="NumeroConacyt" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Abstract</label>
                <input type="text" class="form-control" name="Abstract" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enlace</label>
                <input type="text" class="form-control" name="Enlace" >
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="registerart" value="ok" >Registrar Articulo</button>
            
        </form>
        <div class="col-8 p-4">
                    <table class="table">
                        <thead class="bg-info">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo Articulo</th>
                            <th scope="col">Autores</th>
                            <th scope="col">Revista Cientifica</th>
                            <th scope="col">Anio Publicacion</th>
                            <th scope="col">Numero Conahcyt</th>
                            <th scope="col">Abstract</th>
                            <th scope="col">Enlace</th>
                            <th scope="col"></th>     
                                 

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "model/conexion.php";
                                $sql = $conexion->query("select * from articulo");
                                while($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->TituloArticulo ?></td>
                                <td><?= $datos->Autores ?></td>
                                <td><?= $datos->RevistaCientifica  ?></td>
                                <td><?= $datos->AnioPublicacion ?></td>
                                <td><?= $datos->NumeroConacyt ?></td>
                                <td><?= $datos->Abstract ?></td>
                                <td><?= $datos->Enlace  ?></td>
                                
                                
                            
                                <td>
                                    <a href="modificar_articulo.php?ID=<?=$datos->ID?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="" href="index.php?ID=<?=$datos->ID?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                                
                            <?php }
                            ?>


                            
                            
                        </tbody>
            </table>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
</body>

</html>
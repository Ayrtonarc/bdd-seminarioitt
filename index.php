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


    <h1 class="text-center p-3">Hola mundo</h1>
    <div class="container-fluid row">
        <form class="col-4" p-3 method="POST">

            <h3 class="text-center text-secondary">Registro de participantes</h3>
            <?php 
                include "model/conexion.php";
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
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero</label>
                <input type="text" class="form-control" name="Numero" >
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
                            <th scope="col">Email</th>      
                            <th scope="col">Numero</th>      
                            <th scope="col"></th>      

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "model/conexion.php";
                                $sql = $conexion->query("select * from participantes");
                                while($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->IDParticipante ?></td>
                                <td><?= $datos->Nombre ?></td>
                                <td><?= $datos->ApellidoPaterno ?></td>
                                <td><?= $datos->ApellidoMaterno ?></td>
                                <td><?= $datos->Organizacion ?></td>
                                <td><?= $datos->Email ?></td>
                                <td><?= $datos->Numero ?></td>
                                
                            
                                <td>
                                    <a href="modificar_participante.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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
<?php
if(!empty($_POST["registersem"])){
    if(!empty($_POST["Titulo"]) and !empty($_POST["Descripcion"]) and !empty($_POST["Fecha"]) and !empty($_POST["Lugar"]) and !empty($_POST["ArticuloExpuesto"]) and !empty($_POST["OradorPresentador"]) ){
        $Titulo=$_POST["Titulo"];
        $Descripcion=$_POST["Descripcion"];
        $Fecha=$_POST["Fecha"];
        $Lugar=$_POST["Lugar"];
        $ArticuloExpuesto=$_POST["ArticuloExpuesto"];
        $OradorPresentador=$_POST["OradorPresentador"];
        

        $sql = $conexion->query("INSERT INTO seminario (Titulo, Descripcion, Fecha, Lugar, ArticuloExpuesto, OradorPresentador) VALUES ('$Titulo', '$Descripcion', '$Fecha', '$Lugar', '$ArticuloExpuesto','$OradorPresentador')");

        if($sql==1){
            echo '<div class="alert alert-success">Seminario registrada</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar Seminario</div>';
        }

    }else{
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
    }
}
?>
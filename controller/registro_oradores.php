<?php
if(!empty($_POST["btnregisterorador"])){
    if(!empty($_POST["Nombre"]) and !empty($_POST["ApellidoPaterno"]) and !empty($_POST["ApellidoMaterno"]) and !empty($_POST["Organizacion"]) and !empty($_POST["Contacto"]) ){
        $Nombre=$_POST["Nombre"];
        $ApellidoPaterno=$_POST["ApellidoPaterno"];
        $ApellidoMaterno=$_POST["ApellidoMaterno"];
        $Organizacion=$_POST["Organizacion"];
        $Contacto=$_POST["Contacto"];
        

        $sql = $conexion->query("INSERT INTO orador (Nombre, ApellidoPaterno, ApellidoMaterno, Organizacion, Contacto) VALUES ('$Nombre', '$ApellidoPaterno', '$ApellidoMaterno', '$Organizacion', '$Contacto')");

        if($sql==1){
            echo '<div class="alert alert-success">Orador registrado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar Orador</div>';
        }

    }else{
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
    }
}
?>
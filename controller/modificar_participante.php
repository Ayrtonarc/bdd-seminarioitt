<?php
if(!empty($_POST["btnregister"])){
    if(!empty($_POST["Nombre"]) and !empty($_POST["ApellidoPaterno"]) and !empty($_POST["ApellidoMaterno"]) and !empty($_POST["Organizacion"]) and !empty($_POST["Contacto"]))    {
        $id=$_POST["ID"];
        $nombre=$_POST["Nombre"];
        $apellidoPaterno=$_POST["ApellidoPaterno"];
        $apellidoMaterno=$_POST["ApellidoMaterno"];
        $organizacion=$_POST["Organizacion"];
        $contacto=$_POST["Contacto"];
        $sql=$conexion->query(" update participantes set Nombre='$nombre', ApellidoPaterno='$apellidoPaterno', ApellidoMaterno='$apellidoMaterno', Organizacion ='$organizacion', Contacto ='$contacto' where ID=$ID ");
        if($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-warning'>campos vacios</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>
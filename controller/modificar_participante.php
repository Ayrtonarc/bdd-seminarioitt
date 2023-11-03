<?php
if(!empty($_POST["btnregister"])){
    if(!empty($_POST["Nombre"]) and !empty($_POST["ApellidoPaterno"]) and !empty($_POST["ApellidoMaterno"]) and !empty($_POST["Organizacion"]) and !empty($_POST["Contacto"]))    {

    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>
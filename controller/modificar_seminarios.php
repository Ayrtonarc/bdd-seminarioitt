<?php
if(!empty($_POST["btnmodsem"])){
    if(!empty($_POST["Titulo"]) and !empty($_POST["Descripcion"]) and !empty($_POST["Fecha"]) and !empty($_POST["Lugar"]) and !empty($_POST["ArticuloExpuesto"]) and !empty($_POST["OradorPresentador"]))    {
        $ID=$_POST["ID"];
        $Titulo=$_POST["Titulo"];
        $Descripcion=$_POST["Descripcion"];
        $Fecha=$_POST["Fecha"];
        $Lugar=$_POST["Lugar"];
        $ArticuloExpuesto=$_POST["ArticuloExpuesto"];
        $OradorPresentador=$_POST["OradorPresentador"];
        $sql=$conexion->query(" update seminario set Titulo='$Titulo', Descripcion='$Descripcion', Fecha='$Fecha', Lugar ='$Lugar', ArticuloExpuesto  ='$ArticuloExpuesto', OradorPresentador  ='$OradorPresentador' where ID=$ID ");
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
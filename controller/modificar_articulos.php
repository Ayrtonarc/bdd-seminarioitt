<?php
if(!empty($_POST["btnmodarticulo"])){
    if(!empty($_POST["TituloArticulo"]) and !empty($_POST["Autores"]) and !empty($_POST["RevistaCientifica"]) and !empty($_POST["AnioPublicacion"]) and !empty($_POST["NumeroConacyt"]) and !empty($_POST["Abstract"]) and !empty($_POST["Enlace"]))    {
        $ID=$_POST["ID"];
        $TituloArticulo=$_POST["TituloArticulo"];
        $Autores=$_POST["Autores"];
        $RevistaCientifica=$_POST["RevistaCientifica"];
        $AnioPublicacion=$_POST["AnioPublicacion"];
        $NumeroConacyt=$_POST["NumeroConacyt"];
        $Abstract=$_POST["Abstract"];
        $Enlace=$_POST["Enlace"];

        $sql=$conexion->query(" update articulo set TituloArticulo='$TituloArticulo', Autores='$Autores ', RevistaCientifica='$RevistaCientifica', AnioPublicacion ='$AnioPublicacion', NumeroConacyt='$NumeroConacyt', Abstract='$Abstract',Enlace='$Enlace'  where ID=$ID ");
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
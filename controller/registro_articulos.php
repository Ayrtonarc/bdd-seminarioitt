<?php 
if(!empty($_POST["registerart"])){
    if(!empty($_POST["TituloArticulo"]) and !empty($_POST["Autores"]) and !empty($_POST["RevistaCientifica"]) and !empty($_POST["AnioPublicacion"]) and !empty($_POST["NumeroConacyt"]) and !empty($_POST["Abstract"]) and !empty($_POST["Enlace"])){
        $TituloArticulo=$_POST["TituloArticulo"];
        $Autores=$_POST["Autores"];
        $RevistaCientifica=$_POST["RevistaCientifica"];
        $AnioPublicacion=$_POST["AnioPublicacion"];
        $NumeroConacyt=$_POST["NumeroConacyt"];
        $Abstract=$_POST["Abstract"];
        $Enlace=$_POST["Enlace"];
        

        $sql = $conexion->query("INSERT INTO articulo (TituloArticulo, Autores, RevistaCientifica, AnioPublicacion, NumeroConacyt, Abstract, Enlace) VALUES ('$TituloArticulo', '$Autores', '$RevistaCientifica', '$AnioPublicacion', '$NumeroConacyt', '$Abstract', '$Enlace')");

        if($sql==1){
            echo '<div class="alert alert-success">Articulo registrado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar Articulo</div>';
        }

    }else{
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
    }
}
?>
<?php
    if(!empty($_GET["ID"])) {
       $ID=$_GET["ID"];
       $sql=$conexion->query(" delete from participantes where ID=$ID "); 
    //    if($sql==1) {
    //     echo '<div class="alert alert-success"> participante eliminado correctamente</div>';
    //    } else{
    //     '<div class="alert alert-danger"> Error al eliminar</div>';
    //    }
    }
?>
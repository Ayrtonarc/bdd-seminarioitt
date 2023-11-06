<?php
    if(!empty($_GET["ID"])) {
       $ID=$_GET["ID"];
       $sql=$conexion->query(" delete from orador where ID=$ID "); 
   
    }
?>
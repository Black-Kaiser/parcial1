<?php 
//conectamos Con el servidor
$conectar=@mysql_connect('localhost','root','12345678');
//verificamos la conexion
if(!$conectar){
    echo"No Se Pudo Conectar Con El Servidor";
}else{

    $base=mysql_select_db('parcial');
    if(!$base){
        echo"No Se Encontro La Base De Datos";			
    }
}


?>

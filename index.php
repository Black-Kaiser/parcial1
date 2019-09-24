<?php
//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","12345678","parcial") or
die("Problemas con la conexión");
?>

<html>
<head>
<title>Manejo de galeria </title>

    <body>
    <center><h1>Crear Album</h1>

    <form action="guardar_album.php" method="post" >
            NOMBRE:<input type="text" name="nombre"> <br><br>
            N° DE IDENTIFICACION:<input type="text" name="num_id"> <br><br>
            <input type="submit"/>


    </form>

    </center>
    <br>
    <br>
    

    <center><h2>Lista de Albumnes</h2>
    <table border=1>
    <tr>
        <th>NOMBRE</th>
        <th>N° IDENTIFICACION</th>
        
    </tr>

    <?php
    $consulta="SELECT * FROM album";
    $resultado=mysqli_query($conexion, $consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
    ?>

<tr>
  <td> <?php echo $mostrar['nombre']?></td>
  <td><?php echo $mostrar['num_id']?></td>
  <td><a href="nueva_galeria.php"><input type="submit" name="ingresar" value="ingresar"></a></td>
  <td><input type="submit" name="UPD" value="eliminar"></td>
</tr>
<?php
    }
?>
    </table>
    </body>
</center>
</html>

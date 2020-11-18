
<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $id=$_POST['ident'];
 $sql="INSERT INTO datos_3 VALUES('$nombre',
           '$apellido',
           '$id')";
 $ejecutar=mysqli_query($con,$sql);
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <link rel = "stylesheet" href = "css/style.css">
  </head>
  <body>
    <div class="log">

        <h1>El pedido ha sido entragado con exito</h1>
      <form >
      </form>

      <div class="con">
          <a href="dom.html">Continuar</a>
      </div>

    </div>

  </body>
</html>

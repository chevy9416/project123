<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];
 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$contraseña')";
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
      <h1>Registro exitoso</h1>
      <form >
        <div class="con">
            <a href="index.html">Continuar</a>
        </div>

      </form>
    </div>
  </body>
</html>

<?php

 $host ="localhost";
 $user ="root";
 $pass ="root123*";
 $db="medicina";

 $con = new mysqli($host,$user,$pass,$db)or die("Problemas al Conectar");
 $con->select_db($db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];
 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$contraseña')";
 $ejecutar=$con->query($sql);
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }
$con->close();

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

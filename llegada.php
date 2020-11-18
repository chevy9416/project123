
<?php

 $host ="localhost";
 $user ="root";
 $pass ="root123*";
 $db="medicina";

 $con = new  mysqli($host,$user,$pass,$db)or die("Problemas al Conectar");
 $con->select_db($db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $id=$_POST['ident'];
 $sql="INSERT INTO datos_3 VALUES('$nombre',
           '$apellido',
           '$id')";
 $ejecutar=$con->query($sql);
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }
$con ->close();


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


<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $id=$_POST['id'];
 $direccion=$_POST['direccion'];
 $celular=$_POST['celular'];
 $fech=$_POST['fecha'];
 $sql="INSERT INTO datos_1 VALUES('$id',
           '$direccion',
           '$celular',
           '$fech')";
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
        <h1>Formulario enviado con exito</h1>
      <form >
        <div class="formulas">
          <a href="formulas.html">Formulas disponibles</a>
        </div>

      </form>
    </div>
  </body>
</html>

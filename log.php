
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
 $sql="INSERT INTO datos_2 VALUES('$nombre',
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

        <h1>Bienvenidos a Medicina Hasta Ti</h1>
      <form >

        <article>
          <p>Aqui podras solicitar de forma amigable los medicamentos recetados por el médico con servicio a
            domicilio hasta la comodidad de tu casa.</p>
            <p>Continuar como:</p>
      </article>

<div class="bien">

  <a href="ingresar.html">Paciente</a>
  <a href="far.html">Farmacéutico</a>
  <a href="dom.html">Domiciliario</a>

</div>


      </form>

    </div>

  </body>
</html>

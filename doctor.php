<?php
   $servidor = "sql.freedb.tech";
   $usuario = "freedb_Bello_pro";
   $clave = "xgSJ24Af@BJVmBX";
   $bd = "freedb_Json_pro";
   
   $con = mysqli_connect ($servidor, $usuario, $clave, $bd );
   $con->set_charset("utf8");

   // Verificar conexión
  if ($con->connect_error) {
  die("Conexión fallida: " . $con->connect_error);
}

if(isset($_POST['enviar'])){
      
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $ubicacion = $_POST['ubicacion'];
    
    $insertar = "INSERT INTO vizcarrondo Values ('','$cedula','$correo','$sexo','$edad','$ubicacion')";
    
    $con = mysqli_query($con,$insertar);
}
  ?>

<?php
// Obtiene los datos de el formulario HTML
$correo_admin=$_POST['email_user'];
$contraseña_admin = $_POST['pass_user'];
// Hace la verificación de inciar sesion
session_start();
$_SESSION['email_user'] = $correo_admin;

// Crea una conexion en la base de datos de MySQL
$conexion =mysqli_connect("localhost","root","","kstore");

// Hace un select para verificar si donde nombre_admin con esta en la base de datos hace los mismo con contraseña_admin
$consulta="SELECT * FROM CLIENTES WHERE EMAIL = '$correo_admin' AND  PASSWORD='$contraseña_admin'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

// Si si cumple con lo requisitos de lo que piden, te redirige a la pagina para registrar los juegos
if($filas){
  header("Location: actualizarclientes.html");
  //Si no cumple con lo requirido, te redirige a la misma donde se encuntran
}else{
  ?>
  <?php
  echo "<script>window.location = 'index.html'</script>";
  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
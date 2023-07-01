<?php
   $conexion = mysqli_connect("localhost", "root", "", "kstore");
   if( !$conexion)
   {
       die( "error de conexion");
   }
  if ($conexion)
  {
    if  (isset($_REQUEST['delus']))
    {
      $emailuser = $_GET['email_user'];
      $passuser = $_GET['pass_user'];
    
  $consulta = "DELETE FROM CLIENTES WHERE EMAIL='$emailuser' AND PASSWORD = '$passuser'";
    $result = mysqli_query($conexion, $consulta);
    echo 'Usuario eliminado correctamente';
    echo "<script>window.location = 'actualizarclientes.html'</script>";
    }
    else
    echo "<script>window.location = 'index.html'</script>";
      echo 'No existe el Correo seleccionado';
      $conexion->close();
  }
	else
  echo "<script>window.location = 'index.html'</script>";
    echo 'No existe el Correo seleccionado';
    $conexion->close();
?>




<?php
   require_once("conexionclientes.php");
   if (!$conexion)
   die (" Problemas con la conexion a base de datos");
  if ($conexion)
  {
  $registro = $conexion->query("select * FROM CLIENTES WHERE EMAIL='$_REQUEST[email_user]' AND PASSWORD ='$_REQUEST[pass_user]'") or
    die($conexion->error );
    echo "<script>window.location = 'inventario/admin.html'</script>";
  }
	else
    echo 'No existe el Correo seleccionado';
    $conexion->close();
?>
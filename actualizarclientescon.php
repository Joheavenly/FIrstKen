<?php
  $mysql = new mysqli("localhost","root","","kstore");
  if ( !$mysql )
  die("Problemas con la conexión a la base de datos");
  
  $registro = $mysql->query("SELECT * FROM CLIENTES WHERE EMAIL='$_REQUEST[email_user]'") or
    die($mysql->error);
    
  if ($reg = $registro->fetch_array())
	  {
      $strEmail = $reg['EMAIL'];
    	$strName = $reg['NOMBRE'];
    	$strLast = $reg['APELLIDO'];
      $strPhone = $reg['TELEFONO'];
      $strDate = $reg['FECHANAC'];
      $strHome = $reg['DOMICILIO'];
      $strRFC = $reg['RFC'];
      $strPASS = $reg['PASSWORD'];
	  } 
	else
    echo 'No existe el Correo seleccionado';
    $mysql->close();


?>
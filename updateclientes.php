<?php
 require_once ("actualizarclientescon.php");//incluye el archivo php que contiene la conexion
 require_once ("conexionclientes.php");
 //require_once("actval.php");
//$con=Conectar();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['Submit']))
{
	$Name = $_REQUEST['name_user'];
	$Email = $_REQUEST['email_user'];
	$Last = $_REQUEST['lastname_user'];
	$Phone = $_REQUEST['phone_user'];
	$Date = $_REQUEST['dateborn_user'];
	$Home = $_REQUEST['home_user'];
	$RFC = $_REQUEST['rfc_user'];
	$PASS = $_REQUEST['pass_user'];


$query ="UPDATE CLIENTES SET NOMBRE ='$Name', APELLIDO = '$Last', TELEFONO = '$Phone',
                             FECHANAC = '$Date', DOMICILIO = '$Home', RFC ='$RFC', PASSWORD = '$PASS' WHERE EMAIL = '$Email'";

$result = mysqli_query($conexion,$query);
}
if(!$result)
{
echo "No se ha podido Modificar";
}
else 
{
echo "Datos Modificados Correctamente<br><br>";
echo "<script>window.location= 'index.html' </script>";
}

?>	

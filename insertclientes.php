<?php
    require_once("conexionclientes.php");
    if(isset($_POST['Submit']))
    {
        if(empty($_POST['name_user'])   || empty($_POST['email_user'])      || empty($_POST['lastname_user']
        || empty($_POST['phone_user'])  || empty($_POST['dateborn_user'])   || empty($_POST['home_user'])
        || empty($_POST['rfc_user'])    || empty($_POST['pass_user'])))
        {
            echo ' Favor de llenar los campos marcados con * ';
        }
        else
        {
            $UserName = $_POST['name_user'];
            $UserEmail = $_POST['email_user'];
            $UserLast = $_POST['lastname_user'];
            $UserPhone = $_POST['phone_user'];
            $UserDate = $_POST['dateborn_user'];
            $UserHome = $_POST['home_user'];
            $UserRFC = $_POST[' rfc_user'];
            $UserPASS = $_POST['pass_user'];

            $query = "insert into clientes(NOMBRE, EMAIL, APELLIDO, TELEFONO, FECHANAC, DOMICILIO, RFC, PASSWORD) values('$UserName','$UserEmail','$UserLast', '$UserPhone', 
            '$UserDate', '$UserHome', '$UserRFC', '$UserPASS')";
            $result = mysqli_query($conexion,$query);

            if($result)
            {
                header("location:index.html");
                echo ' Registro exitoso';
            }
            else
            {
                echo ' Por favor ve la Consulta ';
            }
        }
    }
    else
    {
        header("location:index.html");
    }
?>
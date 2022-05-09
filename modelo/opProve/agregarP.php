<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 

$oMysql = new mysqli("localhost","paty","cambiame","trigodeoro");

$Query= "INSERT INTO proveedores VALUES ('".$_POST["id_proveedor"]."','".$_POST["nombre_proveedor"]."','".$_POST["telefono"]."')";
          
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null)
header("Location:../../Proveedores.php");


else
//echo '<script>alert("¡Usuario y/o contraseña incorrectos!")</script>';
include_once "insertarP.php";


	 
   ?>

</body>
</html>

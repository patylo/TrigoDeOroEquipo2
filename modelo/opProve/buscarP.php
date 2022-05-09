<?php 
//Busca registro  a través del nombre elegido
$idBuscar=$_GET["id_proveedor"];
$oMysql = new mysqli("localhost","paty","cambiame","trigodeoro");
$Query="select * from proveedores WHERE id_proveedor = '".$idBuscar."'";
$Result = $oMysql->query( $Query );

if($Result==null)
   	print("No se  encuentra el registro");
else{
      $row =$Result->fetch_array();
  	  $nombre_proveedor=$row["nombre_proveedor"];
	  $telefono=$row["telefono"];
	}
?>
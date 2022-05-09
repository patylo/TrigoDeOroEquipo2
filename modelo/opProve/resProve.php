<?php
include_once("../borraProve.php");
//session_start();

$sErr=""; $sOpe = ""; $sCve = ""; 
//$oPersHosp = new PersonalHospitalario();
$oProveedor = new Proveedor();


	
		/*Verifica datos de captura mínimos*/
		if (isset($_POST["txtClave"]) && !empty($_POST["txtClave"]) &&
			isset($_POST["txtOpe"]) && !empty($_POST["txtOpe"])){
			$sOpe = $_POST["txtOpe"];
			$sCve = $_POST["txtClave"];
			$oProveedor->setId_proveedor($sCve);
			
			try{
				 if ($sOpe == 'bp')
					$nResultado = $oProveedor->borrarProveedor($sCve);
					
				
			}catch(Exception $e){
			
				$sErr = "Error en base de datos, comunicarse con el administrador";
			}
		}


	if ($sErr == "")
		header("Location:../../Proveedores.php");
	
?>
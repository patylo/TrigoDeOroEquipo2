<?php
include_once("../borra.php");
//session_start();

$sErr=""; $sOpe = ""; $sCve = ""; 
//$oPersHosp = new PersonalHospitalario();
$oMateriaP = new materiaprima();


	
		/*Verifica datos de captura mínimos*/
		if (isset($_POST["txtClave"]) && !empty($_POST["txtClave"]) &&
			isset($_POST["txtOpe"]) && !empty($_POST["txtOpe"])){
			$sOpe = $_POST["txtOpe"];
			$sCve = $_POST["txtClave"];
			$oMateriaP->setId_mp($sCve);
			
			try{
				 if ($sOpe == 'b')
					$nResultado = $oMateriaP->borrar($sCve);
					
				
			}catch(Exception $e){
			
				$sErr = "Error en base de datos, comunicarse con el administrador";
			}
		}


	if ($sErr == "")
		header("Location:../../materiaprima.php");
	
?>
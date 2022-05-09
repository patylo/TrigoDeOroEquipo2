<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/fondo.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/prin.css">
    <title>Confirmación</title>
</head>
<div class="header">
  <h1>Borrar Proveedor</h1>
</div>
<?php
include_once '../borraProve.php';
$sCve = ""; $sOpe = ""; $sNomBoton ="Borrar";
$sCve = $_POST["txtClave"];
?>

		<div class="row">
    	<div class="col-6">
        <div class=section>
		<section style="background-color:#E2BE99;">
			<form name="abcPH" action="resProve.php" method="post">
			<br> 
<br> 
				<h1><b>¿Est&aacute;s seguro que quieres borrar al proveedor?</b></h1>
			    <input type="hidden" name="txtOpe" value="<?php echo $sOpe;?>"/>
				<input type="hidden" name="txtClave" value="<?php echo $sCve;?>"/>
				
				<input type ="submit" value="<?php echo $sNomBoton;?>"
				onClick="txtClave.value=<?php echo $sCve; ?>; txtOpe.value='bp'" />
				<input type="submit" name="Submit" value="Cancelar" 
				 onClick="abcPH.action='../../Proveedores.php';">
				 <br> 
<br> 
<br> 
<br>  
			</form>
		</section>
		</div>
			</div>
    <?php include "../../aside.html";?>
    </div>
<?php include '../../footer.html'; ?>
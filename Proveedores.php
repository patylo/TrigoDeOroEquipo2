<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/prin.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/prin.css">
	<link rel="stylesheet" href="css/fondo.css">
    <title>Inventario</title>
</head>
<body>
<?php include 'header.html';?>

<ul class="topnav">
        <li><a href="materiaprima.php">Administraci&oacute;n de productos</a></li>
        <li><a href="Proveedores.php">Administraci&oacute;n de proveedores</a></li>
        <li><a href="modelo/logout.php">Cerrar sesi&oacute;n</a></li>
</ul>
<?php
include 'modelo/borraProve.php';
$arrProveedor=null;
$oProveedor = new Proveedor();
$arrProveedor = $oProveedor->buscarTodos();
?>
<section>
	<h1><b>Proveedores</b></h1>
	
		
		<div class="row">
    <div class="col-6">
        <div class=section>
		<table border="1" align="center" >
				<tr style="background-color:rgba(253, 236, 5, 0.801);" align="center">
					<td>ID Proveedor</td>
					<td>Nombre Proveedor</td>
					<td>Telefono</td>
					<td>Acciones</td>
				</tr>
				<?php
						if ($arrProveedor!=null){
							foreach($arrProveedor as $oProveedor){
					?>
					<tr align="center">
						<td class="llave" style="background-color:rgba(253, 236, 5, 0.801);" ><?php echo $oProveedor->getId_proveedor(); ?></td>
						<td style="background-color:#fff"><?php echo $oProveedor->getNombre_proveedor(); ?></td>
						<td style="background-color:#fff"><?php echo $oProveedor->getTelefono(); ?></td>
						<td style="background-color:#fff">
							<!--<a class="bton"href="modelo/op/capturarNuevos.php ? id_mp=<?php //print($oMateriaP->getId_mp()); ?>"> <?php //print("Actualiza"); ?> </a> -->
							<a class="bton"href="modelo/opProve/capturarNuevosP.php?id_proveedor=<?php print($oProveedor->getId_proveedor()); ?>"> <?php print("Actualiza"); ?> </a> 
							<form name="formTablaGral" method="post" action="modelo/opProve/accionProve.php">
							<input type="hidden" name="txtClave">
							<input type="hidden" name="txtOpe">
							<input class="opt" type="submit" name="Submit" value="Borrar" onClick="txtClave.value=<?php  echo $oProveedor->getId_proveedor();?>; txtOpe.value='bp'">
							
							</form>
						</td>
					</tr>
					<?php 
							}//foreach
						}else{
					?>     
					<tr>
						<td colspan="2">No hay datos</td>
					</tr>
					<?php
						}
					?>
			</table>
			<!--<a href="modelo/op/insertar.php" target="" ><img src="img/mas.png"> </a> <br> -->
			<a href="modelo/opProve/insertarP.php" target="" ><img src="img/masP.png"> </a> <br>


					</div>
					</div>

    <?php include "aside.html";?>
    </div>
	
</section>
<?php include 'footer.html'?>
</body>
</html>
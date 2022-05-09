<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../css/style.css" media="screen" title="no title">
<link rel="stylesheet" href="../../css/fondo.css">
    <link rel="stylesheet" href="../../css/prin.css">
    <script type="text/javascript" src="../../js/validaProveedor.js"></script>
<title>Modificar</title>
</head>
<body>
<?php
require ("buscarP.php");
?>
<div class="header">
  <h1>Modificar Proveedor</h1>
</div>

<div class="row">


<div class="col-6">

<form name="formulario" class="mb"action="modificacionP.php" target="" method="POST">
            <input style="display:none;" type=text size=40 name="idBuscar" value="<?php echo $idBuscar;?>">
            <TABLE BORDER="1" ALIGN="CENTER">
                <TR style="background-color:rgba(253, 236, 5, 0.801);" align="center">
                    <TD><strong>Id Proveedor</strong> </TD>
					<TD><input type=text size=40 name="id_nuevo" value="<?php echo $idBuscar;?>" readonly="readonly"> </TD>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);" align="center"><strong>Nombre Proveedor</strong> </TD>
					<TD style="background-color:#fff"><input  type=text size=40 name="nombre_proveedor" value="<?php echo $nombre_proveedor;?>"> </TD>
                </TR>
               
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);" align="center"> <strong>Telefono</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=40 name="telefono" value="<?php echo $telefono;?>"></td>
                </TR>
               
            </TABLE>
            <BR>
                <BR>
            <center> <input id="enviar" class="bt" type=button value="Modificar registro BD" ></center>
            <center> <input class="bt" type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../../Proveedores.php';"> </center>
            
            
        </form>
        
        
</div>

<?php include "../../aside.html";?>


<div class="footer">
  <p>Trigo de Oro SA. de CV.</p>
</div>


</body>
</html>


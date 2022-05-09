<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../css/style.css" media="screen" title="no title">
<link rel="stylesheet" href="../../css/fondo.css">
    <link rel="stylesheet" href="../../css/prin.css">
    <script type="text/javascript" src="../../js/validaProveedor.js"></script>

<title>insertar</title>
</head>
<body>

<div class="header">
  <h1>Inserta Proveedor</h1>
</div>

<div class="row">


<div class="col-6">
<form name="formulario" action="agregarP.php" target="" method="POST">
            <TABLE BORDER="1" ALIGN="CENTER">
            <TR style="background-color:rgba(253, 236, 5, 0.801);">
                    <TD><strong>Id</strong> </TD>
                    <td><input type=text size=4 name="id_proveedor"></td>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Nombre Proveedor</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=40 name="nombre_proveedor"></td>
                </TR>
               
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Telefono</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=40 name="telefono"></td>
                </TR>
                
            </TABLE>
            <BR>
                <BR>
            <center> <input id="enviar" type=button value="Agregar a BD" ></center>
            
            
        </form>
        <form name="abcPH">
        <BR>
            <center> <input type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../../Proveedores.php';"> </center>
        </form>
        
        
</div>

<?php include "../../aside.html";?>




<div class="footer">
  <p>Trigo de Oro SA. de CV.</p>
</div>


</body>
</html>
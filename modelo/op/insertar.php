<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../css/style.css" media="screen" title="no title">
<link rel="stylesheet" href="../../css/fondo.css">
    <link rel="stylesheet" href="../../css/prin.css">
    <script type="text/javascript" src="../../js/validaProducto.js"></script>
<title>insertar</title>
</head>
<body>

<div class="header">
  <h1>Inserta Materia Prima</h1>
</div>

<div class="row">


<div class="col-6">
<form name="formulario" action="agregar.php" target="" method="POST">
            <TABLE BORDER="1" ALIGN="CENTER">
            <TR style="background-color:rgba(253, 236, 5, 0.801);">
                    <TD><strong>Id</strong> </TD>
                    <td><input type=text size=4 name="id_mp"></td>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Nombre Materia</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=40 name="nombre_mp"></td>
                </TR>
               
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Fecha Compra</strong> </TD>
                    <td style="background-color:#fff"><input type=date size=40 name="fecha_compra"></td>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Cantidad</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=40 name="cantidad"></td>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Caducidad</strong> </TD>
                    <td style="background-color:#fff"><input type=date size=40 name="caducidad"></td>
                </TR>
                <TR>
                    <TD style="background-color:rgba(253, 236, 5, 0.801);"><strong>Costo</strong> </TD>
                    <td style="background-color:#fff"><input type=text size=12 name="costo"></td>
                </TR>
                
                
            </TABLE>
            <BR>
                <BR>
            <center> <input id="enviar" type=button value="Agregar a BD" ></center>
           
            
        </form>
        <form name="abcPH">
        <BR>
            <center> <input type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../../materiaprima.php';"> </center>
        </form>
        
        
</div>

<?php include "../../aside.html";?>




<div class="footer">
  <p>Trigo de Oro SA. de CV.</p>
</div>


</body>
</html>



      
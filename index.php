<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="css/prin.css">
    <script type="text/javascript" src="js/validacionLogin.js"></script>
    <title>Login</title>    
</head>
<body>
      <?php include 'header.html';?>
        <form name="formulario" method="post" action="login.php">
        <table align="center">
          <tr><td colspan="2" style="background-color: darkgoldenrod; padding-bottom: 5px; padding-top: 5px;">
          <label>Login</label></td>  </tr>  
          <tr> <td aling="center" rowspan="5"><img src="img/logoTrigoDeOro.png"></td>
               <td> <label>Usuario </label> </td></tr>  
               <tr> <td> <input id="usuario" type="text" name="usuario" placeholder="No caracteres especiales"> </td> </tr>     
          <tr> <td> <label>Contraseña</label> </td> </tr>  
          <tr> <td> <input type="password" name="password" id="password" placeholder="Longitud de 9-11 caracteres"> </td> </tr>
          <tr> <td> <input type="button" id="enviar" value="ingresar"> </td> </tr>
        </table>
    </form>
    <script src="js/validacionLogin.js"></script>
</body>
</html>
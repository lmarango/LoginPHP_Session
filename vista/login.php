<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio sesión</title>
  <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>
<body>
  <center>
    <form action="" method="POST">
      <h4>Login Usuario</h4>
      <fieldset class="inicio-session">
        <label>Nombre de Usuario: </label>
        <input type="text" name="usuario">
        <label>Contraseña: </label>
        <input type="password" name="contrasenia">
        <input class="iniciar-session" type="submit" value="Login">
      </fieldset>
      <?php if(isset($errorLogin)) echo $errorLogin; ?>
    </form>
  </center>
</body>
</html>

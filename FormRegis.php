<!DOCTYPE >
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.google.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="js/verifica.js"></script>

	<title>Formulario</title>
</head>
<body>
   <div class="contenedor-formulario">
  <div class="wrap">
    <form action="registrar.php" class="formulario" name="formulario_registro" method="POST">
      <div>
		 <div id="Info"></div>
        <div class="input-group">
          <input type="text" id="usr" name="usr" onchange="verifica()">
          <label class="label" for="usr">Usurario:</label>
        </div>
         <div class="input-group">
          <input type="text" id="nombre" name="nombre">
          <label class="label" for="nombre">Nombre:</label>
        </div>
        <div class="input-group">
          <input type="number" id="ident" name="ident">
          <label class="label" for="ident">Identificacion:</label>
        </div>
        <div class="input-group">
          <input type="email" id="correo" name="correo">
          <label class="label" for="correo">Correo:</label>
        </div>
        <div class="input-group">
          <input type="password" id="pass" name="pass">
          <label class="label" for="pass">password:</label>
        </div>
        <div class="input-group">
          <input type="password" id="pass2" name="pass2">
          <label class="label" for="pass2">Confirmar password:</label>
        </div>
         <div class="input-group radio">
          <input type="radio" name="tipo" id="jefe" checked="checked" value="Jefe">
          <label for="jefe">Jefe</label>
          <input type="radio" name="tipo" id="empleado" value="Empleado">
          <label for="empleado">Empleado</label>
        </div>
        <input type="submit" id="btn-submit" value="Registrarme">
      </div>
    </form>
     <?php
     $var=htmlspecialchars($_GET["var"]);
     if($var=='si'){
	  echo"<p align='center'>Error el usuario ya existe</p>";
	  }else{
		  if($var=='no'){
	  echo"<p align='center'>las password no coincide</p>";
	  }
	  }
     
     ?>
  </div>
</div>
    <script src="js/formulario.js"></script>
</body>
</html>

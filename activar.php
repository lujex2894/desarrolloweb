
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.google.com/css?family=Roboto" rel="stylesheet" type="text/css">


	<title>Formulario</title>
</head>
<body>
   <div class="contenedor-formulario">
  <div class="wrap">
    <form action="Cactivar.php" class="formulario" name="formulario_registro" method="POST">
      <div>
		 
        <div class="input-group">
          <input type="text" id="usr" name="codigo">
          <label class="label" for="usr">Ingrese codigo de activacion:</label>
        </div>
        <input type="submit" id="btn-submit" value="activar">
      </div>
    </form>
     <?php
     $var=htmlspecialchars($_GET["usr"]);
	    if($var=='r'){
			   echo"<p>Le enviamos un correo con la activacion de la cuenta</p>";
			}else{
				if($var=='f'){
			echo"<p align='center'>Codigo erroneo</p>";
			}
				
				}	
     
     ?>
  </div>
</div>
    <script src="js/formulario.js"></script>
</body>
</html>

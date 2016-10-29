<?php
$id=$_POST['ident'];
$nom=$_POST['nombre'];
$esta='false';
$usr=$_POST['usr'];
$pass=$_POST['pass'];
$mail=$_POST['correo'];
$pass2=$_POST['pass2'];
$tipo=$_POST['tipo'];
$usrmd5=md5($usr);
$gravatar=md5($mail);
 if (strcmp($pass, $pass22) !== 0) {
    //Conectando y seleccionado la base de datos  
  error_reporting(-1);
ini_set("display_errors", "On");
//phpinfo();
$pass2 = "123postgres";
$conecxion = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_Desarrollo user=desarrollo2016_postgres password=$pass2");
if (!$conecxion) {
  echo "An error occurred.\n";
  exit;
}
 
    $consul = "select * from formulario where usuario = '".$usr."'";
	$results = pg_query($conecxion, $consul) or die('fail');
	
	if(pg_num_rows(@$results) > 0) // not available
	{
		header("location:FormRegis.php?var=si");
	}
	else
	{
$sql = "INSERT INTO formulario (usuario,correo,pasword,gravatar,identificacion,nombre,estado,tipo,md5usr) VALUES('".$usr."','".$mail."','".$pass."','".$gravatar."','".$id."','".$nom."','".$esta."','".$tipo."','".$usrmd5."')";
    pg_query($conecxion, $sql)or die('Error al insertar');
    
// El mensaje
$mensaje = "Para vaidar tu cuenta debes de ingresar el siguiente codigo: ".$usrmd5."\r\n En la siguiente diereccion\r\nhttp://desarrollo2016.hostingfacil.co/activar.php";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail($mail, 'Confirmar cuenta', $mensaje);

    
    
    header("location:activar.php?usr=r");
   
	
}
    
  
}else{

	header("location:index.php?var=no");
}
	
	
 pg_close($conecxion);
?>

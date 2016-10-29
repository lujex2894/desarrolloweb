<?php
$codigo=$_POST['codigo'];
   //Conectando y seleccionado la base de datos
	error_reporting(-1);
ini_set("display_errors", "On");
//phpinfo();
$pass = "123postgres";
$conecxion = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_Desarrollo user=desarrollo2016_postgres password=$pass");
if (!$conecxion) {
  echo "An error occurred.\n";
  exit;
}
     
    $consul = "select * from formulario where md5usr = '".$codigo."'";
	$results = pg_query($conecxion, $consul) or die('fail');
	
	if(pg_num_rows(@$results) > 0){
		
    $update = "UPDATE formulario set estado='true' where md5usr = '".$codigo."'";
	$resul = pg_query($conecxion, $update) or die('fail');
	header("location:index.php");
	}else{
	 header("location:activar.php?usr=f");
	}
?>

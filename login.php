<?php

$esta='true';
$usr=$_POST['usuario'];
$pass=$_POST['password'];
$tipo=$_POST['tipo'];
$passconfig= trim($pass);
 if (empty($passconfig)) {
	 echo "<script>alert('Ingrese una password')</script>";
    header("location:index.php?"); 
    
 
}else{

   error_reporting(-1);
ini_set("display_errors", "On");
//phpinfo();
$pass2 = "123postgres";
$conecxion = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_Desarrollo user=desarrollo2016_postgres password=$pass2");
if (!$conecxion) {
  echo "An error occurred.\n";
  exit;
}
     
    $consul = "select * from formulario where usuario = '".$usr."' and pasword = '".$pass."' and estado = '".$esta."' and tipo='".$tipo."'";
	$results = pg_query($conecxion, $consul) or die('fail');
	
	if(pg_num_rows(@$results) > 0) // not available
	{
		
		header("location:perfil.php?usr=".$usr."");
}else{

	$consul2 = "select * from formulario where usuario = '".$usr."' and pasword = '".$pass."'";
	$results2 = pg_query($conecxion, $consul2) or die('fail');
	
	if(pg_num_rows(@$results2) > 0){
		
		header("location:index.php?usr=yes");
	}else{
	$consul3 = "select * from formulario where usuario = '".$usr."'";
	$results3 = pg_query($conecxion, $consul3) or die('fail');
	
	if(pg_num_rows(@$results3) > 0){
		header("location:index.php?usr=no");
	}else{
		header("location:index.php?usr=f");
		}
	}
		  
    }
    
}
	
	
 pg_close($conecxion);
?>

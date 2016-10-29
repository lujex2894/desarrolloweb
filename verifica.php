<?php
sleep(1);
error_reporting(-1);
ini_set("display_errors", "On");
//phpinfo();
$pass = "123postgres";
$conecxion = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_Desarrollo user=desarrollo2016_postgres password=$pass");
if (!$conecxion) {
  echo "An error occurred.\n";
  exit;
}

if($_REQUEST)
{
	$username 	= $_REQUEST['usr'];
	$query = "select * from formulario where usuario = '".strtolower($username)."'";
	$results = pg_query($conecxion, $query) or die('fail');
	
	if(pg_num_rows(@$results) > 0) // not available
	{
		echo '<div class="info" id="Error">Usuario ya existente</div>';
		
	}
	else
	{
		echo '<div class="info" id="Success">Disponible</div>';
	}
	
}?>

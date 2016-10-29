<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.google.com/css?family=Roboto" rel="stylesheet" type="text/css">
	<title>PERFIL</title>
</head>
<body>
<h1>Perfil del Usuario</h1>
 <?php 
$usr=$_GET['usr'];
error_reporting(-1);
ini_set("display_errors", "On");
//phpinfo();
$pass = "123postgres";
$conecxion = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_Desarrollo user=desarrollo2016_postgres password=$pass");
if (!$conecxion) {
  echo "An error occurred.\n";
  exit;
}   
$query = "select * from formulario where usuario = '".$usr."'";
$result = pg_query($conecxion,$query) or die('Query failed: ' . pg_last_error());

$rows = pg_numrows($result);

echo"<div class='container'>";
echo "<img class='avatar avatar-70 grav-hashed grav-hijack alignleft' id='img'"; 
echo "id='grav-1465a431df9b656bf373d4d35ad406ea-0' ";

//mostrar los datos
for($i=1;$i<=$rows; $i++){
$line = pg_fetch_array($result, null, PGSQL_ASSOC);

echo "src='https://s.gravatar.com/avatar/$line[gravatar]'";
echo "<h2></h2>";
echo "<h2 id='biem'>Bienvenido: $line[nombre]</h2>";
echo "<h2>Es Usted: $line[tipo] de CrediApp</h2>";
echo "<h2>Usuario: $line[usuario]</h2>";
echo "<h2>Email: $line[correo]</h2>";
echo "</div>";
}



// Free resultset
pg_free_result($result);
// Closing connection
pg_close($conecxion);
?> 

<button id="btn" onclick="window.location.href='index.php'">Inicio</button>
</body>
</html>

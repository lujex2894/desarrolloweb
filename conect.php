
<?php
// Conectando y seleccionado la base de datos  
   $conecxion= pg_connect("host=localhost dbname=Desarrollo user=postgres password=postgres")
    or die('No se ha podido conectar: ' . pg_last_error());
<?

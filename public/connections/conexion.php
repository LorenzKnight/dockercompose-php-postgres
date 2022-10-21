<?php
$conn_host    = ' host=pgdb'; //container's name instead for "localhost" 
$conn_port    = ' port=5432';
$conn_dbname  = ' dbname=ratedb';
$conn_user    = ' user=admin';
$conn_pass    = ' password=Admin456';

$sql = pg_connect($conn_host . $conn_port . $conn_dbname . $conn_user . $conn_pass);
if ($sql == false) {
  echo "sql connection error!";
  exit();
}

if (is_file("inc/functions.php")) 
    include("inc/functions.php"); 
else
{
    include("./inc/functions.php");
}

// simple check
// $query = "select * from users";
// $sql = pg_query($query);
// $result = pg_fetch_all($sql);

// var_dump($result);
?>

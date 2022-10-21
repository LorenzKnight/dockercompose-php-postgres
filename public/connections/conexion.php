<?php
$conn_host = ' host=pgdb'; //container's name instead for "localhost" 
$conn_port = ' port=5432';
$conn_dbname = ' dbname=ratedb';
$conn_user = ' user=admin';
$conn_pass = ' password=Admin456';

$db = pg_connect($conn_host . $conn_port . $conn_dbname . $conn_user . $conn_pass);
if ($db == false) {
  echo "sql connection error!";
  exit();
}

// simple check
$result = pg_query($db, "select * from users");
var_dump(pg_fetch_all($result));
?>

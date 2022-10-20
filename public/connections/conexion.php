<?php
$conn_host = ' host=127.0.0.1';
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
// $conn = pg_connect($connStr);
// $result = pg_query($conn, "select * from users");
// var_dump(pg_fetch_all($result));
?>

<?php
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $connStr = "host=localhost port=5432 dbname=ratedb user=postgres password=Admin456 ";


  //simple check
  $conn = pg_connect($connStr);
  $result = pg_query($conn, "select * from users");
  var_dump(pg_fetch_all($result));
?>

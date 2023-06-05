<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "mynotescode";
  $connection = mysqli_connect($host, $username, $password, $database);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
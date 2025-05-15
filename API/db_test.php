<?php
  header("Content-Type: application/json");
  header("Access-Control-Allow-Origin: *");
  
  include 'database.php';
  include 'test_connection.php';

  $database = new Database();
  $db = $database->getConnection();

  $test = new DbTest($db);

  echo json_encode($test->checkConnection());
  
?>
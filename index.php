<?php

  require_once 'config.php';

  $stmt = $con->prepare("SELECT * FROM customers");
  $stmt->execute();
  $rows = $stmt->fetchAll();

  $output = [];
  foreach ($rows as $row ) {

    $output[] = $rows;

  }

  echo json_encode($output);
 ?>

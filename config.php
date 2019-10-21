<?php

$dsn    = 'mysql:host=localhost;dbname=learn_laravel';
$user   = 'root';
$pass   = '';
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
      $con = new PDO($dsn, $user, $pass, $option);
      $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo '<h3 class="text-center text-danger">  نأسف حدث خطأ اثناء الاتصال , برجاء المحاولة لاحقاً </h3>';
  exit();
}

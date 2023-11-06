<?php

   $db_name = 'mysql:host=localhost;dbname=database_course';
   $user_name = 'root';
   $user_password = 'Linh2051120137?';

   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

// $host = "localhost";
// $username = "root";
// $password = "Linh2051120137?";
// $dbname = "store_data_form";

// $conn = new mysqli($host, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Error connecting to: " . $conn->connect_error);
// }
// else{
    
// }




?>
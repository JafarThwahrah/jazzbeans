<?php

     try {
         $host = "localhost";
         $user = "root";
         $pwd = "root";
         $dbname = "jazzbeans";
         $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);

         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $dbh;
     } catch (PDOException) {
         // echo "error404.html";
         die();
     }

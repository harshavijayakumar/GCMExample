<?php
$dbName = "mysql";
$user = "root";
$pwd = "";
$host = "localhost";
$cnn = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $pwd);
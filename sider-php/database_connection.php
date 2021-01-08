<?php

//database_connection.php

$connect = new PDO("mysql:localhost;dbname=bilka", "root", "");
$connect->exec("set names utf8");
?>

<?php

//database_connection.php

$connect = new PDO("mysql:host=mysql13.unoeuro.com;dbname=tulanng_dk_db_bilka", "tulanng_dk", "converse1125");
$connect->exec("set names utf8");
?>

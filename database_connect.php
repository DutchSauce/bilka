<?php

$host = '127.0.0.1';
$username = 'root';
$password = 'root';

//åbner database forbindelsen
//$conn = new PDO('mysql:host=localhost;dbname=bilka_data', "root", "");

//arbejder med databasen
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=bilkadata', 'root', 'root');


} catch (PDOException $e) {
    print "Error! Database connections broken: " . $e->getMessage() . "<br/>";
    die();
}

//Lukker forbindelsen til databasen
//$conn = null;
 ?>

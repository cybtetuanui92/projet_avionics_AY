<?php
// $host = 'localhost';
// $database = 'avionics';
// $user = 'root';
// $password = '';


try {
    $db = new PDO("mysql: host=localhost; dbname=avionics", "root", "**_****_**_***");
    echo "Bravo vous etes conneter à la base de données";
} catch (PDOException $exception) {
  echo "Vous n'etes pas connecter à la base de données" . $exception->getMessage();
}






?>

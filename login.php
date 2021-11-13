<?php

 $host = "127.0.0.1:3306";
 $database = "site";
 $username = "root";
 $password = "lol90";


 $email = $_POST('email');
 $password = $_POST('password');


 print($email);

try {
    $db = new \PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
} catch (\PDOException $e) {
    throw $e;
}

?>
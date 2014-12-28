<?php
require_once(__DIR__ . '/dsn.php');

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=exper", $username, $password);
    echo "connected to database\n";
    $count = $dbh->exec("INSERT INTO exper.animals (animal_type, animal_name) values ('some', 'dog')");
    echo $count;

    $dbh = null;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

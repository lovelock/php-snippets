<?php
require_once(__DIR__ . '/dsn.php');

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=exper",$username, $password);
    $a = 'dog';
    $sql = "update animals set animal_name = 'cat' where animal_type = 'some'";

    $count = $dbh->exec($sql);
    echo $count;

    $dbh = null;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

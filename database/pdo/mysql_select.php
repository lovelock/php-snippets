<?php
require_once(__DIR__ . '/dsn.php');

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=exper",$username, $password);
    $a = 'dog';
    $sql = "SELECT * from animals";

    $stmt = $dbh->query($sql);
    // $result = $stmt->fetchAll();
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $result = $stmt->fetchAll(PDO::FETCH_NUM);
    // $result = $stmt->fetchAll(PDO::FETCH_BOTH);
    // print_r($result);

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    echo $result->animal_type . "\n";
    echo $result->animal_name . "\n";

    /*
     * foreach ($dbh->query($sql) as $row) {
     *     echo $row['animal_type'] . ' - ' . $row['animal_name'] . "\n";
     * }
     */

    $dbh = null;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

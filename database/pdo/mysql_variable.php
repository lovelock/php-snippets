<?php
require_once(__DIR__ . '/dsn.php');

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=exper", $username, $password);
    echo 'Connected to database' . "\n";
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $animal_id = 6;
    $animal_name = 'bruce';

    $stmt = $dbh->prepare("SELECT * FROM animals WHERE animal_id = :animal_id AND animal_name = :animal_name");

    $stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
    $stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR, 5);

    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo $row['animal_id'] . "\n";
        echo $row['animal_type'] . "\n";
        echo $row['animal_name'] . "\n";
    }

    $animal_id = 3;
    $animal_name = 'bruce';

    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo $row['animal_id'] . "\n";
        echo $row['animal_type'] . "\n";
        echo $row['animal_name'] . "\n";
    }

    $animal_id = 7;
    $animal_name = 'bruce';

    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo $row['animal_id'] . "\n";
        echo $row['animal_type'] . "\n";
        echo $row['animal_name'] . "\n";
    }

    $dbh = null;
} catch (PDOException $ex) {
    echo $ex->getMessage();

}

<?php
try {
    $db = new PDO("sqlite:memory");
    echo 'database created in memory';
} catch (PDOException $e) {
    echo $e->getMessage();
}

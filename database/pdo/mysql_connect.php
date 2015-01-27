<?php
/*
 * old way
 * $link = mysql_connect('localhost', 'root', '1');
 * mysql_select_db('cookbook', $link);
 * mysql_set_charset('UTF-8', $link);
 */

// pdo way
$db    = new PDO('mysql:host=127.0.0.1;dbname=ajax;charset=utf8', 'root', '1');
echo "PDO connection object created";

function getData($db, $city, $state)
{
    $sql = "select zipcode from geography where city = '北京' AND state = '北京'";
    $stmt   = $db->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

$zipcode = getData($db, $city, $state);
print_r($zipcode);

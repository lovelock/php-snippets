<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://ip.taobao.com/service/getIpInfo.php?ip=114.112.95.50");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

curl_close($ch);

print_r(json_decode($output));
?>

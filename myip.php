<?php
header('Content-Type: application/json');
$ip = file_get_contents('https://api.ipify.org');
echo json_encode(['my_server_ip' => $ip]);
?>

<?php
/*
 * provider 2 database settings
 */
$host = "localhost";
$database = "agency";
$dbusername = "root";
$dbpassword = "root";


$pdo = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8mb4', $dbusername, $dbpassword);
$stmt = $pdo->query("SELECT * FROM tours");
$results =  $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Content-Type: application/json');
echo json_encode($results);
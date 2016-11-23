<?php
/*
 * provider 1 database settings
 */
$host = "localhost";
$database = "biuro";
$dbusername = "root";
$dbpassword = "root";


$pdo = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8mb4', $dbusername, $dbpassword);
$stmt = $pdo->query("SELECT * FROM oferty");
$results =  $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Content-Type: application/json');
echo json_encode($results);
<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'veterinaria';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;"$dueño, $mascotas,$medicionas,$tipo,$veterinario);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
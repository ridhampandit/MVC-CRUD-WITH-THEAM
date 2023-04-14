<?php

$host = 'localhost';
$dbname = 'mydatabase2';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch(PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}
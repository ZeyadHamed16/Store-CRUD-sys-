<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "web_store";

try {
    $conn = mysqli_connect($host, $username, $password, $database);
} catch (Exception $e) {
    echo $e->getMessage();
}

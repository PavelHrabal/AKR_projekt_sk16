<?php
$conn = new mysqli("localhost", "ubuntu", "ubuntu", "testdb");
if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}
?>

<?php
$host = 'localhost:3300';
$user = 'root';
$pass = '';
$db = 'btth01_cse485';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('connect failed');
}
?>

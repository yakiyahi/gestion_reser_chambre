<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "gest_reserve_chambre";

$conn = mysqli_connect($server_name, $user_name, $password, $dbname);

if (!$conn) {
    die(" Impossible de se connecter au server" . mysqli_connect_errno());
}

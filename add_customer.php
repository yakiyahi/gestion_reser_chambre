<?php
include("connect.php");

if (isset($_POST)) {

    global $conn;

    $name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];

    $empty = $name == '' || $last_name == '' || $address == '' || $phone == '' || $nationality == "";

    if (!$empty) {
        try {
            $query = "INSERT INTO `client` (`Id_client`, `Nom_client`, `Prenom_client`, `Address_client`, `Email_client`,
        `Telephone_client`, `Nation_client`) VALUES (NULL, '$name', '$last_name', '$address', '$email', '$phone', '$nationality')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "Aout effectué avec success";
                header('location:list_customer.php');
            } else {
                echo "Impossible d'ajouter ce client";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    } else {
        echo "Les données sont vide";
    }
}

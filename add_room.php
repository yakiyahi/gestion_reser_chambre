<?php
include("connect.php");

if (isset($_POST)) {

    global $conn;

    $id = $_POST['id'];
    $type = $_POST['type'];
    $etage = $_POST['etage'];
    $prix = $_POST['prix'];
    $dispo = $_POST['dispo'];

    $empty = $id == '' || $type == '' || $etage == '' || $prix == '' || $dispo == "";

    if (!$empty) {
        try {
            $query = "INSERT INTO `chambre` (`Id_chambre`, `Type_chambre`, `Etage_chambre`, `Prix_chambre`, `Disp_chambre`) VALUES ('$id', '$type', '$etage', '$prix', '$dispo')";
            $result = mysqli_query($conn, $query);

            $message = "SUCCESS";
            $error =  "ERROR";

            if ($result) {

                echo $message;
            } else {
                echo $error;
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo $error;
        }
    } else {
        echo "Veillez saisir tous les champs";
    }
}

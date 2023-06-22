<?php
include('connect.php');

$db = $conn;

function list_customer()
{
    global $db;
    $query = "SELECT * FROM hotel ORDER BY Id_hotel DESC";

    $exec = mysqli_query($db, $query);

    if (mysqli_num_rows($exec) > 0) {
        $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;
    } else {
        return $row = [];
    }
}
echo ' <div class="container">
<div class="message"></div>
<div class="card" style="margin-top:10px;">
    <h3 class="card-header bg-primary text-light text-center text-lg"><b>Liste des client</b> </h3>
    <div class="card-body">';
echo ' <div style="margin-top:10px;margin-left:10px"> 
<table class="table table-hover text-center" id="table" >
        <thead class="table-dark">
            <tr>
                <th>Identifiant Hotel</th>
                <th>Nom Hotel</th>
                <th>Address Hotel</th>
                <th>Ville Hotel</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> ';

$customer = list_customer();
if (count($customer) > 0) {
    $sn = 1;
    foreach ($customer as $data) {
        echo '<tr>
                        <td>' . $data["Id_hotel"] . ' </td>
                        <td>' . $data["Nom_hotel"] . ' </td>
                        <td>' . $data["Address_hotel"] . '</td>
                        <td>' . $data["Ville_hotel"] . '</td>
                
                        <td>
                            <a href="" id="edit_hotel" idd="' . $data["Id_hotel"] . ' " onclick="edit_hotel(\'idd\')"> <i class="fa fa-edit" style="color:red"></i></a>
                            <a href="delete_hotel.php?id=' . $data["Id_hotel"] . '"> <i class="fa fa-trash"></i></a>
                        </td> 
                    </tr>';
    }
    $sn++;
} else {
    echo '<tr>
                <td colspan="7">Aucune donnée Trrouvée</dt>
                </tr>';
}

echo '</tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</div>';

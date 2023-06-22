<?php
include('connect.php');

$db = $conn;

function list_customer()
{
    global $db;
    $query = "SELECT * FROM client ORDER BY Id_client DESC";

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
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Nationnalité</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> ';

$customer = list_customer();
if (count($customer) > 0) {
    $sn = 1;
    foreach ($customer as $data) {
        echo '<tr>
                        <td>' . $data["Id_client"] . ' </td>
                        <td>' . $data["Nom_client"] . ' </td>
                        <td>' . $data["Prenom_client"] . '</td>
                        <td>' . $data["Address_client"] . '</td>
                        <td>' . $data["Email_client"] . '</td>
                        <td>' . $data["Telephone_client"] . '</td>
                        <td>' . $data["Nation_client"] . '</td>
                        <td>
                            <a href="#" id="edit_custom" onclick="edit_customer(' . $data["Id_client"] . ')"> <i class="fa fa-edit" style="color:red"></i></a>
                            <a href="#" onclick="delete_customer(' . $data["Id_client"] . ')"> <i class="fa fa-trash"></i></a>
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
</div>
';

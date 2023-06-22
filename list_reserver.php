<?php
include('connect.php');

$db = $conn;

function list_reserv()
{
    global $db;
    $query = "select reserver.Id_reserver, client.Nom_client,chambre.Id_chambre,reserver.Date_arriver,reserver.Date_fin from client,reserver,chambre where
     client.Id_client=reserver.Id_client and chambre.Id_chambre=reserver.Id_reserver ";

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
<div class="card" style="margin-top:10px">
    <h3 class="card-header bg-primary text-light text-center text-lg"><b>Liste des reservations</b> </h3>
    <div class="card-body">';
echo ' <div style="margin-top:10px;margin-left:10px"> 
<table class="table table-hover text-center" id="table" >
        <thead class="table-dark">
            <tr>
                <th>Numero de reservation</th>
                <th>Nom de du client</th>
                <th>Numero du chambre</th>
                <th>Date d\'arriver</th>
                <th>Date de sorti</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> ';

$reserv = list_reserv();
if (count($reserv) > 0) {
    $sn = 1;
    foreach ($reserv as $data) {
        echo '<tr>
                        <td>' . $data["Id_reserver"] . ' </td>
                        <td>' . $data["Nom_client"] . ' </td>
                        <td>' . $data["Id_chambre"] . '</td>
                        <td>' . $data["Date_arriver"] . '</td>
                        <td>' . $data["Date_fin"] . '</td>
                        <td>
                            <a href="" id="edit_reserver" idd="' . $data["Id_reserver"] . ' " onclick="edit_reserver(\'idd\')"> <i class="fa fa-edit" style="color:red"></i></a>
                            <a href="delete_reserver.php?id=' . $data["Id_reserver"] . '"> <i class="fa fa-trash"></i></a>
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

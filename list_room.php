<?php
include('connect.php');

$db = $conn;

function list_rooms()
{
    global $db;
    $query = "SELECT * from chambre Order by Id_chambre DESC ";

    $exec = mysqli_query($db, $query);

    if (mysqli_num_rows($exec) > 0) {
        $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;
    } else {
        return $row = [];
    }
}
echo ' <div class="container">
<div id="message"></div>
<div class="card" style="margin-top:10px;">
    <h3 class="card-header bg-primary text-light text-center text-lg"><b>Liste des chambres</b> </h3>
    <div class="card-body">';
echo ' <div style="margin-top:10px;margin-left:10px"> 
<table class="table table-hover text-center" id="table" >
        <thead class="table-dark">
            <tr>
                <th>Numero du chambre</th>
                <th>Type de chambre</th>
                <th>Etage du chambre</th>
                <th>Prix du chambre en FC</th>
                <th>Disponibilité du chambre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> ';

$rooms = list_rooms();
if (count($rooms) > 0) {
    $sn = 1;
    foreach ($rooms as $data) {
        echo '<tr>
                        <td>' . $data["Id_chambre"] . ' </td>
                        <td>' . $data["Type_chambre"] . '</td>
                        <td>' . $data["Etage_chambre"] . '</td>
                        <td>' . $data["Prix_chambre"] . ' Fc</td>
                        <td>' . $data["Disp_chambre"] . '</td>
                        <td>
                            <a href="" id="edit_room" idd="' . $data["Id_chambre"] . ' " onclick="edit_room(\'idd\')"> <i class="fa fa-edit" style="color:red"></i></a>
                            <a href="delete_room.php?id=' . $data["Id_chambre"] . '"> <i class="fa fa-trash"></i></a>
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

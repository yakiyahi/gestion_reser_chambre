$(document).ready(

    $("#listcli").click(function (e) {
        e.preventDefault();
    }),
    $("#listhotel").click(function (e) {
        e.preventDefault();
        fech_hotel();
    }),
    $("#listroom").click(function (e) {
        e.preventDefault();
        fech_room();
    }),
    $("#listreserv").click(function (e) {
        e.preventDefault();
        fech_reserv();
    }),

)
function fech_customer() {
    $.ajax({
        url: "/gestion_reser_chambre/list_customer.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },
        error: function () {
            console.log("La requete demandée est échoué");
        },
    });
}

function new_customer() {

    $.ajax({
        url: "/gestion_reser_chambre/add_customer_form.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },

    });
}
function new_room() {

    $.ajax({
        url: "/gestion_reser_chambre/add_room_form.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },

    });
}
function new_reserv() {

    $.ajax({
        url: "/gestion_reser_chambre/add_reserver_form.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },

    });
}
function save_cust() {
    //On recupere les informations saisis par l'utilisateur
    var name = $("#name").val();
    var lastname = $("#lastname").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var nationality = $("#nationality").val();

    //On verifie si on a remplit tous les champs
    var empty = name == "" || lastname == "" || address == "" || phone == "" || nationality == "";
    console.log(empty);
    if (empty) {
        //Si les champs sont vide alors on affiche cette message
        alert("veillez saisir tous les champs");
    } else {
        $.ajax({
            url: "/gestion_reser_chambre/add_customer.php",
            type: "POST",
            dataType: "html",
            data: { name: name, lastname: lastname, address: address, phone: phone, email: email, nationality: nationality },
            success: function (data) {

                $("#main").html(data);
                alert("Operation effectuée avec succée");

            },

        });
    }
}

function edit_customer(id) {
    alert(id);
}
function fech_hotel() {
    $.ajax({
        url: "/gestion_reser_chambre/list_hotel.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },
        error: function () {
            console.log("La requete demandée est échoué");
        },
    });
}
function fech_room() {
    $.ajax({
        url: "/gestion_reser_chambre/list_room.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },
        error: function () {
            console.log("La requete demandée est échoué");
        },
    });
}
function fech_reserv() {
    $.ajax({
        url: "/gestion_reser_chambre/list_reserver.php",
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#main").html(data);

        },
        error: function () {
            console.log("La requete demandée est échoué");
        },
    });
}


function save_room() {
    //On recupere les informations saisis par l'utilisateur
    var id = $("#id").val();
    var type = $("#type").val();
    var etage = $("#etage").val();
    var prix = $("#prix").val();
    var dispo = $("#dispo").val();

    //On verifie si on a remplit tous les champs
    var empty = id == "" || type == "" || etage == "" || prix == "" || dispo == '';

    if (empty) {
        //Si les champs sont vide alors on affiche cette message
        //alert("veillez saisir tous les champs");
        var msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:30px">\
        <strong>Atention !</strong> Veillez saisir tous les champs.\
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
        $(".message").html(msg);

    } else {
        var mydata = { id: id, type: type, etage: etage, prix: prix, dispo: dispo };

        $.ajax({
            url: "/gestion_reser_chambre/add_room.php",
            type: "POST",
            data: mydata,
            success: function (data) {
                if (data == "SUCCESS") {
                    var msg = '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:30px">\
                    <strong>MESSAGE !</strong> L\'operation a été effectuée avec succée.\
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';

                    $("#id").val('');
                    $("#type").val('');
                    $("#etage").val('');
                    $("#prix").val('');
                    $("#dispo").val('');

                } else if (data == "EXISTE") {
                    var msg = '<div class="alert alert-error alert-dismissible fade show" role="alert" style="margin-top:30px">\
                    <strong>Attention !</strong> Le numero du chambre saisis existe deja.\
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
                }
                else {
                    var msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:30px">\
                    <strong>Erreur!</strong> La requete demandé a echouée.\
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                      <span aria-hidden="true">&times;</span>\
                    </button>\
                  </div>';
                }

                $(".message").html(msg);

                //fech_room();
                //alert(data);

            },


        });
    }
}
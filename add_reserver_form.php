<div class="container">
    <div class="message"></div>
    <div class="card" style="margin-top:50px;margin-right:15px;margin-left:15px;">
        <h5 class="card-header bg-primary text-light text-center text-lg"><b>Ajouter une nouvelle reservation</b> </h5>
        <div class="card-body">
            <form id="edit-form" ">
            <div class=" row">
                <div class=" col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="id_cli">Numero du client</label>
                        <input class="form-control " type="text" name="id_cli" placeholder="Numero du client" id="id_cli">
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="num_chamb">Numero de chambre</label>
                        <input class="form-control " type="text" name="num_chamb" placeholder="Type de chambre" id="num_chamb">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="date_ar">Date d'arriver</label>
                        <input class="form-control " type="date" name="date_ar" placeholder="Date d'arriver" id="date_ar">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="date_sort">Date de sorti</label>
                        <input class="form-control " type="date" name="date_sort" placeholder="Prix du chambre" id="date_sort">
                    </div>
                </div>

        </div>
    </div>
    <div class="row" style="margin-top:15px;margin-bottom:15px">
        <div class="col-md-6">
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg text-center save_room" id="save_reserv" onclick="save_reserv()" style="margin-right:20px ;"> <i class="fas fa-save"></i> Enregistrer</button>
                <button type="button" class="btn btn-secondary btn-lg text-center" id="save_room" onclick="fech_reserv()"> <i class="fas fa-close"></i> Annuler</button>
            </div>

        </div>
    </div>
    </form>
</div>
</div>
</div>
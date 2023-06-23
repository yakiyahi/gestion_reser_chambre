<div class="container">
    <div class="message"></div>
    <div class="card" style="margin-top:50px;margin-right:15px;margin-left:15px;">
        <h5 class="card-header bg-primary text-light text-center text-lg"><b>Ajouter une nouvelle chambre</b> </h5>
        <div class="card-body">
            <form action="update.php" id="edit-form" ">
            <div class=" row">
                <div class=" col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="id">Numero du chambre</label>
                        <input class="form-control " type="text" name="id" placeholder="Numero du chambre" id="id">
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="type">Type de chambre</label>
                        <input class="form-control " type="text" name="type" placeholder="Type de chambre" id="type">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="etage">Etage du chambre</label>
                        <input class="form-control " type="text" name="etage" placeholder="Etage du chambre" id="etage">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="prix">Prix du chambre</label>
                        <input class="form-control " type="number" name="prix" placeholder="Prix du chambre" id="prix">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;padding-right:10px;">
                        <label for="dispo">Disponibilité du chambre</label>
                        <select name="dispo" class="form-control" id="dispo">
                            <option value="OUI">OUI</option>
                            <option value="NON">NON</option>
                        </select>
                    </div>
                </div>

        </div>
    </div>
    <div class="row" style="margin-top:15px;margin-bottom:15px">
        <div class="col-md-6">
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg text-center save_room" id="save_room" onclick="save_room()" style="margin-right:20px ;"> <i class="fas fa-save"></i> Enregistrer</button>
                <button type="button" class="btn btn-secondary btn-lg text-center" id="save_room" onclick="fech_room()"> <i class="fas fa-close"></i> Annuler</button>
            </div>

        </div>
    </div>
    </form>
</div>
</div>
</div>
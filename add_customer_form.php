<div class="container">
    <div class="message"></div>
    <div class="card" style="margin-top:50px;margin-right:15px;margin-left:15px;">
        <h5 class="card-header bg-primary text-light text-center text-lg"><b>Ajout d'un nouveau Client</b> </h5>
        <div class="card-body">
            <form action="update.php" id="edit-form" ">
                <div class=" row">
                <div class=" col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="name">Nom du Client</label>
                        <input class="form-control " type="text" name="name" placeholder="Nom du Client" id="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="lastname">Prenom du Client</label>
                        <input class="form-control " type="text" name="lastname" placeholder="Prenom du Client" id="lastname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;">
                        <label for="address">Address du Client</label>
                        <input class="form-control " type="text" name="address" placeholder="Address du Client" id="address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-bottom:30px;padding-right:10px;">
                        <label for="email">Email du Client</label>
                        <input class="form-control " type="text" name="email" placeholder="Email du Client" id="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"">
                        <label for=" phone">Telephone du Client</label>
                        <input class="form-control " type="text" name="phone" placeholder="Numero de telephone du Client" id="phone">
                    </div>
                </div>
                <div class="col-md-6"">
                    <div class=" form-group">
                    <label for="nationality">Nationalité du Client</label>
                    <input class="form-control " type="text" name="nationality" placeholder="Nationalité du Client" id="nationality">
                </div>
        </div>
    </div>
    <div class="row" style="margin-top:15px;margin-bottom:15px">
        <div class="col-md-6">
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg text-center save_customer" id="save_customer" onclick="save_cust()" style="margin-right:20px ;"> <i class="fas fa-save"></i> Enregistrer</button>
                <button type="button" class="btn btn-secondary btn-lg text-center" id="save_customer" onclick="fech_customer()"> <i class="fas fa-close"></i> Annuler</button>
            </div>

        </div>
    </div>
    </form>
</div>
</div>
</div>
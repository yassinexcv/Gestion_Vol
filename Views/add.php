<?php
if(isset($_POST['submit'])){
    $newVol = new VolController();
    $newVol->AddVol();   
}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header">Ajouter un Vol</div>
                <div class="card-header">
                    <div class="card-body bg-light ">
                        <a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>

                        <form method="post">
                            <!-- <div class="mb-3">
                                <label for="idVol" class="form-label">Num Vol*</label>
                                <input type="number" name="idVol" class="form-control" placeholder="id">
                            </div> -->
                            <div class="mb-3">
                                <label for="LieuDepart" class="form-label">LieuDepart</label>
                                <select class="form-control" name="LieuDepart">
                                    <option value="Casa">Casa</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="errachidia">errachidia</option>
                                    <option value="essaouira">essaouira</option>
                                    <option value="laayoun">laayoun</option>
                                    <option value="dakhla">dakhla</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="LieuArrivé" class="form-label">LieuArrivé</label>
                                <select class="form-control" name="LieuArrivé">
                                  
                                    <option value="Casa">Casa</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Merakech">Merakech</option>
                                    <option value="errachidia">errachidia</option>
                                    <option value="essaouira">essaouira</option>
                                    <option value="laayoun">laayoun</option>
                                    <option value="dakhla">dakhla</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="DateDepart" class="form-label">DateDepart</label>
                                <input type="datetime-local" name="DateDepart" class="form-control" placeholder="DateDepart">
                            </div>
                            <div class="mb-3">
                                <label for="DateDepart" class="form-label">DateArrive</label>
                                <input type="datetime-local" name="DateArrive" class="form-control" placeholder="DateArrive">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="DateArrive" class="form-label">DateArrive</label>
                                <input type="date" name="DateArrive" class="form-control" placeholder="DateArrive">
                            </div> -->
                            <div class="mb-3">
                                <label for="NbPlace" class="form-label">NbPlace</label>
                                <input type="number" name="NbPlace" class="form-control" placeholder="NbPlace">
                            </div>
                            <div class="mb-3">
                                <label for="Prix" class="form-label">Prix</label>
                                <input type="number" name="Prix" class="form-control" placeholder="Prix">
                            </div>
                            <div class="mb-3">
                                <label for="choix" class="form-label">choix</label>
                                <select class="form-control" name="choix">
                                    <option value="0">Aller-simple</option>
                                    <option value="1">Aller-retour</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Valider</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
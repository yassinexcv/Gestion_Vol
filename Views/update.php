<?php
if(isset($_POST['idVol'])){
    $exitVol = new VolController();
    $vol=$exitVol->getOneVol();
    // die(print_r($vol['LieuDepart']));
}else{
    Redirect::to('home');
}
if(isset($_POST['submit'])){
    $exitVol = new VolController();
    $exitVol->UpdateVol();
    // die(print_r($vol['LieuDepart']));
}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header">Modefier un Vol</div>
                <div class="card-header">
                    <div class="card-body bg-light ">
                        <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>

                        <form method="post">
                            <!-- <div class="mb-3">
                                <label for="idVol" class="form-label">Num Vol</label>
                                <input type="number" name="idVol" class="form-control" value="<?php // echo $vol->idVol;?>">
                            </div> -->
                            <div class="mb-3">
                                <label for="LieuDepart" class="form-label">LieuArrivé</label>
                                <input type="text" name="LieuDepart" class="form-control" 
                                value="<?php echo $vol->LieuDepart; ?>" >
                                <input type="hidden" name="idVol" class="form-control" value="<?php echo $vol->idVol;?>">
                              
                            </div>
                            <div class="mb-3">
                                <label for="LieuArrivé" class="form-label">LieuArrivé</label>
                                <input type="text" name="LieuArrivé" class="form-control"
                                value="<?php echo $vol->LieuArrivé; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="DateDepart" class="form-label">DateDepart</label>
                                <input type="Date" name="DateDepart" class="form-control" 
                                value="<?php echo $vol->DateDepart; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="DateArrive" class="form-label">DateArrive</label>
                                <input type="date" name="DateArrive" class="form-control" 
                                value="<?php echo $vol->DateArrive; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="NbPlace" class="form-label">NbPlace</label>
                                <input type="number" name="NbPlace" class="form-control" 
                                value="<?php echo $vol->NbPlace; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="Prix" class="form-label">Prix</label>
                                <input type="text" name="Prix" class="form-control" 
                                value="<?php echo $vol->Prix; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="choix" class="form-label">choix</label>
                                <select class="form-control" name="choix" >
                                    <option value="0" <?php  echo !$vol->choix ?'selected' : ''; ?>>Aller-simple</option>
                                    <option value="1" <?php  echo $vol->choix ?'selected' : ''; ?>>Aller-retour</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="LieuDepart" class="form-label">LieuDepart</label>
                                <select class="form-control" name="LieuDepart">
                                    <option value="Casa"<?php  //echo !$vol->LieuDepart ?'selected' : ''; ?>>Casa</option>
                                    <option value="Rabat"<?php //  echo !$vol->LieuDepart ?'selected' : ''; ?>>Rabat</option>
                                    <option value="Merakech"<?php  //echo !$vol->LieuDepart ?'selected' : ''; ?>>Merakech</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="LieuArrivé" class="form-label">LieuArrivé</label>
                                <select class="form-control" name="LieuArrivé" >
                                    <option value="Casa" <?php // echo !$vol->LieuArrivé ?'selected' : ''; ?>>Casa</option>
                                    <option value="Rabat"<?php  //echo !$vol->LieuArrivé ?'selected' : ''; ?>>Rabat</option>
                                    <option value="Merakech">Merakech</option>
                                </select>
                            </div>
                             -->
                            <button type="submit" class="btn btn-primary" name="submit">Valider</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
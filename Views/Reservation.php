<?php
// if(isset($_POST['submit'])){
//     $newVol = new VolController();
//     $newVol->AddVol();   
// }
if (isset($_POST['submit'])){
$idVol = $_POST['idVol'];
// die(var_dump($_POST['idVol']));
}
$Vol=new VolController();
$Unvol = $Vol->getOneVol($idVol);
// die(var_dump(($Unvol->idVol)));

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header">Reserver un Vol</div>
                <div class="card-header">
                    <div class="card-body bg-light ">
                        <a href="<?php echo BASE_URL;?>HomeClient" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <form method="post" action="profil">
                            <!-- <div class="mb-3">
                                <label for="idVol" class="form-label">Num Vol*</label>
                                <input type="number" name="idVol" class="form-control" placeholder="id">
                            </div> -->
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Vile de Depart : <?php echo $Unvol->LieuDepart ?></li>
                                    <li class="list-group-item">Ville darrive :  <?php echo $Unvol->LieuArrivé ?></li>
                                    <li class="list-group-item">Date de Depart : <?php echo date('D-h-i', strtotime( $Unvol->DateDepart))?></li>
                                    <li class="list-group-item">Date darrive : <?php echo $Unvol->DateArrive ?></li>
                                    <!-- <li class="list-group-item">A second item <?php echo $Unvol->NbPlace ?></li> -->
                                    <li class="list-group-item">Prix d'une seule ticket :<?php echo $Unvol->Prix ?></li>
                                </ul>
                            </div>
                            <div class="mb-3">
                                <label for="choix" class="form-label">choix</label>
                                <select class="form-control" name="choix">
                                    <option value="0">Aller-simple</option>
                                    <option value="1">Aller-retour</option>
                                </select>
                            </div>

                            <button type="submit"name ="submit" class="btn btn-primary mb-3" name="submit">Valider</button>
                            <input type="text"value="<?php echo $Unvol->idVol;?>">
                            

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
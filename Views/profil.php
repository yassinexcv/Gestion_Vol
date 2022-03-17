<?php

$id = $_SESSION['userid'];

$user = new userController();
$user = $user->getuser($id);
$res = new userController();
$res = $res->getResrvation($id);

$idvol = $res['idVol'];
$vol = new VolController();
$voll =  $vol->getOneVol($idvol);

if (isset($_POST['annuler'])) {
    // die(var_dump(2));
    $idres = $res['idReservation'];
    $res = new VolController();
    $resl = $res->annuler($idres);
}
// die(var_dump($voll));
?>




<div class="container">
    <div class="main-body">


        <div style="margin: 100px;">

        </div>
        <?php require_once 'Views/includes/alert.php'; ?>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo $user['NomClient'] . ' ' . $user['PrenomClent']; ?></h4>
                                <p class="text-secondary mb-1"><?php  ?></p>
                                <p class="text-muted font-size-sm">new clinet</p>
                                <a href="<?php echo BASE_URL; ?>HomeClient" class="btn btn-primary pt-2">
                                    <i class="fas fa-home"></i> Home
                                </a>
                                <a href="<?php echo BASE_URL; ?>logout" class="btn btn-danger pt-2"> <i class="fas fa-sign-out-alt"></i> Déconction </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email </h6>

                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user['EmailClent'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0"> num de passport</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user['NumPassport'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">LieuDepart :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo  $voll->LieuDepart ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">LieuArrivé</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo  $voll->LieuArrivé ?>
                            </div>
                        </div>


                        <hr>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- <button type="submit" name="annuler" ">Annuler</button> -->
                                    <!-- <button type="submit" name="annuler" class="btn btn-info">Annuler</button> -->
                                    <button name="annuler" type="submit"class="btn btn-info "> Annuler</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
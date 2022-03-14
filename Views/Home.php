<?php
if(isset($_POST['find'])){
    $data = new VolController();
    $vol=$data->findVol();
   }else{
       $data = new VolController();
       $vol=$data->getAllVol();
}

?>

<div class="">
    <div class="row my-4">
        <div class="col-md-20 mx-auto">
            <?php require_once 'Views/includes/alert.php' ; ?>
            <div class="card bg-dark">
                <div class="card-body bg-dark ">
                    <div class="table-responsive">
                        <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary rounded mr-2 mb-2">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-light rounded mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <a href="<?php echo BASE_URL;?>logout" title="Deconnexion"class="btn btn-success btn-link rounded mr-2 mb-2" style="color: white;">
                            <i class="fas fa-user mr-2"> <?php echo 'Adim'?></i>
                        </a>
                        <form class="float-end mb-2 d-flex flex-rew" method="post">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                            <button class="btn btn-info btn-sm " name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    
                        <table class="table table-sm table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Vol_id</th>
                                    <th scope="col">Lieu De Départ</th>
                                    <th scope="col">Lieu D'arrivé</th>
                                    <th scope="col">Date De Depart</th>
                                    <th scope="col">Date D'arrive</th>
                                    <th scope="col">Nb Place</th>
                                    <th scope="col">Prix</th>
                                    <!-- <th scope="col">A-S A-R</th> -->
                                    <th scope="col">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($vol as $vol):?>
                                <tr>
                                    <td><?php echo $vol['idVol'] ; ?></td>
                                    <td><?php echo $vol['LieuDepart'];  ?></td>
                                    <td><?php echo $vol['LieuArrivé']; ?></td>
                                    <td><?php echo $vol['DateDepart']; ?></td>
                                    <td><?php echo $vol['DateArrive']; ?></td>
                                    <td><?php echo $vol['NbPlace']; ?></td>
                                    <td><?php echo $vol['Prix']; ?></td>
                                  
                                    <td class="d-flex flew-row">
                                        <form method="post" class="mr-1" action="update">
                                            <input type="hidden" name="idVol" value="<?php echo $vol['idVol']; ?>">
                                            <button class="btn btn-sm btn-warning me-2"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="POST" class="mr-1" action="delete">
                                            <input type="hidden" name="idVol" value="<?php echo $vol['idVol']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
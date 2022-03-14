<?php
if(isset($_POST['find'])){
    $data = new VolController();
    $vol=$data->findVol();
   }else{
       $data = new VolController();
       $vol=$data->getAllVol();
}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-18 mx-auto">
            <?php require_once 'Views/includes/alert.php' ; ?>
            <div class="card">
                <div class="card-body bg-light ">
                    <div class="table-responsive">
                    <h1>Home Client</h1>
                        <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <a href="<?php echo BASE_URL;?>logout" title="Deconnexion"class="btn btn-sm btn-link mr-2 mb-2">
                            <i class="fas fa-user mr-2"> <?php echo $_SESSION['username'];?></i>
                        </a>
                        <form class="float-end mb-2 d-flex flex-rew" method="post">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">idVol</th>
                                    <th scope="col">LieuDepart</th>
                                    <th scope="col">LieuArrivé</th>
                                    <th scope="col">DateDepart</th>
                                    <th scope="col">DateArrive</th>
                                    <th scope="col">NbPlace</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">A-S A-R</th>
                                    <th scope="col">Action</th>
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
                                    <td><?php echo $vol['choix']
                                     ?
                                     '<span class="bg-primary text-white"><i class="fas fa-exchange-alt "></i>A-R</span>'
                                     :
                                     '<span  class="bg-info text-white"><i class="fas fa-arrow-right"></i>A-S</span>';
                                ; ?></td>
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
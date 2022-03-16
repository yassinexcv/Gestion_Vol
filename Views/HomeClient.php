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
                            <div class="d-flex justify-content-between mb-4 ">
                            <h1>Home Client</h1>
                            <a href="<?php echo BASE_URL;?>logout"   class="btn btn-danger pt-3" > <i class="fas fa-sign-out-alt"></i> Déconction </a>
                        </div>
                        
                    
                        <a href="<?php echo BASE_URL;?>HomeClient"  class="btn btn-primary pt-2" >
                            <i class="fas fa-home"></i> Home
                        </a>
                        <a href="<?php echo BASE_URL;?>profil" title="Deconnexion"class="btn btn-primary pt-2">
                            <i class="fas fa-user mr-2"> <?php echo $_SESSION['username'];?></i>
                        </a>
                        <form class="float-end mb-2 d-flex flex-rew" method="post">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">LieuDepart</th>
                                    <th scope="col">LieuArrivé</th>
                                    <th scope="col">DateDepart</th>
                                    <th scope="col">DateArrive</th>
                                    <th scope="col">Nombre place</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Reserver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($vol as $vol):?>
                                <tr>
                                  
                                    <td><?php echo $vol['LieuDepart'];  ?></td>
                                    <td><?php echo $vol['LieuArrivé']; ?></td>
                                    <td><?php echo $vol['DateDepart']; ?></td>
                                    <td><?php echo $vol['DateArrive']; ?></td>
                                    <td><?php echo $vol['NbPlace']; ?></td>
                                    <td><?php echo $vol['Prix']; ?></td>
                                   
                                    <td class="d-flex flew-row">
                                      
                                        <form method="POST" class="mr-1" action="Reservation">
                                            <input type="hidden" name="idVol" value="<?php echo $vol['idVol']; ?>">
                                            <button name="submit" type ="submit"class="btn btn-sm btn-warning">reservation</button>
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
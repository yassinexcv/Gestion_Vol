<?php
if(isset($_POST['submit'])){
   $creatuser=new userController();
   $User=$creatuser->Creatacc();
   }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <?php require_once 'Views/includes/alert.php' ; ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Inscription</h3>
                    <?php require_once 'Views/includes/alert.php' ; ?>
                </div>
                <div class="card-body bg-light">
                <form method="post" class="mr-4">
                 <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                    <input type="text" required name="Lastname" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                    <input type="text" required name="Firstname" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de Naissance</label>
                    <input type="date" required name="Datedenaissnce" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email"required name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numéro de passeport</label>
                    <input type="text" required name="Numpass" class="form-control" id="exampleFormControlInput1" placeholder="AA1234">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">mot de passe </label>
                <input type="password" required name="motdepass" class="form-control" id="exampleFormControlInput1" placeholder="********">
                </div class='d-flex'>
                    <button class="btn btn-info btn-sm btn-primary" name="submit" type="submit">Inscription</button>
                    <a href="<?php echo BASE_URL?>login" class="btn btn-link">Connexion</a>
            </div>
            </form>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </div>
</div>
</div>
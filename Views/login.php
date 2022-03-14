<?php
if(isset($_POST['submit'])){
    $loginUser = new userController();
    $log=$loginUser->verfylog();
   }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <?php require_once 'Views/includes/alert.php' ; ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Connexion</h3>
                </div>
                <div class="card-body bg-light">
                <form method="post" class="mr-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">mot de passe </label>
                <input type="password" name="motdepass" class="form-control" id="exampleFormControlInput1" placeholder="********">
                </div>
                    <button name="submit" class="btn btn-info btn-sm btn-primary">Connexion</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL?>register" class="btn btn-link">Inscription</a>
                </div>
            </div>
        </div>
    </div>
</div>
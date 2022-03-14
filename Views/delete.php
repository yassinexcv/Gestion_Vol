<?php
if(isset($_POST['idVol'])){
    $exitVol = new VolController();
    $exitVol->deletVol();

}


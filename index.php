<?php
require_once './Views/includes/header.php';
//require_once './Views/includes/header1.php';
require_once './Controllers/HomeController.php';
require_once './autoload.php';

$home = new HomeController();
$pages = ['home', 'add', 'delete', 'update', 'logout', 'login', 'generale', 'HomeAdmin', '','HomeClient','profil', 'Reservation','register' , 'profil'];

    if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)) {
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include 'Views/includes/404.php';
        }
    } else {
        $home->index('HomeClient');
    }
//require_once '../GestionVol/Views/includes/footer.php';

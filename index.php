<?php
require_once './Views/includes/header.php';
//require_once './Views/includes/header1.php';
require_once './Controllers/HomeController.php';
require_once './autoload.php';

$home = new HomeController();
// $home->index($_GET['page']);
$pages = ['home', 'add', 'delete', 'update', 'logout', 'login', 'generale', 'HomeAdmin', 'HomeClient', 'Reservation', 'profil'];
if (1) {
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
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $home->index('register');
} else {
    $home->index(('login'));
}
//require_once '../GestionVol/Views/includes/footer.php';

<?php
class Redirect{
    static function to($page){
        header(('location:'.$page));
    }
}


?>
<?php

if(isset($_GET['idj'])){
    if ($_GET ['idj'] == "es") {
        require '../portfolio2/sobre-mi.php';
          
    } elseif ($_GET['idj'] == "en") {
        require_once '../portfolio2/en/about-me.php';
    }
}


?>

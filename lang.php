<?php

if(isset($_GET['idk'])){
    if ($_GET ['idk'] == "es") {
        require_once '../portfolio2/index.php';
          
    } elseif ($_GET['idk'] == "en") {
        require_once '../portfolio2/en/index.php';
    }
}
?>

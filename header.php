<?php
    if(!isset($_SESSION['usuario'])){
        include('login.php');
    }else{
        include('sesion.php');
    }
    include('menu.php');
?>

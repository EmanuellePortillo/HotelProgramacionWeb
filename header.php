<div id="log">
<?php
    if(!isset($_SESSION['usuario'])){
        include('login.php');
    }else{
        include('sesion.php');
    }
    ?> </div><div class="limpiar"></div> <?php 
    include('menu.php');
?>

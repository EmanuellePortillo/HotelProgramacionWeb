<?php
 session_start();
 unset($_SESSION['usuario']);
 unset($_SESSION['rol']);
 header( 'Location: index.php' );
?>
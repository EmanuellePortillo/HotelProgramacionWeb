<?php
    $link = mysql_connect('localhost','root','');
    mysql_select_db('hotel') or die('No se pudo seleccionar la base de datos');
	mysql_query("SET NAMES 'utf8'");
    $cifrado = "sha512";
    $codec = "ProgramacionWebProyecto";
?>
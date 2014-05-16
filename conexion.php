<?php
    session_start();
    $link = mysql_connect('localhost','root','');
    mysql_select_db('hotel') or die('No se pudo seleccionar la base de datos');
	mysql_query("SET NAMES 'utf8'");
    $cifrado = "sha512";
    $codec = "ProgramacionWebProyecto";
    /*$query = 'INSERT INTO usuario (usuario, id_cliente, pass, id_empleado) VALUES (\'Emmanuel\',NULL,\'' . hash_hmac($cifrado,"emmanuel",$codec) . '\',2),(\'Emanuelle\',NULL,\'' . hash_hmac($cifrado,"Draculae91,",$codec) . '\',1),(\'Luis\',1,\'' . hash_hmac($cifrado,"luis",$codec) . '\',NULL);';
    $result = mysql_query($query) or die(mysql_error($link));*/
?>
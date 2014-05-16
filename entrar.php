<?php
    include('conexion.php');
    session_start();
    $query = 'SELECT * FROM usuario WHERE usuario = \'' . $_POST['usuario'] . '\' AND pass = \'' . hash_hmac($cifrado,$_POST['pass'],$codec). '\';';
    $result = mysql_query($query) or die();
    $res = mysql_fetch_array($result);
    if(count($res)>0){
        //echo $res['Nombre'] . ' ' . $res['AP'] . ' ' . $res['AM'];
        $idcliente = $res['id_cliente'];
        $idempleado = $res['id_empleado'];
        $query = 'SELECT * FROM cliente WHERE id_cliente = \'' . $idcliente . '\';';
        $result = mysql_query($query) or die();
        $res = mysql_fetch_array($result);
        if(count($res)>1){
            $_SESSION['usuario'] = $res['nombre'] . ' ' . $res['ap_pat'] . ' ' . $res['ap_mat'];
        }else{
            $query = 'SELECT * FROM empleado WHERE id_empleado = \'' . $idempleado . '\';';
            $result = mysql_query($query) or die();
            $res = mysql_fetch_array($result);
            if(count($res)>1)
                $_SESSION['usuario'] = $res['nombre'] . ' ' . $res['ap_pat'] . ' ' . $res['ap_mat'];
        }
    }
    if(!isset($_SESSION['usuario'])){
        include('login.php');
    }else{
        include('sesion.php');
    }
    header( 'Location: index.php' );
?>
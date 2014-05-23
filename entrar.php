<?php
    include('conexion.php');
    $query = 'SELECT * FROM usuario WHERE usuario = \'' . $_POST['usuario'] . '\' AND pass = \'' . hash_hmac($cifrado,$_POST['pass'],$codec). '\';';
    $result = mysql_query($query) or die();
    $res = mysql_fetch_array($result);
    if(count($res)>1){
        $idcliente = $res['id_cliente'];
        $idempleado = $res['id_empleado'];
        $query = 'SELECT * FROM cliente WHERE id_cliente = \'' . $idcliente . '\';';
        $result = mysql_query($query) or die();
        $res = mysql_fetch_array($result);
        if(count($res)>1){
            $_SESSION['usuario'] = $res['nombre'] . ' ' . $res['ap_pat'] . ' ' . $res['ap_mat'];
            $_SESSION['rol'] = 'cliente';
        }else{
            $query = 'SELECT * FROM empleado WHERE id_empleado = \'' . $idempleado . '\';';
            $result = mysql_query($query) or die();
            $res = mysql_fetch_array($result);
            if(count($res)>1)
                $_SESSION['usuario'] = $res['nombre'] . ' ' . $res['ap_pat'] . ' ' . $res['ap_mat'];
                $_SESSION['rol'] = $res['administrador'] == '1'?'administrador':'venta';
        }
    }
    if(!isset($_SESSION['usuario'])){
        include('login.php');
    }else{
        include('sesion.php');
    }
    header( 'Location: index.php' );
?>
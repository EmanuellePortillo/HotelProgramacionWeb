<div id='cssmenu'>
    <ul>
        <?php if($_SESSION['rol'] == 'cliente'){?> 
        <li class='active'><a href='index.html'><span>Inicio</span></a></li>
        <li><a href='#'><span>Productos</span></a></li>
        <li><a href='#'><span>Servicios</span></a></li>
        <li><a href='#'><span>Contactanos</span></a></li>
        <li class='last'><a href='#'><span>Reservaciones</span></a></li>
        <?php }elseif($_SESSION['rol'] == 'venta') {?>
        <li class='active'><a href='index.html'><span>Inicio</span></a></li>
        <li><a href='#'><span>Productos</span></a></li>
        <li><a href='#'><span>Servicios</span></a></li>
        <li class='last'><a href='#'><span>Reservaciones</span></a></li>
        <?php }elseif($_SESSION['rol'] == 'administrador'){?>
        <li class='active'><a href='index.html'><span>Inicio</span></a></li>
        <li><a href='#'><span>Productos</span></a></li>
        <li><a href='#'><span>Servicios</span></a></li>
        <li><a href='#'><span>Contactanos</span></a></li>
        <li class='last'><a href='#'><span>Reservaciones</span></a></li>
        <li class='last'><a href='#'><span>Clientes</span></a></li>
        <li class='last'><a href='#'><span>Empleados</span></a></li>
        <?php }else{?>
        <li class='active'><a href='index.html'><span>Inicio</span></a></li>
        <li><a href='#'><span>Productos</span></a></li>
        <li><a href='#'><span>Servicios</span></a></li>
        <li><a href='#'><span>Contactanos</span></a></li>
        <?php }?>
    </ul>
</div>
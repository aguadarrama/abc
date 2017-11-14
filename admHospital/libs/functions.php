<?php

function fn_header($titulo) {
    ?>
    <div class="row">
        <div class="col-sm-12" style="height: 80px; line-height:80px; background-color: #2d89ef; background: linear-gradient(#2b5797,#2d89ef);">
            <img src="../images/pharma.png" height="60" style="opacity: 1;">
            <img src="images/pharma.png" height="60" style="opacity: 1;">
            <span class="text-white-tras" style="font-family: 'OpenS','SegoeUI'; font-size: 20pt;"><?= $titulo ?></span>
        </div>
    </div>
    <?php
}

function fn_menu2($option) {
    ?>
    <div style="position: absolute; top: 80px; left: 655px; width: 2px; height: 40px;
         border-left: solid 1px #c0c0dF; border-right: solid 1px #f0f0FF;
         z-index: 1000;">
    </div>

    <div class="row" style="background-color: red;">
        <div class="col-sm-12" style="background-color: #E0E0FF; height: 40px; line-height: 40px; background: linear-gradient(#F2F2FF,#e0e0ff);">
            <a href="../recepcion/" class="nav-menu btn <?php echo ($option == 1 ? "disabled" : ""); ?>">Recepci&oacute;n</a>
            <!--<a href="../enfermeria/" class="nav-menu btn <?php echo ($option == 2 ? "disabled" : ""); ?>">Enfermer&iacute;a</a>-->
            <!--<a href="../farmacia/" class="nav-menu btn <?php echo ($option == 3 ? "disabled" : ""); ?>">Farmacia</a>-->
            <!--<a href="../caja/" class="nav-menu btn <?php echo ($option == 4 ? "disabled" : ""); ?>">Caja</a>-->
            <a href="../cxc/" class="nav-menu btn <?php echo ($option == 5 ? "disabled" : ""); ?>">Cuentas por Cobrar</a>
            <!--<a href="../cxp/" class="nav-menu btn <?php echo ($option == 6 ? "disabled" : ""); ?>">Cuentas por Pagar</a>-->
            <a href="../almacen/" class="nav-menu btn <?php echo ($option == 6 ? "disabled" : ""); ?>">Almac&eacute;n</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 3 ? "disabled" : ""); ?>">Men&uacute; Principal</a>
            <a>&nbsp;</a>
            <a href="#" class="nav-menu btn">Cerrar Sesi&oacute;n</a>
            <a href="#" class="nav-menu btn">Cerrar Sesi&oacute;n</a>

<!--            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Link <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>-->

<style>
    li a{padding: 10px 12px!important;}
    li a:hover{background-color: transparent!important;}
</style>



            <a href="#" class="nav-menu btn">Cerrar Sesi&oacute;n</a>
            
            <ul class="nav navbar-nav">
                <li><a href="#">qwwer</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle='dropdown' role='button' aria-haspopup="true" aria-expanded="false">abc<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../caja/">caja</a></li>
                        <li><a href="../enfermeria/">enf</a></li>
                    </ul>
                </li>
            </ul>
            
            
            <a href="#" class="nav-menu btn">Cerrar Sesi&oacute;n</a>
            
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="#">Link</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>         
    <?php
}

function fn_menu_cxc($option) {
    ?>
    <!--
    <div style="position: absolute; top: 80px; left: 655px; width: 2px; height: 40px;
         border-left: solid 1px #c0c0dF; border-right: solid 1px #f0f0FF;
         z-index: 1000;">
    </div>
    -->
<!--consultas/// pagos//edc// abc de convenios-->
    <div class="row" style="background-color: red;">
        <div class="col-sm-12" style="background-color: #E0E0FF; height: 40px; line-height: 40px; background: linear-gradient(#e0e0ff,#F2F2FF); border-top: solid 1px rgba(255,255,255,.2);">
            <a href="#" class="nav-menu btn <?php echo ($option == 1 ? "disabled" : ""); ?>">Consultas</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 2 ? "disabled" : ""); ?>">Control de Pagos</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 3 ? "disabled" : ""); ?>">Estados de Cuenta</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 4 ? "disabled" : ""); ?>">Mtto. Convenios</a>
            <a href="#" class="nav-menu btn">Men&uacute; Principal</a>
        </div>
    </div>         
    <?php
}



function fn_menu_recepcion($option) {
    ?>
    <!--
    <div style="position: absolute; top: 80px; left: 655px; width: 2px; height: 40px;
         border-left: solid 1px #c0c0dF; border-right: solid 1px #f0f0FF;
         z-index: 1000;">
    </div>
    -->

    <!--abc de clave de pacientes-->
    <!--alt de folio con sus datso-->
    <!--hostorial de folios x paciente y status-->
            
    <div class="row" style="background-color: red;">
        <div class="col-sm-12" style="background-color: #E0E0FF; height: 40px; line-height: 40px; background: linear-gradient(#f2f2ff,#e0e0ff); border-top: solid 1px rgba(255,255,255,.2);">
            <a href="#" class="nav-menu btn <?php echo ($option == 1 ? "disabled" : ""); ?>">Claves Pacientes</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 2 ? "disabled" : ""); ?>">Registro de Folios</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 3 ? "disabled" : ""); ?>">Hist&oacute;rico de Folios</a>
            <a href="#" class="nav-menu btn">Men&uacute; Principal</a>
        </div>
    </div>         
    <?php
}
function fn_menu_privado($option) {
    ?>
    <div class="row" style="background-color: red;">
        <div class="col-sm-12" style="background-color: #E0E0FF; height: 40px; line-height: 40px; background: linear-gradient(#f2f2ff,#e0e0ff); border-top: solid 1px rgba(255,255,255,.2);">
            <a href="#" class="nav-menu btn <?php echo ($option == 1 ? "disabled" : ""); ?>">Usuarios</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 2 ? "disabled" : ""); ?>">Cortes de Caja</a>
            <a href="#" class="nav-menu btn <?php echo ($option == 3 ? "disabled" : ""); ?>">Bit&aacute;cora</a>
            <a href="#" class="nav-menu btn">Men&uacute; Principal</a>
        </div>
    </div>         
    <?php
}



function fn_pie() {
    ?>
    <div class="row" style="position:fixed; bottom: 0px; background-color: #eff4ff; width: 100%; height: 25px; line-height: 25px;">
        <div class="col-sm-12 text-primary text-right" style="font-family: 'Roboto','SegoeUI','Arial'; font-size: 8.5pt;">
            Sistema de Administraci&oacute;n de Internamiento Cl&iacute;nico <b>SAIC</b> &copy 2017. Dise&ntilde;o Ing. Angel Guadarrama R.
        </div>
    </div>
    <?php
}
?>
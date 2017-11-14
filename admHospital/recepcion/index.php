<!--RECEPCION-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>
        <title>Recepci&oacute;n</title>
        <script>
            // ACTIVA PANTALLA DE CAPTURA PARA UN NUEVO REGISTRO
            function fnNewRegistro() {
                // REMUEVE ATRIBUTO DISABLED DE LOS CAMPOS DENTRO DE LA FORMA
                $("form input").removeAttr("disabled");
                // COLOCA EL PUNTERO EN EL PRIMER CAMPO DE CAPTURA
                $("#nombrePaciente").focus();
            }
            /*
             si
             es
             boton
             grabar
             lee
             los
             dasto
             de
             nuevo
             registro
             los
             manda
             grabar
             regresa
             el
             msg
             de
             ok
             le
             muestar
             cual
             es
             la
             clave de paciente nuevo
             
             si
             es*/
            function fnCancelNew() {
                // LIMPIA EL VALOR DE LOS CAMPOS DE CAPTURA
                $("form input").val("");
                // DESABILITA TODOS LOS CAMPOS DE CAPTURA
                $("form input").attr("disabled", "disabled");
            }
        </script>
        <style>
            html,body{background-color: #eff4ff;}
            a{text-shadow: 1px 1px 1px #ffffff;}
            a.disabled{text-shadow: none;}            
            .text-white-tras{color:rgba(255,255,255,0.7);}

            label{color: inherit; font-family:'Roboto','SegoeUI','Arial'; 
                  padding-bottom: 0px; font-weight: normal; margin-bottom: 0px;
                  font-size: 1.2rem; padding-top: 0px; margin-top: 0px;
            }
            .form-group{margin-bottom: 10px;}
            input.form-control {font-family:'Roboto','segoeUI','Courier';}
            /*input{font-family: 'Courier'!important;}*/

            table button.btn-success{background-color: red!important; background-image: none;}
button{background-color: red;}
table tr td .btn{background-color: yellow;}

        </style>                
    </head>
    <body>
        <div class="container-fluid">
            <?php
            fn_header("Recepci&oacute;n");
            fn_menu_recepcion(0);
            ?>
            <!--<img src="../images/pharma.png" style="position: absolute; top: 150px; opacity: 0.25;">-->

            <!--abc de clave de pacientes-->
            <section comen='alta de datos del paciente'>
                <div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Clave del Paciente</label>
                                        <input id="" name="" class="form-control" type="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary">Nuevo Registro</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary" type="button" onclick="fnNewRegistro();">Nuevo Registro</button>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                                
                                <table border='1' style="width: 100%;">
                                    <tr>
                                        <td colspan="4"><label>skjhakjfhd</label></td>
                                    </tr>
                                    <tr>
                                        <td><input><button class="btn">lkjlkjlk</button></td>
                                        <td><button class="btn btn-success">kjhgkjh</button></td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default" style="width: 85%; margin: auto;">
                        <div class="panel-heading">Datois Generales eddel Registro del Nuevo Paiente</div>
                        <div class="panel-body">
                            <form>

                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nombre Completo</label>
                                                    <input id="nombrePaciente" name="" class="form-control disabled" type="text" value="ANGEL GUADARRAMA" disabled="">
                                                </div>
                                            </div>
                                        </div>


                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Edad</label><input id="edad" name="" class="form-control" type="number" value="51" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Sexo</label><input id="sexo" name="" class="form-control" type="text" value="M" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento</label><input id="fechaNacimiento" name="" class="form-control" type="date" value="" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Convenio</label><input id="convenio" name="" class="form-control" type="text" value="BANORTE" disabled="">
                                        </div>
                                    </div>
                                </div>

                                    </div>
                                </div>
                                <!--ESTA FECHA SE GRABA EN AUTOMATICO-->
                                <!--<label>fecha de entrada</label><input id="" name="" class="form-control" type="" value="">-->
                                <!--ESTO SE PREGUNTA CUANDO SE GENERE EL FOLIO-->
                                <!--<label>metodo de pago</label><input id="" name="" class="form-control" type="" value="">-->

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Domicilio Calle y Numero</label><input id="calleNumero" name="" class="form-control" type="" value="ARCOS HISTORICOS 405" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Colonia</label><input id="colonia" name="" class="form-control" type="" value="ARCOS DEL SOL 2DO SECTOR" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Municipio</label><input id="municipio" name="" class="form-control" type="" value="MONTERREY" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Estado</label><input id="estado" name="" class="form-control" type="" value="NUEVO LEON" disabled="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tratamiento Solicitado</label><input id="tratamiento" name="" class="form-control" type="" value="INFUSION QUIMIOTERAPIA PROSTATA">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Medico que env&iacute;a</label><input id="medicoEnvia" name="" class="form-control" type="" value="DR. JOSE JUAN MARTINEZ">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Grabar</button>
                                <button class="btn btn-warning">Limpiar</button>
                                <button class="btn btn-danger" type="button" onclick="fnCancelNew();">Cancelar</button>
                            </form>
                        </div>
                    </div>


                </div>
            </section>

            <section>
                <div>
<!--                    venatana de datos de edicion
                    pregunta la clave
                    muestra datoa iinactivos
                    boton editar
                    boton baja de paciente
                    cuadro otivo de baja-->
                </div>
            </section>



            <section>
                <div class="row">
                    <div class="col-sm-12">
                        <!--ventana para busqueda-->
                    </div>
                    <div class="col-sm-12">
                        <!--ventan resulytado de busqueda-->
                    </div>
                </div>
            </section>



            <!--alt de folio con sus datso-->

            <!--hostorial de folios x paciente y status-->



            <?= fn_pie(); ?>          
        </div>
    </body>
</html>

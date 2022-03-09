<?php
//CONEXION
$conexion = mysqli_connect('localhost', 'root', '7330', 'censo');


if (isset($_POST['btn_act_manzana6'])){

    $id_act=$_POST['id_act'] ;
    $Nro_casa=$_POST['Nro_casa'] ;
    $Calle=$_POST['Calle'] ;
    $Vivienda=$_POST['Vivienda'] ;
    $Nro_miembros=$_POST['Calle'] ;
    $Discapacidades=$_POST['Discapacidades'] ;

    $sql="UPDATE manzana_6 SET 
    Nro_casa= '$Nro_casa',
    Calle= '$Calle',
    Vivienda='$Vivienda', 
    Nro_miembros='$Nro_miembros',
    Discapacidades='$Discapacidades' WHERE ID='$id_act'";
    mysqli_query($conexion,$sql);
}    

if (isset($_POST['btn_elim_manzana6'])){
    $id_elim= $_POST['id_elim'] ;
    $sql="DELETE FROM manzana_6 WHERE ID='$id_elim'";
    mysqli_query($conexion,$sql);
}    

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="lib/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/menu_estilos.css">
    <link rel="stylesheet" type="text/css" href="lib/all.min.css">
    <link rel="stylesheet" type="text/css" href="lib/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/tablas_estilos.css">
    <link rel="stylesheet" type="text/css" href="css/mapa.css">
    <link rel="stylesheet" type="text/css" href="css/prueba.css">
    <link rel="stylesheet" type="text/css" href="css/botones-censo.css">
    <title>Censo</title>
</head>

<body id="body">
    <!--- MENU --->
    <header>
        <div class="icon_menu">
            <i class="fa-solid fa-bars" id="btn_open"></i>
        </div>
        <nav>
            <ul>
                <li id="cajas_nav">
                    <a href="nosotros.html" class="btn-neon">
                        <!-- <span id="span1"></span>
                    <span id="span2"></span> -->
                        <i class="fa-solid fa-user-group"></i>
                        <p>Nosotros</p>
                    </a>
                </li>
                <li id="cajas_nav">
                    <a href="bases-legales.html" class="btn-neon">
                        <!-- <span id="span1"></span>
                    <span id="span2"></span> -->
                        <i class="fa-solid fa-landmark"></i>
                        <p>Bases Legales</p>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!--- OPCIONES DEL MENU --->
    <div class="menu_side" id="menu_side">
        <div class="options_menu">
            <a href="bienvenida.html">
                <div class="option">
                    <i class="fa-solid fa-house-chimney" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="censo.html" class="selected">
                <div class="option">
                    <i class="fa-solid fa-table" title="Censo"></i>
                    <h4>Censo</h4>
                </div>
            </a>
            <a href="visualizador.html">
                <div class="option">
                    <i class="fa-solid fa-box-archive" title="Visualizador de Documentos"></i>
                    <h4>Documentación</h4>
                </div>
            </a>
            <a href="galeria.html">
                <div class="option">
                    <i class="fa-solid fa-images" title="Galeria"></i>
                    <h4>Galeria</h4>
                </div>
            </a>
        </div>
    </div>

    <!--- HEADER CENSO --->
    <section>
        <section class="contenedor-header">
            <div class="bg_animate">
                <div class="banner">
                    <div class="banner_title">
                        <h2>Censo<br>Comunitario</h2>
                        <p class="texto-censo">El censo se realizo durante el transcurso del 2021; en este participaron los miembros del sector 1 en compañia con los jefes de calle, visitando cada una de las viviendas para obtener información sobres estas.</p>
                    </div>
                    <div class="banner_img">
                        <img src="img/House searching-bro.png" alt="">
                    </div>
                </div>
                <div class="burbujas">
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                    <div class="burbuja"></div>
                </div>
            </div>
            <div class="wave" style="height: 90px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-5.07,-2.45 C228.55,233.38 301.91,-106.08 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                </svg></div>
        </section>
    </section>

    <div class="container m-5 mx-auto">
        <!--- MANZANA 6 -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Manzana 6</button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="position: relative; right: 75px;">
                    <div class="accordion-body">

                        <!--- TABLAS --->
                        <table id="example" class="accordion-body display table table-striped table-hover text-nowrap table-hover shadow p-3 bg-body rounded">
                            <thead>
                                <tr>
                                    <th class="border-start-0 border-light" style="background: white;"></th>
                                    <th class="border border-start-0 border-light">Calle</th>
                                    <th class="border border-start-0 border-light">Vivienda</th>
                                    <th class="border border-start-0 border-light">Nro. de Casa</th>
                                    <th class="border border-start-0 border-light">Nro. de Miembros</th>
                                    <th class="border border-start-0 border-light">Discapacidades</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM manzana_6";
                            $resultado = mysqli_query($conexion,$sql);
                            while ($mostrar = mysqli_fetch_array($resultado))
                            { ?>
                                <tr>
                                    <th>
                                        <button onclick="act('<?php echo $mostrar["ID"]?>')" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#agregarnuevosdatosmodal1"><a data-href="javasript:void(0)" data-toggle="modal"><span class="fa-solid fa-pen-to-square"></span></a></button>

                                        <button onclick="elim('<?php echo $mostrar["ID"]?>')" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a data-href="javasript:void(0)" data-toggle="modal" data-target="#confirm-delete"><span class="fa-solid fa-eraser"></span></a></button>

                                    </th>
                                    <th><?php echo $mostrar['Calle']?></th>
                                    <th><?php echo $mostrar['Nro_casa']?></th>
                                    <th><?php echo $mostrar['Vivienda']?></th>
                                    <th><?php echo $mostrar['Nro_miembros']?></th>
                                    <th><?php echo $mostrar['Discapacidades']?></th>
                                </tr>
                                <?php
                            }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="border-start-0 border-light" style="background: white;"></th>
                                    <th>Calle</th>
                                    <th>Nro. de Casa</th>
                                    <th>Vivienda</th>
                                    <th>Nro. de Miembros</th>
                                    <th>Discapacidades</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div style="background: white; width: 100%; height: 40px;"></div>
            <!--- MAPA --->
            <img src="img/House searching-amico.png" style="width: 100%; height: 60vh; z-index: 10;">
            <div class="mapa-censal container py-xl-3 py-lg-3">
                <h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Mapa Censal</h3>
                <p class="title-para text-center mx-auto mb-sm-5 mb-4">El propósito principal es indicar el área y sus límites que debe ser cubierta por un empadronador y para que durante el recorrido del área de trabajo, le sirva de guía para evitar que empadrone un área que no le corresponde.</p>
            </div>

            <section class="contenedor-mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2705.4141332733193!2d-63.528458686546145!3d8.090225994175434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff87477fee706e1f!2zOMKwMDUnMjQuOCJOIDYzwrAzMSczNC42Ilc!5e1!3m2!1ses!2sve!4v1646174860503!5m2!1ses!2sve" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="caja-mapa"><i class="fa-solid fa-map-location-dot"></i></div>
            </section>
    </div>

    <!--- Modal de los BOTONES --->

    <div class="modal fade" id="agregarnuevosdatosmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form" name="form" action="censo.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" class="form-control input-sm" name="id_act" id="id_act">

                        <label>Calle</label>
                        <input type="text" class="form-control input-sm" name="Calle" id="Calle">

                        <label>Casa</label>
                        <input type="text" class="form-control input-sm" name="Nro_casa" id="Nro_casa">

                        <label>Vivienda</label>
                        <input type="text" class="form-control input-sm" name="Vivienda" id="Vivienda">

                        <label>Nro. de miembros</label>
                        <input type="text" class="form-control input-sm" name="Nro_miembros" id="Nro_miembros">

                        <label>Discapacidades</label>
                        <input type="text" class="form-control input-sm" name="Discapacidades" id="Discapacidades">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn_act_manzana6" name="btn_act_manzana6" type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--- Modal ELIMINAR --->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">¿Está seguro de eliminar estos datos?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    
                    <form id="formelim" name="formelim" action="censo.php" method="POST">

                        <button id="btn_elim_manzana6" name="btn_elim_manzana6" type="submit" type="button" class="btn btn-danger">Si, borrar</button>

                        <input type="hidden" class="form-control input-sm" name="id_elim" id="id_elim">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<script>
    $(document).ready(function() {
        $('table.display').DataTable({
            "language": español

        });
    });
    let español = {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
    };

    function elim(id) {
        $("#id_elim").val(id) ;
    }

    function act(id){
        var parserJsn=0 ;
        $("#id_act").val(id) ;
        $.ajax({
            url: "censo_manzana6.php",
            type: "POST",
            data: {id:id},
            datatype:'json',
            success: function(data) {
                if (parserJsn==1)
                    data= JSON.parse(data);
                $("#Calle").val(data.Calle) ;
                $("#Nro_casa").val(data.Nro_casa) ;
                $("#Vivienda").val(data.Vivienda) ;
                $("#Nro_miembros").val(data.Nro_miembros) ;
                $("#Discapacidades").val(data.Discapacidades) ;
            },
            error: function(data) {
                alert("Error de Datos") ;
            }
        })
    }
</script>

<script src="lib/jquery.min.js"></script>
<script src="lib/datatables.min.js"></script>
<script src="lib/dataTables.buttons.min.js"></script>
<script src="lib/buttons.html5.min.js"></script>
<script src="lib/jszip.min.js"></script>
<script src="lib/pdfmake.min.js"></script>
<script src="lib/vfs_fonts.js"></script>
<script src="lib/bootstrap.js"></script>
<script src="menu_move.js"></script>



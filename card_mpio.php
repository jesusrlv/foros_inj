<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/brand/img/icon.ico" sizes="22x21">
    <meta name="description" content="">
    <meta name="author" content="Programa del INJUVENTUD">
    <meta name="generator" content="INJUVENTUD">
    <title>PROGRAMA ESTATAL DE LA JUVENTUD</title>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>    
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- tipografía -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Montserrat:ital@0;1&display=swap" rel="stylesheet"> 

    <!-- <script src="js/script.js" type="text/javascript"></script> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body onload="validarSubmit2(); changePicture()" oninput="validarSubmit()">
    
<header>
  <div class="collapse" id="navbarHeader" style="background-color:#83272b ;">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white" style="font-family: 'Montserrat', sans-serif;">PROGRAMA ESTATAL DE LA JUVENTUD</h4>
          <p class="text-white">El objetivo de los foros es recopilar propuestas de la población zacatecana para la elaboración del Plan Estatal de la Juventud.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Teléfono: 492 49 1 5000</a></li>
            <li><a href="https://www.facebook.com/injuventud.zac" class="text-white">Facebook</a></li>
            <li><a href="#" class="text-white">Correo electrónico</a></li>
            <li><a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-spreadsheet-fill"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark shadow-sm" style="background-color:#83272b ;">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="assets/brand/img/logo_solo_blanco.png" alt="" width="24" height="24" class="d-inline-block align-text-top me-2">
        <strong>REPORTES | PROGRAMA ESTATAL DE LA JUVENTUD 2022 | INJUVENTUD</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
<div id="back">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto" id="backTexto">
        <p class="text-center"><img src="assets/brand/img/logo2.png" width="400" id="imagenLogo" alt=""></p>
        <h1 class="fw-light" id="textoTitulo"><strong>REPORTES</strong></h1>
      </div>
    </div>
  </section>
</div>

  <div class="album py-5 bg-light">
    <div class="container">

      <main>
          <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">TARJETA INFORMATIVA</h4>
            <hr>
            <?php
                $mpio = $_REQUEST['mpio'];
                include('query/card.php');
            ?>
            
            <div class="card">
                <h5 class="card-header bg-dark text-light"><strong>Municipio: </strong><?php echo $mpio ?></h5>
                <div class="card-body">
                    <h5 class="card-title"><strong>Número de personas participantes: </strong><?php echo $rowCardParticipantes['datoParticipantes'] ?></h5>
                    <hr>
                    <p class="card-text">Edad</p>

                    <table class="table">
                        <thead class="text-center bg-secondary text-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 0;
                            while($rowCardEdad = $resultadoCardEdad->fetch_assoc()){
                            $x++;
                            echo'
                            <tr class="text-center">
                                <td>'.$x.'</td>
                                <td>'.$rowCardEdad['edad'].'</td>
                                <td>'.$rowCardEdad['cantidadEdad'].'</td>
                            </tr>
                            ';
                            }
                            ?>
                        </tbody>
                    </table>
                    <p class="card-text">Género</p>
                    <table class="table">
                        <thead class="text-center bg-secondary text-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php
                            $x = 0;
                            while($rowCardGenero = $resultadoCardGenero->fetch_assoc()){
                            $x++;
                            echo'
                            <tr class="text-center">
                                <td>'.$x.'</td>
                                <td>'.$rowCardGenero['genero'].'</td>
                                <td>'.$rowCardGenero['cantidadGenero'].'</td>
                            </tr>
                            ';
                            }
                            ?>
                        </tbody>
                    </table>
                    <p class="card-text">Categorías:</p>
                    <table class="table">
                        <thead class=" bg-secondary text-light">
                            <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">Categoría</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                           
                            $tema1 = 0;
                            $tema2 = 0;
                            $tema3 = 0;
                            $tema4 = 0;
                            $tema5 = 0;
                            $tema6 = 0;
                            $tema7 = 0;
                            while($rowCardCategorias = $resultadoCardCategorias->fetch_assoc()){
                          
                                if(!empty($rowCardCategorias['tema1'])){
                                    $tema1++;
                                }
                                
                               
                                if(!empty($rowCardCategorias['tema2'])){
                                    $tema2++;
                                }
                               
                    
                                if(!empty($rowCardCategorias['tema3'])){
                                    $tema3++;
                                }
                                
                                if(!empty($rowCardCategorias['tema4'])){
                                    $tema4++;
                                }
                                
                                if(!empty($rowCardCategorias['tema5'])){
                                    $tema5++;
                                }
                                
                                if(!empty($rowCardCategorias['tema6'])){
                                    $tema6++;
                                }
                                
                                if(!empty($rowCardCategorias['tema7'])){
                                    $tema7++;
                                }
                                
                            }
                            ?>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Educación</td>
                                <td class="text-center"><?php echo $tema1 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Salud y prevención</td>
                                <td class="text-center"><?php echo $tema2 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Cultura, turismo y deporte</td>
                                <td class="text-center"><?php echo $tema3 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Participación juvenil</td>
                                <td class="text-center"><?php echo $tema4 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Medio ambiente</td>
                                <td class="text-center"><?php echo $tema5 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Inclusión</td>
                                <td class="text-center"><?php echo $tema6 ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Empleo - Emprendimiento</td>
                                <td class="text-center"><?php echo $tema7 ?></td>
                            </tr>
                            <tr class="bg-warning">
                                <!-- <td></td> -->
                                <td colspan="2" class="text-center"><strong>TOTAL</strong></td>
                                <td class="text-center"><strong><?php echo $total = $tema1+$tema2+$tema3+$tema4+$tema5+$tema6+$tema7 ?></strong></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <!-- <p class="card-text">TEMA: Salud y prevención</p>
                    <p class="card-text">TEMA: Cultura, turismo y deporte</p>
                    <p class="card-text">TEMA: Participación juvenil</p>
                    <p class="card-text">TEMA: Medio ambiente</p>
                    <p class="card-text">TEMA: Inclusión</p>
                    <p class="card-text">TEMA: Empleo - Emprendimiento</p>
                     -->

                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
             </div>

        </div>
      </main>
    </div>
  </div>

</main>

<footer class="text-muted bg-dark py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Arriba</a>    
    </p>
    <p class="mb-1 text-light">
      
          <img src="assets/brand/img/logo_completo_blanco.png" width="300" alt="">
       
    </p>
    <p class="text-end text-light"><small><strong>Desarrollo:</strong> INJUVENTUD / Departamento Tecnologías de la Información.</small></p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>



<!-- zona de modal -->

<!-- Modal acceso -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reporte datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-question-circle"></i>  </span>
            <input type="text" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Acceso</button>
      </div>
    </div>
  </div>
</div>

<!-- modal video -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary text-center"> FORO LEY ESTATAL DE LA JUVENTUD</h5>
      </div>
      <div class="modal-body">
        <p><iframe width="100%" height="500" src="https://www.youtube.com/embed/DLWWwP4UfDg?controls=0&rel=0&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
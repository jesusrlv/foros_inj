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

    <script src="js/script.js" type="text/javascript"></script>

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
        <strong>INJUVENTUD</strong>
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
        <h1 class="fw-light" id="textoTitulo"><strong>PROGRAMA ESTATAL DE LA JUVENTUD</strong></h1>
      </div>
    </div>
  </section>
</div>

  <div class="album py-5 bg-light">
    <div class="container">

      <main>
          <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">DATOS PERSONALES</h4>
            <form action="prcd/save.php" method="POST" class="needs-validation" name="submit">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nombre(s)</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nombre" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" name="apellido" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Género</label>
                  
                  <select class="form-select" aria-label="Default select example" name="genero" required>
                    <option value="">Seleccionar ...</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="No contestó">Prefiero no contestar</option>
                  </select>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Edad</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" name="edad" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Municipio</label>
                  <select class="form-select" aria-label="Default select example" id="municipio" name="procedencia" required>
                    <option value="">Selecciona ...</option>
                    <?php
                        include('query/municipio.php');
                        while($row_sqlMun = $resultado_sqlMun->fetch_assoc()){
                          echo '<option value="'.$row_sqlMun['municipio'].'">'.$row_sqlMun['municipio'].'</option>';
                        } 
                    ?>
                  </select>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Correo electrónico</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" name="email" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <div class="col-sm-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkExtranjero" onclick="EnableDisabled()">
                        <label class="form-check-label mb-1" for="flexCheckDefault">
                            ¿Resides en el extranjero?
                        </label>
                    </div>
                    <input type="text" class="form-control" id="extranjero" placeholder="Lugar de residencia" value="" disabled>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
             
              </div>
              <div class="col-md-12 col-lg-12">
                <hr class="my-4">
                <h4 class="mb-3">TEMA: EDUCACIÓN</h4>
                <div class="row g-3">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-text">Propuesta</span>
                      <textarea class="form-control" aria-label="With textarea" rows="4" name="tema1" style="resize:none;" id="contEducacion" onkeypress="validacioncaracteres();" onkeydown="validacioncaracteres();" data-max=30></textarea>
                    </div>
                    <small class="text-muted">Cantidad de caracteres: <span id="caracteresMed">300 restantes</span></small>
                  </div>
                </div>
              </div>

          

              <div class="col-md-12 col-lg-12">
                <hr class="my-4">
                <h4 class="mb-3">TEMA: SALUD Y PREVENCIÓN</h4>
                <div class="row g-3">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-text">Propuesta</span>
                      <textarea class="form-control" aria-label="With textarea" rows="4" name="tema2" style="resize:none;" id="contSalud" onkeypress="validacioncaracteresSalud();" onkeydown="validacioncaracteresSalud();"></textarea>
                        
                    </div>
                    <small class="text-muted">Cantidad de caracteres: <span id="contador_salud">300 restantes</span></small>
                  </div>
                </div>
              </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
            <h4 class="mb-3">TEMA: CULTURA, TURISMO Y DEPORTE</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-text">Propuesta</span>
                  <textarea class="form-control" aria-label="With textarea" rows="4" name="tema3" style="resize:none;" id="contCultura" onkeypress="validacioncaracteresCultura();" onkeydown="validacioncaracteresCultura();"></textarea>
                </div>
                <small class="text-muted">Cantidad de caracteres: <span id="contador_cultura">300 restantes</span></small>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
            <h4 class="mb-3">TEMA: PARTICIPACIÓN JUVENIL</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-text">Propuesta</span>
                  <textarea class="form-control" aria-label="With textarea" rows="4" name="tema4" style="resize:none;" id="contParticipacion" onkeypress="validacioncaracteresParticipacion();" onkeydown="validacioncaracteresParticipacion();"></textarea>
                </div>
                <small class="text-muted">Cantidad de caracteres: <span id="contador_participacion">300 restantes</span></small>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
            <h4 class="mb-3">TEMA: MEDIO AMBIENTE</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-text">Propuesta</span>
                  <textarea class="form-control" aria-label="With textarea" rows="4" name="tema5" style="resize:none;" id="contMAmbiente" onkeypress="validacioncaracteresMAmbiente();" onkeydown="validacioncaracteresMAmbiente();"></textarea>
                </div>
                <small class="text-muted">Cantidad de caracteres: <span id="contador_mambiente">300 restantes</span></small>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
            <h4 class="mb-3">TEMA: INCLUSIÓN</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-text">Propuesta</span>
                  <textarea class="form-control" aria-label="With textarea" rows="4" name="tema6" style="resize:none;" id="contInclusion" onkeypress="validacioncaracteresInclusion();" onkeydown="validacioncaracteresInclusion();"></textarea>
                </div>
                <small class="text-muted">Cantidad de caracteres: <span id="contador_inclusion">300 restantes</span></small>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
            <h4 class="mb-3">TEMA: EMPLEO - EMPRENDIMIENTO</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-text">Propuesta</span>
                  <textarea class="form-control" aria-label="With textarea" rows="4" name="tema7" style="resize:none;" id="contEmprendimiento" onkeypress="validacioncaracteresEmprendimiento();" onkeydown="validacioncaracteresEmprendimiento();"></textarea>
                </div>
                <small class="text-muted">Cantidad de caracteres: <span id="contador_emprendimiento">300 restantes</span></small>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <hr class="my-4">
    
            <button class="w-100 btn btn-primary btn-lg" type="submit" id="buttonSubmit" disabled>Enviar propuesta</button>
          </form>
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
      <form action="prcd/acceso.php" method="POST">
      <div class="modal-body">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
            <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" name="usr" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-question-circle"></i>  </span>
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" name="pwd" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Acceso</button>
      </form>
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
      
        <p><iframe width="100%" height="500" src="https://www.youtube.com/embed/OQG0wa6htMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
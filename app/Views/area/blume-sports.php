<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>



    <div class="cabecera" style="background-image: url('<?= base_url(); ?>public/img/area/blume/abril-17-sesion-leone-gym-blume-3-3.jpg')">

    
      <?= $this->include('botones-redes'); ?>
        

    </div>


        <br>
        <div class="row">
        
          <div class="col-sm-4" style="margin-top: -115px;">
            <nav class="navbar navbar-expand-md navbar-dark centrado">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Menú
              </button>
              <div class="collapse navbar-collapse navbar-menu" id="navbarCollapse">
                <ul class="navbar-nav">
                  <div>
                    <?= $this->include('botones-menu'); ?>
                  </div>
                </ul>
              </div>
            </nav>
          </div>



          <div class="col-sm-6">
            
            <br>
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                  <li class="breadcrumb-item">  
                    <a class="" href=<?= base_url(); ?> style="color: red;">
                      <i class="bi bi-house-fill"></i>
                      Inicio
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="" style="color: red;">
                      Blume Sports
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

          



            <!-- sala fitness -->
            <div class="container-fluid banner px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
                  <div class="col-12 col-sm-8 col-lg-6 text-center">
                    <video src="<?= base_url(); ?>public/videos/VID_73451219_114139_293.mp4" autoplay controls></video>
                  </div>
                  <div class="col-lg-6">
                    <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Fitness</h3>
                    <p class="lead">Conoce nuestra sala fitness, una sala dotada con maquinas de calidad, variedad de agarras y pesos libres para que puedas realizar las rutinas más completas, siempre acompañado por uno de nuestro monitores capacitados.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                  </div>
                </div>
            </div>
            
          </div>

        </div>




        

          <div class="container-fluid banner px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
              <div class="col-12 col-sm-12 col-lg-6">
                
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/combate1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/combate2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/2024-10-14.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="col-lg-6">
                <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Conócenos</h3>
                <p class="lead">Somos un centro deportivo de alta calidad con espacios dedicados al fitness y la preparación física. Contamos con un personal preparado para guiarte en cada paso de tu proceso, siempre rodeado de un ambiente agradable y familiar. Prepárate para vivir la experiencia blume.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
              </div>
            </div>
          </div>

        
        <!-- fin sala fitness -->





        <!-- spinning -->
        <div class="container-fluid banner px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
            <div class="col-12 col-sm-8 col-lg-6 text-center">
              <video src="<?= base_url(); ?>public/videos/intro-blume.mp4" autoplay controls></video>
            </div>
            <div class="col-lg-6">
              <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Spinning</h3>
              <p class="lead">Atrévete a subir tus pulsaciones, sumergirte en los bits y los juegos de luces en nuestras clases de spinning. Pensadas para hacerte dar todo de ti, quemar calorías y divertirte al mismo tiempo.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
              </div>
            </div>
          </div>
        </div>







       



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
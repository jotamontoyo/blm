<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>



    <div class="cabecera" style="background-image: url('<?= base_url(); ?>public/img/fondos/muay/cabecera-muay.jpg')">

    
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
                      Nakmuay
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

          



            <!--  -->
            <div class="container-fluid banner px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
                  <div class="col-12 col-sm-8 col-lg-6 text-center">
                    <video id="video-muay" src="<?= base_url(); ?>public/videos/video-muay.mp4" autoplay controls></video>
                  </div>
                  <div class="col-lg-6">
                    <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nakmuay club</h3>
                    <p class="lead">Bienvenido a NAKMUAY nuestro club deportivo dedicado al MUAYTHAI, donde también encontrarás otras artes marciales como boxeo, jiu jitsu, MMA y aikido siendo todas clases en las que podrás participar sin importar tu nivel.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <div class="botones_banner"><a id="boton-reproducir-muay" class="btn btn-primary sombra">Ver video</a></div>
                    </div>
                  </div>
                </div>
                <script>
                  $(document).ready(function () {
                    $(document).on('click','#boton-reproducir-muay',function() {
                      var video = document.getElementById('video-muay');
                      video.play();
                    });
                  });
                </script>
            </div>
            
          </div>

        </div>




        

          <div class="container-fluid banner">
            <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
              <div class="col-12 col-sm-12 col-lg-6">
                
                <div id="carouselFitness" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/fitnnes/fitness2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/fitnnes/fitness3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/fitnnes/fitness4.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
              </div>
              

              <!-- <div class="col-lg-6">
                <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Conócenos</h3>
                <p class="lead">Somos un centro deportivo de alta calidad con espacios dedicados al fitness y la preparación física. Contamos con un personal preparado para guiarte en cada paso de tu proceso, siempre rodeado de un ambiente agradable y familiar. Prepárate para vivir la experiencia blume.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
              </div> -->
            </div>
          </div>

        
        <!-- fin sala fitness -->





        <!-- spinning -->
        <div class="container-fluid banner px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
            <div class="col-12 col-sm-8 col-lg-6 text-center">
              <video id="video-spinnig" src="<?= base_url(); ?>public/videos/video-spinning.mp4" autoplay style="max-height: 500px" width="100%"></video>
            </div>
            <div class="col-lg-6">
              <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Spinning</h3>
              <p class="lead">Atrévete a subir tus pulsaciones, sumergirte en los bits y los juegos de luces en nuestras clases de spinning. Pensadas para hacerte dar todo de ti, quemar calorías y divertirte al mismo tiempo.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <div class="botones_banner"><a id="boton-reproducir-spinning" class="btn btn-primary sombra">Ver video</a></div>
              </div>
            </div>
          </div>
          <script>
            $(document).ready(function () {
              $(document).on('click','#boton-reproducir-spinning',function() {
                var video = document.getElementById('video-spinnig');
                video.play();
              });
            });
          </script>
        </div>


        <div class="container-fluid banner">
            <div class="row align-items-center py-5 shadow-lg" >

              <div class="col-lg-6">
                <div id="carouselSpinning" class="carousel slide carousel-fade" data-bs-ride="carousel" style="max-width: 300px;">
                  <div class="carousel-inner">
                    <div class="carousel-item active img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/spinning/spn1.jpg" class="d-block w-100" alt="..." style="min-height: 500px; max-height: 500px;">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/spinning/spn2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/spinning/spn3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid">
                      <img src="<?= base_url(); ?>public/img/fondos/spinning/spn4.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <!-- <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Conócenos</h3>
                <p class="lead">Somos un centro deportivo de alta calidad con espacios dedicados al fitness y la preparación física. Contamos con un personal preparado para guiarte en cada paso de tu proceso, siempre rodeado de un ambiente agradable y familiar. Prepárate para vivir la experiencia blume.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div> -->
              </div>

            </div>
        </div>




          


       



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>



    <div class="cabecera" style="background-image: url('<?= base_url(); ?>public/img/fondos/box/box1.jpg')">

    
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
                      Nuestros monitores
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

          



            <!--  -->
            <div class="container-fluid banner px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
                  <div class="col-12 col-sm-8 col-lg-6 text-center">
                    <video id="video-monitores" src="<?= base_url(); ?>public/videos/video-monitores.mp4" autoplay controls></video>
                  </div>
                  <div class="col-lg-6">
                    <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Monitores</h3>
                    <p class="lead">Conoce a nuestros monitores e integrantes de la familia blume sports, así como nuestros planes de entrenamiento particulares y para grupos reducidos.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <div class="botones_banner"><a id="boton-reproducir-monitores" class="btn btn-primary sombra">Ver video</a></div>
                    </div>
                  </div>
                </div>
                <script>
                  $(document).ready(function () {
                    $(document).on('click','#boton-reproducir-monitores',function() {
                      var video = document.getElementById('video-monitores');
                      video.play();
                    });
                  });
                </script>
            </div>
            
        </div>

    </div>


    <!-- album -->
            <div class="album py-5 bg-body-tertiary">
                <div class="container">
  
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Jesús Mancheño</h5>
                            <p class="card-text">Jesús es el líder de nuestro equipo de trabajo, con el podrás no solo atender tus clases particulares de fitness, funcional o muaythai, también podrás probar su servicio de madero terapia y masajes.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Steven</h5>
                            <p class="card-text">Aunque los entrenamientos funcionales son su fuerte, Steven tiene un largo recorrido en el mundo del fitness, te ayudara y guiará paso a paso en el proceso para alcanzar tus objetivos.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Isabel</h5>
                            <p class="card-text">Isabel cuenta con un largo historial competitivo en el mundo del fitness, por lo que sus conocimientos la posicionan como una de las mejores monitoras a la hora de trazarse una meta a nivel físico y deportivo.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Hazma</h5>
                            <p class="card-text">Hamza cuenta con años de experiencia en la modalidad de muaythai, sumando varias experiencias a nivel competitivo que le otorgan total capacidad para enseñar este maravilloso arte. Con él podrás optar por tus clases particulares de muaythai.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Jonathan</h5>
                            <p class="card-text">Jonathan es un apasionado de la salud, con un amplio conocimiento en el mundo del crosstraining y una formación profesional en nutrición, cuenta con todo lo necesario para ayudarte a alcanzar tus objetivos.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <div class="centrado">
                          <img src="<?= base_url(); ?>public/img/rrhh/jesus.jpg" alt="" >
                        </div>
                        <div class="card-body">
                            <h5 class="centrado">Charlotte</h5>
                            <p class="card-text">Charlotte tiene años de experiencia a nivel competitivo y una amplia formación en deportes, por lo que sus rutinas de entrenamiento son completas y adaptadas a tus capacidades.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>



            </div><!-- fin album -->

<style>
    .card-body {
        min-height: 100%;
    }
</style>


        

          




          


       



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
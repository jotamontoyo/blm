<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






<!-- 1ª seccion -->

  

                <div class="container-fluid">

                  <div style="position: relative; z-index: 10000;">

                    <div class="text-center">

                      <div class="d-flex justify-content-between align-items-center">
                        <ul class="redes">
                          <li class="icon facebook">
                              <span class="tooltip">Facebook</span>
                              <span><i class="fab fa-facebook-f"></i></span>
                          </li>
                          <li class="icon twitter">
                              <span class="tooltip">Twitter</span>
                              <span><i class="fa-brands fa-x-twitter"></i></span>
                          </li>
                          <li class="icon instagram">
                              <span class="tooltip">Instagram</span>
                              <span><i class="fab fa-instagram"></i></span>
                          </li>
                          <li class="icon linkedin">
                              <span class="tooltip">Linkedin</span>
                              <span><i class="fab fa-linkedin"></i></span>
                          </li>
                          <li class="icon pinterest">
                              <span class="tooltip">Youtube</span>
                              <span><i class="fab fa-youtube"></i></span>
                          </li>
                          <li class="icon telegram">
                              <span class="tooltip">Telegram</span>
                              <span><i class="fab fa-telegram"></i></span>
                          </li>
                        </ul>
                      </div>



                      <div class="row">
                        <h1 class="centrado display-4 titulo-index"><b> BLUME SPORTS CENTER <img class="img_logo_rotulos" src="public/img/logos/logo-blm.png" alt=""></b></h1>
                      </div>

                    </div>


                    <div class="row">

                    <div class="col-sm-4">
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

                    <div class="col-sm-8 centrado">
                      <div><img src="public/img/logos/logo-blm2.png" class="img_logo_seccion1" alt=""></div>
                      <a href="formularios/solicitud-afiliacion" type="button" class="btn btn-lg boton-bajo-logo"><i class="bi bi-person-plus-fill"></i>  &nbsp;Entrenar</a>
                    </div>

                    </div>


                  </div>

                



                  

                  <div id="back-carousel" class="carousel slide carousel-fade back-carousel" data-bs-ride="carousel">
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
                      <div class="carousel-item img-fluid">
                        <img src="<?= base_url(); ?>public/img/area/blume/abril-17-sesion-leone-gym-blume-3-3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>



                </div>
  




  






<!-- conocenos banner -->
  <div class="container-fluid banner px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
      <div class="col-12 col-sm-8 col-lg-6 text-center">
        <video src="<?= base_url(); ?>public/videos/jorge_esgtrada.mp4" autoplay controls style="max-height: 500px" width="100%"></video>
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






<!-- areas -->
  <div class="container text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold">Nuestras áreas</h1>
      <div class="mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="container px-4" id="custom-cards">
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
            
            <div class="col">
              <a href="<?= base_url(); ?>area/blume-sports">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url(); ?>public/img/fondos/fachada.jpg'); background-size: cover; background-position: center;">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
                    <h6 class="fw-bold centrado">Blume Sports</h6>
                    <p>
                      Nuestra sala fitness se caracteriza por brindar un espacio agradable y completo para tus entreno; además podrás ver como en nuestras actividades grupales tus compañeros de entreno y monitor, no permitirán que nadie quede atrás. ¡A darlo todo!
                    </p>
                  </div>
                </div>
              </a>
            </div>
            
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url(); ?>public/img/fondos/fachada.jpg'); background-size: cover; background-position: center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
                  <h6 class="fw-bold centrado">Blume Sports</h6>
                  <p>
                    Nuestra sala fitness se caracteriza por brindar un espacio agradable y completo para tus entreno; además podrás ver como en nuestras actividades grupales tus compañeros de entreno y monitor, no permitirán que nadie quede atrás. ¡A darlo todo!
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url(); ?>public/img/fondos/combate1.jpg'); background-size: cover; background-position: center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h6 class="fw-bold centrado">Nakmuay Thai</h6>
                  <p>
                    Nuestra sala fitness se caracteriza por brindar un espacio agradable y completo para tus entreno; además podrás ver como en nuestras actividades grupales tus compañeros de entreno y monitor, no permitirán que nadie quede atrás. ¡A darlo todo!
                  </p>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>





<!-- actividades -->
  <div class="container px-4 py-5" id="icon-grid">
    
    <h2 class="pb-2 border-bottom text-center">Actividades</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4 py-5">
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/medalla-de-oro.png" alt="" style="max-width: 15%">
        <div>
          <h4 class="fw-bold mb-0"> AVANZADOS</h4 >
          <figcaption class="blockquote-footer">
            <p>Si eres un apasionado del fitness y cuentas con años de experiencia en el mundo de las pesas, seguro te gustará conocer nuestra sala fitness, en la que contamos con una gran variedad de maquinas, agarres y pesos libres, para no te falte nada cuando de mover peso se trate.</p>
          </figcaption>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/actividades.png" alt="" style="max-width: 15%">
        <div>
          <h4 class="fw-bold mb-0"> &nbsp;ACTIVIDADES</h4 >
          <figcaption class="blockquote-footer">
            <p>Contamos con unas 10 de actividades dirigidas spining, yoga, crosstraining entre otras, además de unas salas adecuadas con todo los materiales necesarios y personal capacitado para que tengas una gran experiencia en tus entrenamientos.</p>
          </figcaption>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/muay-thai.png" alt="" style="max-width: 17%">
        <div>
          <h4 class="fw-bold mb-0"> ARTES MARCIALES</h4 >
          <figcaption class="blockquote-footer">
            <p>Si lo tuyo son las artes marciales nuestro club NAKMUAY encontraras la actividad de tu preferencia. Nuestro base es el muaythai, modalidad en la que contamos con competidores de gran nivel; además de nuestras clases de aikido y boxeo.</p>
          </figcaption>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/clases-particulares.png" alt="" style="max-width: 15%">
        <div>
          <h4 class="fw-bold mb-0"> CLASES PARTICULARES</h4 >
          <figcaption class="blockquote-footer">
            <p>Si prefieres tener un acompañamiento durante todo tu entreno puedes optar por nuestro servicio de clases particulares, donde el monitor estará contigo para seguirte en cada repetición.</p>
          </figcaption>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/plan-entreno.png" alt="" style="max-width: 15%">
        <div>
          <h4 class="fw-bold mb-0"> PLANES DE ENTRENO</h4 >
          <figcaption class="blockquote-footer">
            <p>Si estas cansado de la típica rutina básica y buscas un plan de entreno ajustado a tus necesidades y tiempos de trabajo, consulta con nuestro equipo de trabajo sobre los planes de entrenamiento personalizados.</p>
          </figcaption>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="<?= base_url(); ?>public/img/logos/guia-nutricion.png" alt="" style="max-width: 15%">
        <div>
          <h4 class="fw-bold mb-0"> GUÍAS DE NUTRICIÓN</h4 >
          <figcaption class="blockquote-footer">
            <p>Para que puedes tener unos buenos resultados luego de tanto esfuerzo, sabrás que la alimentación es parte importante del proceso, por lo que aprender a llevar tu nutrición será muy importante para cumplir tus metas, nuestro equipo esta preparado para guiarte.</p>
          </figcaption>
        </div>
      </div>
      
    </div>
  </div>






  
<!-- google map -->
  <div class="container-fluid banner px-4 py-5 ">
    <div class="row flex-lg-row-reverse align-items-center py-5 shadow-lg">
      <div class="col-lg-6" id="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4421.843968607195!2d-0.5227532328131046!3d38.401818481525765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6231548fc44a6b%3A0x2fa78335cdf9206e!2sBlume%20Sports%20Center!5e0!3m2!1ses!2ses!4v1729102247556!5m2!1ses!2ses" width="100%" height="400"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6">
        <h3 class="display-6 fw-bold text-body-emphasis lh-1 mb-3">Encuéntranos aquí</h3>
        <p class="lead">Elige el centro que mejor se adapte a tus necesidades.</p>
          <div class="botones_map">
            <a onclick="map_blume()" type="button" class="btn btn-primary sombra">Blume Sports Center</a>
          </div>
          <div class="botones_map">
            <a onclick="map_box()" type="button" class="btn btn-primary sombra">Blume Box</a>
          </div>
      </div>
    </div>
  
    <script>
      function map_blume() {
        document.getElementById("map").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4421.843968607195!2d-0.5227532328131046!3d38.401818481525765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6231548fc44a6b%3A0x2fa78335cdf9206e!2sBlume%20Sports%20Center!5e0!3m2!1ses!2ses!4v1729102247556!5m2!1ses!2ses" width="100%" height="400"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
      }
      function map_box() {
        document.getElementById("map").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.17651327777!2d-0.5451830243039942!3d38.40367807030032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd62332608559423%3A0xe8bc1d056ab18a93!2sBlumebox%20Centro%20Deportivo%20-%20Box%20en%20San%20Vicente%20del%20Raspeig!5e0!3m2!1ses!2ses!4v1729151510168!5m2!1ses!2ses" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
      }
    </script>

  </div>

  <br><br>
  



  





<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
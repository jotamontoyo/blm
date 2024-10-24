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
                      Horario Box
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

            <div>
                <?= $this->include('docs/horario-box'); ?>
            </div>



        </div>



    </div>




<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    </br>
    </br>
    <h3>Inicio</h3>
</div>
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo e(asset('img/help-desk-illustration2.png')); ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <h5>Soluciones Ágiles</h5>
          <p style="font-color:black">CRAL el sistema que soluciona tus problemas tecnicos</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo e(asset('img/device-3411385_1920.jpg')); ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"  src="<?php echo e(asset('img/call-center-2944063_1920.jpg')); ?>" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
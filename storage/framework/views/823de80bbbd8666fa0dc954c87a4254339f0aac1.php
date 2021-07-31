<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-warning">
      <a class="navbar-brand" href="#">
        <i class="bi bi-music-note-beamed"></i>
        Hit Record
      </a>
    </nav>
    <div class="jumbotron jumbotron-fluid p-0 bg-info text-white">
      <div class="container">
        <h1 class="display-4">Apa Itu Website Hit Record ?</h1>
        <p class="lead">Sebuah lagu hit , juga dikenal sebagai rekor hit , hit single atau hanya hit , adalah rekaman lagu atau instrumental yang menjadi luas populer atau terkenal. Meskipun lagu hit berarti lagu yang diputar secara luas atau lagu yang laris, istilah khusus hit record biasanya mengacu pada single yang telah muncul di tangga musik resmi melalui tayangan pemirsa siaran radio yang berulang , atau data streaming yang signifikan dan penjualan komersial.</b>.</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,176C384,160,480,96,576,90.7C672,85,768,139,864,144C960,149,1056,107,1152,90.7C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Daftar Lagu Hit</h1>
          <h2>Nama Penyanyinya</h2>
          <ul class="list-group"> 
            <?php $__currentLoopData = $artis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
                <?php echo e($a->artist_name); ?>

              </li>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <h2>Albumnya</h2>
          <ul class="list-group">
            <?php $__currentLoopData = $album; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
                <?php echo e($a->album_name); ?>

              </li>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <h2>Nama Lagunya Dan Durasi Lagu</h2>
          <ul class="list-group">
            <?php $__currentLoopData = $track; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
                <?php echo e($t->track_name); ?> <?php echo e($t->time); ?>

              </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <h2>Waktu Lagu Hitnya Ditambahkan</h2>
          <ul class="list-group">
            <?php $__currentLoopData = $played; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
                <?php echo e($p->played); ?>

              </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#17a2b8" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,133.3C384,128,480,160,576,144C672,128,768,64,864,53.3C960,43,1056,85,1152,117.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer class="bg-info text-white text-center p-3">
      <p>Hit Record &copy; 2021</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\xampp\htdocs\project\uaspbwlmusic\resources\views/v_music.blade.php ENDPATH**/ ?>
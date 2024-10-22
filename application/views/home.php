<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('Assets/css/bootstrap.css'); ?>">
    <script src="<?= base_url('Assets/js/bootstrap.bundle.min.js'); ?>"></script>
</head>
<body>
    <div class="container">
       <div class="row">

       <div class="col-md-12">
        <nav class="navbar navbar-dark bg-dark">
            <a href="" class="navbar-brand">Mini_Project</a>
            <a href="<?= base_url('Login/login'); ?>" class="btn btn-warning ps-3 me-3">Login</a> 
        </nav>
       </div>
       </div>

       <div class="row mt-1">

       <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('Assets/images/bullet2.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('Assets/images/bullet3.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

       </div>

    </div>

    
</body>
</html>
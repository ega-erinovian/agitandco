<?php 
  include 'model/connect.php'; 
  date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/me.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/me.png" type="image/x-icon">
    <title>Agit & Co | Protofolio Details</title>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
</head>
<body>
        <?php 
          $query = mysqli_query($connect, "SELECT * FROM projects WHERE id_project='$_GET[id_project]'");
          while($data=mysqli_fetch_array($query)){
            $id_project = $data[0];
            $name       = $data[1];
            $lokasi     = $data[2];
            $youtube    = $data[3];
            $kategori   = $data[4];
            $img_files  = $data[5];
            $deskripsi  = $data[6];
          }

          $array_imgs = explode(",", $img_files);
        ?>
    <section class="portfolio-details">
      <header class="portfolio1" <?php if($youtube == "") { ?>
        style="background-image: linear-gradient(#2b262384,#2b262384),url(<?='assets/img/portofolio/'.$id_project.'/'.$array_imgs[0];?>);"
      <?php } ?>>
        <nav class="navbar navbar-expand-lg wow fadeInDown">
          <div class="container">
            <a class="navbar-brand" href="./index.php">
              <img src="assets/img/me.png" alt="logo" width="75" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link me-4" href="index.php" id="navLink">Home</a>
                <a class="nav-link me-4" href="./journal.php?page-nr=1" id="navLink">Journal</a>
                <a class="nav-link me-4 active" href="./portfolio.php" id="navLink">Portofolio</a>
                <a class="nav-link me-4" href="about.php" id="navLink">About Us</a>
                <a class="nav-link me-4" href="contact.php" id="navLink">Contact</a>
              </div>
            </div>
          </div>
        </nav>
        <div class="portfolio-details-title text-center w-100 h-75 d-flex flex-column align-items-center justify-content-center wow fadeInUp">
          <p><?= $kategori ?></p>
          <h1><?= $name ?> | <?= $lokasi ?></h1>
        </div>
        <div class="scrolldown text-light text-center w-100">
          <i class="bi bi-arrow-down"></i>
        </div>
        <?php 
        if(!empty($youtube) && $kategori!="Film")
        {
          echo'<div id="video-background" class="video-container"</div>';
        }
        
        ?>
        <?php ?>
      </header>
      <div class="portfolio-details-content py-5 wow fadeInDown">
        <div class="container w-100 d-flex flex-column align-items-center justify-content-center">
          <div class="portfolio-comp-logo w-100 d-flex align-items-center justify-content-center">
            <img src="assets/img/me.png" alt="logo" width="50" />
          </div>
          <div class="portfolio-details-description container mt-5 w-50">
            <p class="fw-bolder fs-6 mb-0"><?= $lokasi ?></p>
            <h1 class="me-2 mb-0"><?= $name ?></h1>
            <p class="mt-3 mb-0 text-dark"><?= $deskripsi ?></p>
          </div>
          <div class="portfolio-details-gallery container d-flex flex-wrap justify-content-center mt-5 g-4 wow fadeInRight">
          <?php
            if($kategori != "Film"){
              $array_imgs = explode(",", $img_files);
              $i = 0;
              foreach ($array_imgs as $img) {
                $i++;
          ?>
            <img id="portfolio-image" src="<?='assets/img/portofolio/'.$id_project.'/'.$img;?>" alt="portfolio">
          <?php
              }}else{
          ?>
            <iframe width="100%" height="352" src=<?= "https://www.youtube.com/embed/".$youtube ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <?php } ?>
        </div>
    
        </div>
      </div>
      <div class="back-link container">
        <a href=<?= "portfolios.php?page-nr=1&kategori=".$kategori ?>><i class="bi bi-arrow-left"></i><?= " Back to ".$kategori ?></a>
      </div>
      <?php include("footer.html"); ?>
      <?php include("backToTop.html"); ?>
    </section>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/wow.min.js"></script>
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      var wow = new WOW();
    wow.init();
    </script>
    <script>
      var images = document.querySelectorAll('.portfolio-details-gallery img');

      images.forEach(function(image) {
        var img = new Image();
        img.src = image.src;

        img.addEventListener('load', function() {
          var threshold = 1; // Ubah sesuai dengan rasio yang diinginkan (misal: 1.5 untuk landscape)

          if (img.naturalWidth / img.naturalHeight > threshold) {
            // Gambar memiliki rasio landscape (lebar lebih besar dari tinggi)
            image.classList.add('w-100');
          } else {
            // Gambar tidak memiliki rasio landscape
            image.classList.add('w-50');
          }
        });

        img.addEventListener('error', function() {
          console.log('Gagal memuat gambar');
        });
  });
</script>
<script>
  // Dapatkan referensi ke elemen video-background
var videoBackground = document.getElementById('video-background');

// Buat iframe untuk video YouTube
var videoIframe = document.createElement('iframe');
videoIframe.src = 'https://www.youtube.com/embed/<?=$youtube?>?autoplay=1&mute=1&loop=1&controls=0&modestbranding=1&showinfo=0&quality=hd720';
videoIframe.setAttribute('allowfullscreen', '');
videoIframe.setAttribute('frameborder', '0');
videoIframe.setAttribute('width', '100%');
videoIframe.setAttribute('height', '100%');

// Tambahkan iframe ke dalam elemen video-background
videoBackground.appendChild(videoIframe);

</script>

</body>
</html>

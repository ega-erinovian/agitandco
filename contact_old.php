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
    <title>Agit & Co | Contact Us</title>
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
    <section class="contact-section">
        <!-- Animated navbar-->
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
        <!-- <div class="overlay"></div> -->
        <!-- Animated navbar -->
        <?php
            $query = mysqli_query($connect, "SELECT * FROM background WHERE tempatgambar='contact'");
            while($data=mysqli_fetch_array($query)){
              $id_gambar            =$data[0];
              $tempatgambar         =$data[1];
              $img_files            =$data[2];
            }

            if(isset($img_files)){
                $array_imgs = explode(",", $img_files);
            }
        ?>
        <div class="contact-container row wow fadeIn">
            <div class="col-lg-6 visible-md visible-lg contact-bg Aligner" style="background-image:linear-gradient(#1a1a1a69,#1a1a1a69), url(<?='assets/img/page/'.$array_imgs[0]?>);vertical-align: top;"></div>
            <div class="col-lg-6 visible-md visible-lg">
                <div class="contact-section-form" style="max-width: 550px; margin: auto; padding-top: 100px; padding-left: 50px; padding-right: 50px;">
                    <h1 class="source-semibold visible-xs visible-sm">Contact</h1>
                    <p class="work-regular mb-50">
                        <p>Drop us a message to start your adventure with us.</p>
                    </p>
                    <?php 
                        function randString($length) {
                            $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                            $char = str_shuffle($char);
                            for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
                                $rand .= $char{mt_rand(0, $l)};
                            }
                            return $rand;
                        }
                    
                        for($i = 0; $i < 10 ; $i++)
                        {
                            $id_pesan = randString(5);
                        }
                    ?>
                    <form action="model/proses_contact.php" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <input type="hidden"  value="tambah" name="kelola" />
                            <input type="hidden" name="id_pesan" value="<?= $id_pesan?>">
                            <label for="" class="text-black work-medium">Name</label><br>
                            <input type="text" class="contactInput" name="name">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-black work-medium">Email</label><br>
                            <input type="text" class="contactInput" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-black work-medium">Message</label> <br>
                            <textarea name="message" id="" cols="30" rows="6" class="contactTextArea text-black"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" class="contactSubmitButton text-black work-medium hoverOpacity">
                        </div>
                    </form>                    
                    <br/>
                    <!-- <img src="assets/img/doodle5.png" style="position: relative;width: 200px; left: -120px;" class="visible-xs visible-sm"> -->
                </div>
                <p class="miring wow fadeIn work-medium visible-md visible-lg ">Contact</p>
            </div>
        </div>
        <?php include("backToTop.html"); ?>
        <?php include("footer.html"); ?>
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
    <script src="assets/js/wow.min.js"></script>

    <script>
        // Init WOW.js and get instance
        var wow = new WOW();
        wow.init();
    </script>
</body>
</html>
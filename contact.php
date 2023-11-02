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
    <title>Agit & Co | Portofolio</title>
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
    <div class="contact-page">
        <!-- CONTACT HEADER -->
        <header class="contact-header">
            <!-- NAVBAR -->
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
            <div class="row align-items-center">
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
                        <a class="nav-link me-4" href="./portfolio.php" id="navLink">Portofolio</a>
                        <a class="nav-link me-4" href="about.php" id="navLink">About Us</a>
                        <a class="nav-link me-4 active" href="contact.php" id="navLink">Contact</a>
                      </div>
                    </div>
                </div>
            </nav><!-- END OF NAVBAR -->
                <div class="col-lg-6 contact-bg">
                    <img src="'https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80'" alt="" srcset="">
                </div>
                <div class="col-lg-6 contact-form">
                    <div class="container">
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
                        <h1 class="text-center mt-5">CONTACT US</h1>
                        <form id="contact-form" name="myForm" class="form px-5" action="model/proses_contact.php" method="post" accept-charset="utf-8" role="form">
                            <input type="hidden"  value="tambah" name="kelola" />
                            <input type="hidden" name="id_pesan" value="<?= $id_pesan?>">
                            <div class="form-group">
                                <label class="form-label" id="nameLabel" for="name"></label>
                                <input type="text" class="form-control text-dark" id="name" name="name" placeholder="Your name" tabindex="1">
                            </div>

                            <div class="form-group">
                                <label class="form-label" id="emailLabel" for="email"></label>
                                <input type="email" class="form-control text-dark" id="email" name="email" placeholder="Your Email" tabindex="2">
                            </div>

                            <div class="form-group">
                                <label class="form-label" id="messageLabel" for="message"></label>
                                <textarea rows="6" cols="60" name="message" class="form-control text-dark" id="message" placeholder="Your message" tabindex="4"></textarea>                                 
                            </div>

                            <div class="text-center margin-top-25">
                                <button type="submit" class="btn btn-dark btn-mod btn-border btn-large mb-5">Send Message</button>
                            </div>
                        </form><!-- End form -->
                    </div>
                </div>
            </div>
            <?php include("backToTop.html"); ?>
            <?php include("footer.html"); ?>
        </header>
        <!-- END OF CONTACT HEADER -->
    </div>
    
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
        // Init WOW.js and get instance
        var wow = new WOW();
        wow.init();
    </script>
</body>
</html>
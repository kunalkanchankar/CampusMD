<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CampusMaiDhundo - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: CampusMaiDhundo - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-CampusMaiDhundo/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>CampusMaiDhundo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.html">Home</a></li>
          <li><a href="signinn.html">Sign Up</a></li>
          <li><a href="products.html">Products</a></li>
          <li class="dropdown"><a href="#"><span>Settings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Your Account</a></li>
              <li><a href="#">Your Order</a></li>
              <li class="dropdown"><a href="about.html"><span>About Your Project</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="about.html">Description</a></li>
                  <li><a href="team.html">Team</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
    
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>  <!-- </nav>.navbar -->
    </div>
  </header><!-- End Header -->


  <main id="main">
      <!-- ======= Signin Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign Up</h2>
          <ol> 
            <li><a href="index.html">Home</a></li>
            <li>Sign Up</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Product Section -->
    <!-- ======= Features Section ======= -->
    <section>
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-5" >
            
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <div class="main">
              <div class="layout">
                <form class="formlayout" action="assets/php/connection.php" method="post">
                  <fieldset class="good" >
                        <legend style="padding: 10px;">Activate Your Account</legend>

                          <div class="form-group1">
                              <label>Your Name  </label>
                              <input type="text" title="Your Name" class="form-control" placeholder="Your Name" id="name" required="">
                          </div>
                          <div class="form-group1">
                              <label>Your Enrollment No.</label>
                              <?php 
                                  $con = mysqli_connect('localhost','root','root123','campusmd');
                                    
                                  if($con->connect_error){
                                    echo"connection Loss";
                                    die('connection fail : '.$con->connect_error);
                                  }else{

                                    $stmt = "select * from studentdetails" ;
                                    if ($result = mysqli_query($con,$stmt)){
                                      echo "<select>";
                                      if(mysqli_num_rows($result)>0){
                                        while ($row = mysqli_fetch_array($result)) {
                                          $Eno = $row['Enrollment_NO'];
                                          echo"
                                            <option value='$Eno'>$Eno</option> ";
                                        }
                                      }
                                      echo"</select";
                                    }
                                    echo "connection";
                                    mysqli_close($con);
                                  }
                              ?>
                              <input type="text" title="Enrollment No" class="form-control" placeholder="Enrollment No" required="">
                          </div>
                          <div class="form-group1">
                              <label>Your Admission No.</label>
                              <input type="text" title="Admission No" class="form-control" placeholder="Admission No" required="">
                          </div>
                          <div class="form-group1">
                              <label>Year of Admission</label>
                              <input type="text" title="Admission Year" class="form-control" placeholder="Admission Year" required="">
                          </div>
                          <div class="form-group1">
                              <label>Mobile No</label>
                              <input type="text" title="Mobile No" class="form-control" placeholder="Mobile No" id="mobile" required="">
                          </div>
                          <div class="form-group1">
                              <label>Email ID</label>
                              <input type="email" title="Email" class="form-control" placeholder="Email ID" id="email" required="">
                          </div>
                          <div class="form-group1 col-md-6 form-group">
                              <label>OTP Verify :</label>
                              <input type="text" name="name" class="form-control" placeholder="Verify OTP" required>
                          </div>
                          <div>    
                              <button class="button" type="submit" >Submit</button>
                              <p style="padding-left: 38%;"><a href="contact.html">Contact Us</a></p>
                          </div>
                    
                    </fieldset>
                </form>
              </div>
            </div>    
          </div>
        </div>    
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>  </p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Order</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WishList</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Payment Mode</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Language</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dark Mode</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Datta Megha <br>
              Maharashtra, Nagpur - 441110<br>
              India <br><br>
              <strong>Phone:</strong> +91 0000000000<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About CampusMaiDhundo</h3>
            <p>It is an incredible platform that lets you do everything at the touch of a button.Thus, anyone can sell or purchase anything on these platforms by reaching a wide market of potential shoppers.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CampusMaiDhundo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-CampusMaiDhundo/ -->
        Designed by <a href="https://www.linkedin.com/in/kunal-kanchankar-49b423235/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
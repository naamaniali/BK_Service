<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $pageTitle = "Teams"; ?>
      <?php include 'load.php'; ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
    <?php include 'Common_header.php'; ?>
    </header>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>Our Teams</h3>
                <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                   <center> <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Meet Our Team</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                    </div></center>
                </div>
            <section class="site-section">
      <div class="container">
        
      <?php include 'Menu.php'; 

        $result = $conn->query("SELECT img_1,img_2,name_1,name_2 from team"); 
   
       if ($result->num_rows > 0) {
         // Output data of each row

   

      while ($row = $result->fetch_assoc()) {
      $name = $row["name_1"];
      $name_2 = $row["name_2"];
      $image = $row["img_1"];
      $image_2 = $row["img_2"];

      $html = '

        <div class="row">
          <div class="col-md-6 mb-5">
            <img src="'. $image .'" alt="Team Member Picture" class="img-fluid mb-4">

            <h3>' . $name . '</h3>

            <p>He is 47 years old and been 15 years he be a trainer. He is well and fit to be your trainer.</p>

            <p>Live in Cape Town and he love his work.</p>
            <p><a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a></p>
          </div>
          <div class="col-md-6 mb-5">
            <img src="'. $image_2 .'" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4">

            <h3>' . $name_2 . '</h3>

            <p>She is 45 years old and been her 13 years to be a trainer. She is the best trainer in our team. </p>

            <p>She live in Somerset West and she love to travel and be someone trainer.</p>

            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </p>
          </div>
        </div>

        ';

         // Echo or output the HTML code
         echo $html;

    
        }
        } else {
        echo "No records found in the table.";
        }

        $conn->close();

?>
		
        </div>
    </div>
    <!-- order_area_end -->

  <!-- footer-start -->
  <footer>
    <?php include 'Common_footer.php'; ?>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
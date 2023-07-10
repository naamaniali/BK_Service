<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $pageTitle = "Home"; ?>
    <meta name="description" content="BK for Food and Services, the best catering in Lebanon, specializes in creating delectable culinary experiences for your events. From weddings to corporate functions, our skilled chefs craft a wide range of flavors and dishes to tantalize your guests' taste buds. With a commitment to gastronomic excellence and impeccable service, we elevate every occasion. Trust BK for Food and Services to deliver a memorable event with our exquisite menus.">
    <meta name="keyword" content="Best catering in Lebanon, Wedding catering, Food and Services ">
    <meta name="author" content="Karim Group">

      <?php include 'load.php'; ?>
</head>

<body>
<?php include 'Menu.php'; ?>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
    <?php include 'Common_header.php'; ?>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>BK for Food and Services is dedicated to providing top-quality catering services that exceed expectations,<br>
                            Our experienced team crafts delectable menus, delivers exceptional service, and pays careful attention to detail.<br>
                            Trust us to elevate your events with unforgettable culinary experiences that leave a lasting impression.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area-end -->

    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Services: Best Catering in Lebanon</h3>
                        <p>Experience top-tier catering services in Lebanon, offering exquisite cuisine and flawless <br> execution for unforgettable events and memorable dining experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row">


            <?php include 'Menu.php'; 

        $result = $conn->query("SELECT Id, name, image, description FROM services_home"); 
   
       if ($result->num_rows > 0) {
         // Output data of each row

   

      while ($row = $result->fetch_assoc()) {
        $id = $row["Id"];
      $name = $row["name"];
        $image = $row["image"];
       $description = $row["description"];

//$sectionId = urlencode($name); // Encode the name as the section identifier

//<a href="service.php#' . $name . '"> 

//if ($id == 6) {
 //  $name = str_replace(' ', '_', $name); // Replace spaces with underscores in the name for id = 6
 //}

       $html = '

    <div class="col-xl-4 col-md-6">

     <a href="' . $name . '.php"> 
    <div class="single_service">
        <div class="service_icon">
            <i><img src="'. $image .'" alt="Service_icon"></i>
        </div>
        <h4>'. $name .'</h4>
        <p>' . $description . '</p>
    </div>
    </a>
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
    </div>
    <!-- service_area-end -->

    <!-- video_area_start -->
   
    <!-- video_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
    <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Our Food and Services: Catering Menu</h3>
                        <p>Delectable culinary creations and exceptional service offered in our Catering Menu, <br> ensuring a memorable experience for your event.</p>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php include 'Menu.php'; 

 $result = $conn->query("SELECT menu_name, image, description FROM menu_home"); 
    
        if ($result->num_rows > 0) {
          // Output data of each row

    

    while ($row = $result->fetch_assoc()) {
        $menu_name = $row["menu_name"];
        $image = $row["image"];
        $description = $row["description"];

            $html = '
        
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="'. $image .'" alt="Menu_course">
                        
                    </div>
                    <div class="order_info">
                        <h3><a href="#">' . $menu_name . '</a></h3>
                        <p>' . $description . '</p>
                        <p>1 Meal   |  2 Meal <br>
                                3 Meal   |   4 Meal <br>
                        </p>
                    </div>
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
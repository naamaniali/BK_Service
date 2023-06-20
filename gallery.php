<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $pageTitle = "Gallery"; ?>
    <meta name="description" content="Experience and Enjoy Our delicious Catering Master pieces  ">
    <meta name="keyword" content="Catering Master pieces">
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
                <h3>Our Catering Master pieces</h3>
                <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- gallery_area_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Gallery Images</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row  grid">
            <?php
    include 'Menu.php';

$result = $conn->query("SELECT * FROM Gallery");

if ($result->num_rows > 0) {
    // Fetch all records from the database
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // Process each record and generate HTML code for each image
    foreach ($rows as $row) {
        $id = $row["id"];
        $imagePath = $row["img"];
        $gridClass = $row["grid_class"];
        $name = $row["name"];
        $galleryClass = 'gallery_bg_' . $id;

        // Generate the HTML code for the image
        $html = '
            <div class="' . $gridClass . '">
                <div class="single_gallery ' . $name . ' " style="background-image: url(' . $imagePath . ');">
                    <a href="' . $imagePath . '" class="popup-image"></a>
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="load_more_button text-center">
                        <a href="#" class="load_more_btn">Load More Images</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area_end -->

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
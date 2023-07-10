<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $pageTitle = "Birthday Service"; ?>
    <meta name="description" content="Make your birthday truly special with our exceptional birthday celebration services. Our personalized packages offer a memorable experience filled with fun, entertainment, and themed decorations. Let us take care of all the planning and create an unforgettable birthday party tailored just for you.">
    <meta name="keyword" content="birthday celebration, memorable birthday, personalized experience, fun-filled party, birthday venue, birthday packages, birthday planning, party entertainment, birthday activities, themed decorations">
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
                    <h3>Best Birthday with Us</h3>
                    <p>Experience the best birthday celebration with us, where every moment is filled with joy, laughter, and unforgettable memories<br> Indulge in a personalized birthday experience crafted to perfection, making your special day truly extraordinary.</p>
                </div>
            </div>
    </div>
    <!-- breadcam_area_end -->
    <?php
include 'Menu.php';

$result = $conn->query("SELECT * FROM Birthday");

if ($result->num_rows > 0) {
    // Fetch all records from the database
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // Define the mapping array for container types
    $containerTypes = array(
        1 => 'menu_section',
        2 => 'other_style',
        3 => 'menu_section'
        // Add more mappings as needed
    );

    // Process each record and generate HTML code for each container
    foreach ($rows as $row) {
        $id = $row["id"];

        // Check if the container type exists for the given ID
        if (isset($containerTypes[$id])) {
            $containerType = $containerTypes[$id];
            $name = $row["name"];
            $image = $row["img"];
            $description = $row["description"];
            $tdescription = $row["tdescription"];
            $Client = $row["Client"];
            $cwant = $row["want_client"];
            $section = $row["section"];

            // Generate the dynamic class name based on the container type
            $class = 'single_about_area ' . $containerType;

            // Generate the HTML code based on the container type
            if ($containerType === 'menu_section') {
                $html = '
                    <div class="' . $class . '">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5">
                                    <div class="single_about_text">
                                        <h2><i>' . $section . '</i></h2><br/>

                                        <h3>' . $name . '<br>Courses <br></h3>
                                        <p class="about_text1">' . $description . '</p>
                                        <p class="about_text2">' . $tdescription . '</p>
                                        <div class="order_info">
                                            <h6>' . $Client . '</h6>
                                            <p>' . preg_replace('/ {4,}/', '<br>', $cwant) . '</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                                    <div class="single_about_thumb thumb_n1">
                                        <img src="' . $image . '" alt="Birthday Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            } else {
                $html = '
                    <div class="' . $class . '">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="single_about_thumb thumb_n2">
                                        <img src="' . $image . '" alt="Birthday Picture">
                                    </div>
                                </div>
                                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                                    <div class="single_about_text">
                                    <h2><i>' . $section . '</i></h2><br/>
                                        <h3>' . $name . '</h3>
                                        <p class="about_text1">' . $description . '</p>
                                        <p class="about_text2">' . $tdescription . '</p>
                                        <div class="order_info">
                                            <h6>' . $Client . '</h6>
                                            <p>' . $cwant . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }

            // Echo or output the HTML code
            echo $html;
        }
    }
} else {
    echo "No records found in the table.";
}

$conn->close();
?>



<!-- single_about_area_end -->

    

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
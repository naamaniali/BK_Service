<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <style>


    </style>
    <?php $pageTitle = "Contact"; ?>
      <?php include 'load.php'; ?>
      <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'phpmailer/src/Exception.php';

        require 'phpmailer/src/PHPMailer.php';

        require 'phpmailer/src/SMTP.php';


        $mail = new PHPMailer();


    // define variables and set to empty values
    $nameErr = $emailErr = $messageErr = "";
    $formAction="";
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Set the default values for errors

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }else {
                $nameErr = ""; // Clear the error variable since the email is valid
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }else {
                $emailErr = ""; // Clear the error variable since the email is valid
            }
        }

        if (empty($_POST["message"])) {
            $messageErr = "You forgot to write a message";
        } else {
            $message = test_input($_POST["message"]);
        }

        if (empty($nameErr) && empty($emailErr)) {

            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';

            $mail->SMTPAuth = true;

            $mail->Username = 'my@gmail.com';

             $mail->Password = 'password';

            $mail->SMTPSecure = 'ssl';

            $mail->Port = 465;

             $mail->setFrom('my@gmail.com');

            $mail->addAddress($_POST["email"]);

            $mail->isHTML(true);

            $mail->Subject = 'New Contact Form Submission';

            $mail->Body = $_POST["message"];

            $mail->send();

            echo

    "
    <script>
    alert('Sent good');

    document.location.href = 'index.php';
    
    </script>
    
    ";

        }
        
       

        
       
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <link rel="stylesheet" href="contact.css">
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
          <h3>Contact</h3>
          <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct
             standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>
       </div>
    </div>
 </div>
 <!-- breadcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
							<div class="mapouter">
							<div class="gmap_canvas">
							<iframe width="735" height="524" id="gmap_canvas" src="https://maps.google.com/maps?q=cape%20town&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:524px;width:735px;}.gmap_canvas {overflow:hidden;background:none!important;height:524px;width:735px;}</style>
							</div>
							
							</div>
                            
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
					<div class="col-12">
                        <h2 class="contact-title">Information</h2>
                    </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>[Street Num][Street Name],[Area],[State], South Africa</h3>
                                <p>[PO Box]</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>[Business Number]</h3>
                                <p>[Business Times]</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>[Business E-Mail]</h3>
                                <p>Send us a e-mail anytime for a event!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section section_bg">
    <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
                <form class="form-contact contact_form" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="contactForm" novalidate="novalidate">
    <div class="form-group">
        <input class="form-control field <?php echo (!empty($nameErr)) ? 'error-field' : ''; ?>" name="name" id="name" type="text" placeholder="Your Name" required>
        <span class="error <?php echo (!empty($nameErr)) ? 'error-message' : ''; ?>"><?php echo $nameErr;?></span>
    </div>
    <div class="form-group">
        <input class="form-control field <?php echo (!empty($emailErr)) ? 'error-field' : ''; ?>" name="email" id="email" type="email" placeholder="Your Email" required>
        <span class="error <?php echo (!empty($emailErr)) ? 'error-message' : ''; ?>"><?php echo $emailErr;?></span>
    </div>
    <div class="form-group">
        <textarea class="form-control field <?php echo (!empty($messageErr)) ? 'error-field' : ''; ?>" name="message" id="message" cols="30" rows="9" placeholder="Write your message here" required></textarea>
        <span class="error <?php echo (!empty($messageErr)) ? 'error-message' : ''; ?>"><?php echo $messageErr;?></span>
    </div>
    <div class="form-group">
        <button type="submit" name="send" class="btn button button-contactForm">Send Message</button>
    </div>
</form>

            </div>
        </div>
    </div>
</section>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) || empty($emailErr) || !empty($nameErr) || !empty($emailErr)) {
        echo '<script>window.location.hash = "#contact";</script>';
    }
    ?>

    <!-- ================ contact section end ================= -->

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
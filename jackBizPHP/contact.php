<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JCR Consulting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="fa/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('the_captcha', {
                'sitekey' : '6Lf34hMUAAAAAJGGj4smUYEiTYTP6RZ3kknLc--c',
                'callback' : correctCaptcha
            });
        };

        var correctCaptcha = function(response) {
            if (response.length == 0){
                alert(response);
            } else {
                $('#send_info').removeClass('hidden');
            }   
        };

    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
    $name=stripslashes($_POST["name"]);
    $email=stripslashes($_POST["email"]);
    $phone=stripslashes($_POST["email"]);
    $msg=stripslashes($_POST["msg"]);

    $secret="6Lf34hMUAAAAAEabHOa1sLJvY_6YiFBf7oKDIhSa";

    if($_POST["g-recaptcha-response"]){
        $response = $_POST["g-recaptcha-response"];
        $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
        $captcha_success=json_decode($verify);
    }
     
?>


<body>

    <div class="brand">J.C. Roberts Consulting LLC.</div>
    <div class="address-bar hFont">5141 Columbia Road | Columbia, MD 21044 | 410-227-6030 | jcrconsult123@gmail.com</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default pFont" role="navigation">
        <div class="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">JCR Consulting</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><strong>Home</strong></a>
                    </li>
                    <li>
                        <a href="about.php"><strong>About</strong></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Expertise</strong><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="structure.php"><strong>Structural Analysis &amp; Design</strong></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="composite.php"><strong>Composite Materials</strong></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="biomedical.php"><strong>Biomedical &amp; Biomechanics</strong></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="proposal.php"><strong>Proposal Writing &amp; Evaluation</strong></a></li>
                      </ul>
                    </li>
                    <li>
                        <a href="awards.php"><strong>Awards</strong></a>
                    </li>
                    <li>
                        <a href="testimonials.php"><strong>Testimonials</strong></a>
                    </li>
                    <li>
                        <a href="contact.php"><strong>Contact</strong></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center hFont">Contact
                        <strong>JCR Consulting</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                     Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJu3dzcwkgyIkR8_XGF0Qsi_g&key=AIzaSyAvXhRiDYR_eGEjSCC0PolfUROkfiwOyvo" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:<br>
                        <strong>410-227-6030</strong>
                    </p>
                    <p>Email:<br>
                        <strong><a href="mailto:jcrconsult123@gmail.com">jcrconsult123@gmail.com</a></strong>
                    </p>
                    <p>Address:<br>
                        <strong>5141 Columbia Road
                            <br>Columbia, MD 20144</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div> --> 


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center hFont"><strong>Contact Jack</strong>
                    </h2>
                    <hr>

                    <?php
                    if ($captcha_success->success==false) { ?>
                        <p>Feel free to send Jack a question regarding your needs and he will get back to you at the earliest possible convenience.</p>
                        <form role="form" method="post">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Phone Number</label>
                                    <input type="tel" name="phone" class="form-control">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-12">
                                    <label>Message</label>
                                    <textarea class="form-control" name="msg" rows="6"></textarea>
                                </div>
                                <div class="g-recaptcha form-group col-lg-12"></div>
                                <div class="form-group col-lg-12" >
                                    <div id="the_captcha"></div>
                                    <!-- <input type="hidden" name="save" value="contact"> -->
                                    <button id="send_info" class="hidden" type="submit" value="Submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    
                    <?php        
                        }
                        else if ($captcha_success->success==true) {
                            echo "<p>Thank you for your submission! Jack will be in touch!</p>";
                            //echo "$verify";

                                // EDIT THE 2 LINES BELOW AS REQUIRED
 
                            $email_to = "jcrconsult123@gmail.com";
                         
                            $email_subject = "Form Submissions";
                         
                             
                         
                             
                         
                            function died($error) {
                         
                                // your error code can go here
                         
                                echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                         
                                echo "These errors appear below.<br /><br />";
                         
                                echo $error."<br /><br />";
                         
                                echo "Please go back and fix these errors.<br /><br />";
                         
                                die();
                         
                            }
                         
                             
                         
                            // validation expected data exists
                         
                            if(!isset($_POST['name']) ||
                         
                         
                                !isset($_POST['email']) ||
                         
                                !isset($_POST['phone']) ||
                         
                                !isset($_POST['msg'])) {
                         
                                died('We are sorry, but there appears to be a problem with the form you submitted.');       
                         
                            }
                         
                             
                         
                            $name = $_POST['name']; // required
                         
                         
                            $email = $_POST['email']; // required
                         
                            $phone = $_POST['phone']; // not required
                         
                            $msg = $_POST['msg']; // required
                         
                             
                         
                            $error_message = "";
                         
                            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                         
                            if(!preg_match($email_exp,$email)) {
                             
                                $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
                             
                            }
                             
                            $string_exp = "/^[A-Za-z .'-]+$/";
                             
                            if(!preg_match($string_exp,$name)) {
                             
                                $error_message .= 'The First Name you entered does not appear to be valid.<br />';
                             
                            }
                             
                            if(strlen($msg) < 2) {
                             
                                $error_message .= 'The Comments you entered do not appear to be valid.<br />';
                             
                            }
                             
                            if(strlen($error_message) > 0) {
                             
                                died($error_message);
                             
                            }
                         
                            $email_message = "Form details below.\n\n";
                         
                             
                         
                            function clean_string($string) {
                         
                                $bad = array("content-type","bcc:","to:","cc:","href");
                         
                                return str_replace($bad,"",$string);
                         
                            }
                         
                             
                         
                            $email_message .= "First Name: ".clean_string($name)."\n";
                         
                            //$email_message .= "Last Name: ".clean_string($last_name)."\n";
                         
                            $email_message .= "Email: ".clean_string($email)."\n";
                         
                            $email_message .= "Phone: ".clean_string($phone)."\n";
                         
                            $email_message .= "Comments: ".clean_string($msg)."\n";
                         
                             
                         
                             
                         
                            // create email headers
                             
                            $headers = 'From: '.$email_from."\r\n".
                             
                            'Reply-To: '.$email_from."\r\n" .
                             
                            'X-Mailer: PHP/' . phpversion();
                             
                            @mail($email_to, $email_subject, $email_message, $headers);  
                        }
                    ?>

                    
                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2016 JCR Consulting, LLC</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

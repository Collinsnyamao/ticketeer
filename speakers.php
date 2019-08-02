<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Evento</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/js-datepicker/dist/datepicker.min.css">
    <link rel="stylesheet" href="node_modules/timepicker/jquery.timepicker.min.css">

    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="assets/img/logo.png" alt="Evento"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="events.php">Home</a>
                </li>
                <!--<li class="search_btn">
                    <a  href="#">
                        <i class="ion-ios-search"></i>
                    </a>
                </li>-->
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets/img/bg/inner_cover.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        The Speakers
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a>  |  </li>
                <li><a href="#">About us</a> |  </li>
                <li><span>Event editor</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<!--about section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                Submit an Event
            </h3>
        </div>


        <div class="row justify-content-center">

            <div class="col-12 col-md-6">
                <div class="alert" id="eventAlert"></div>
                <div class="row">
                    <div class="col">
                        <label for="eventname">Event Name</label>
                        <input type="text" class="form-control" id="eventname" placeholder="Event name">
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <label for="datepick">Date</label>
                            <input type="text" class="form-control" id="datepick" placeholder="Event date">
                        </div>
                        <div class="col">
                            <label for="timepick">Time</label>
                            <input type="text" class="form-control" id="timepick" placeholder="Event time">
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <label for="filepick">Event image</label>
                        <input type="file" class="form-control" id="filepick" placeholder="Ticket Price" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="ticketprice">Event Price</label>
                        <input type="number" class="form-control" id="ticketprice" placeholder="Ticket Price" step="10" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="eventdesc">Event Description</label>
                        <textarea id="eventdesc" class="form-control" id="eventdesc"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button id="btnsubmitevent" class="btn btn-primary">Submit Event</button>
                    </div>
                </div>


            </div>
            <div class="col-12 col-md-6">
                <div class="section_title">
                    <h4>Events</h4>
                </div>
                <div id="eventsdiv">

                    <?php require 'php/checkEvents.php'; ?>
                    <!--<div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images1/event_demo.jpg" id="recepientTag" style="height: 100px;">
                            </div>
                            <div class="col-md-9">
                                <h6>Event Name</h6>
                                <strong><i>date - time</i></strong>
                                <p>In rhoncus massa nec sollicitudin. Ut hendrerit hendrerit nisl a accumsan.</p>
                                Price :<strong> </strong>
                            </div>
                        </div>
                        <hr>
                    </div>-->



                </div>

            </div>
        </div>
        <!--<div class="row justify-content-center mt50">
            <div class="col-12 col-md-6">
                <div class="progress_container">

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>Development</span>
                            <span class="progress_num" style="left:80%;">80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="80" aria-valuenow="80" style="width: 80%;"></div>
                        </div>
                    </div>

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>Design</span>
                            <span class="progress_num" style="left:90%;">90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="90" aria-valuenow="90" style="width: 90%;"></div>
                        </div>
                    </div>

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>SEO</span>
                            <span class="progress_num" style="left:75%;">75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="75" aria-valuenow="75" style="width: 75%;"></div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-center mt30">
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                           <span>+</span><span class="counter">1000</span>
                            <h5>Happy Audience</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                            <span class="counter">14</span><span>K</span>
                            <h5>Followers on FB</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                            <span class="counter">732</span>
                            <h5>Finished Projects</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</section>
<!--about section end -->

<!--speaker section-->
<!--<section class="pb100">
    <div class="row justify-content-center no-gutters">
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s1.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s2.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">James Oliver</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s3.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Carla Banks</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                 <div class="speaker_img">
                    <img src="assets/img/speakers/s4.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">William Smith</h5>
                        <p class="position">CEO Company</p>
                    </div>
                 </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                 <div class="speaker_img">
                <img src="assets/img/speakers/s5.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Jessica Black</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="assets/img/speakers/s6.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Patricia Stone</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="assets/img/speakers/s7.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Duncan Stan</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="assets/img/speakers/s8.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Patricia Stone</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--speaker section end -->


<!--event countdown-->
<!--<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center">Counter until the big event</h4>
                <div class="countdown"></div>
            </div>
        </div>
    </div>
</section>-->
<!--evernt countdown end-->

<!--get tickets section -->
<!--<section class="bg-img pt100 pb100" style="background-image: url('assets/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                GEt your tikets
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
        </div>
    </div>
</section>-->
<!--get tickets section end-->

<!--footer start -->
<!--<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="assets/img/logo.png" alt="evento">
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            subscribe to our newsletter
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="email" class="form-control" placeholder="E-Mail here">
                            <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>-->
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Evento</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
<script src="node_modules/js-datepicker/dist/datepicker.min.js"></script>
<script src="node_modules/timepicker/jquery.timepicker.min.js"></script>
<script>
    const pick = datepicker('#datepick',{});
    $('#timepick').timepicker();
</script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.1/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAynvkUC2H3xOiPFjDIXuf4u0o6CWEbtDQ",
        authDomain: "evento-1ec0f.firebaseapp.com",
        databaseURL: "https://evento-1ec0f.firebaseio.com",
        projectId: "evento-1ec0f",
        storageBucket: "evento-1ec0f.appspot.com",
        messagingSenderId: "262564078355",
        appId: "1:262564078355:web:02e945955a4ffced"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="assets/js/app.js"></script>
</body>
</html>
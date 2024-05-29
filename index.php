
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Luxury Hotel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="src/assets/style/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="src/assets/style/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="src/assets/style/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="src/assets/style/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="src/assets/style/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="src/assets/style/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header position-sticky">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <h1>Luxury Hotel</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                        <nav class="navigation navbar navbar-expand-md navbar-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#rooms"> Rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                <a href="src/pages/login.php" class="book_btn text-center ">Login</a>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section id="home" class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="src/assets/style/images/banner1.jpg" alt="Luxury Hotel">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="src/assets/style/images/banner2.jpg" alt="Luxury Hotel">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="src/assets/style/images/banner3.jpg" alt="Luxury Hotel">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="book_room">
                            <h1>Book Your Stay Online</h1>
                            <form class="book_now">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>Check-In</span>
                                        <img class="date_cua" src="src/assets/style/images/date.png">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="check_in">
                                    </div>
                                    <div class="col-md-12">
                                        <span>Check-Out</span>
                                        <img class="date_cua" src="src/assets/style/images/date.png">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="check_out">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="book_btn">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end banner -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Our Luxury Hotel</h2>
                        <p>Experience unparalleled luxury and comfort at our hotel. Our establishment has been a symbol of hospitality and excellence for decades. We take pride in offering our guests the finest amenities, personalized service, and unforgettable experiences.</p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="src/assets/style/images/about.png" alt="About Our Luxury Hotel" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end about -->
    <!-- our_room -->
    <div id="rooms" class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Rooms</h2>
                        <p>Explore our luxurious rooms designed to offer you comfort and relaxation during your stay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room1.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Family Room</h3>
                            <p>Indulge in comfort and elegance in our Family Room. Perfect for families, this spacious retreat offers a serene atmosphere with modern amenities. Whether you're enjoying quality time with loved ones or simply unwinding after a day of exploration, our Family Room ensures a memorable stay for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room2.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Junior Suite</h3>
                            <p>Experience unparalleled luxury in our Junior Suite. Designed for guests seeking refined comfort, this suite offers a sophisticated ambiance with spacious accommodations and personalized service. Whether you're traveling for business or leisure, our Junior Suite promises a rejuvenating retreat amidst opulent surroundings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room3.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Presidential Suite</h3>
                            <p>Escape to luxury in our Presidential Suite. Designed for discerning travelers, this suite exudes opulence and elegance with lavish amenities and impeccable service. Whether you're hosting a special occasion or simply seeking a romantic getaway, our Presidential Suite promises an unforgettable experience in refined surroundings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room4.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Executive Suite</h3>
                            <p>Experience the epitome of luxury in our Executive Suite. Perfect for those seeking sophistication and indulgence, this suite offers lavish amenities and impeccable service. Whether you're unwinding in the spacious living area or admiring the panoramic views from the balcony, our Executive Suite ensures an unforgettable stay in refined surroundings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room5.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Deluxe Suite</h3>
                            <p>Experience unparalleled comfort in our Deluxe Suite. Designed for discerning guests, this suite offers sophisticated elegance with modern amenities and stunning views. Whether you're traveling for business or leisure, our Deluxe Suite promises a rejuvenating retreat amidst refined surroundings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="room">
                        <div class="room_img">
                            <figure><img src="src/assets/style/images/room6.jpg" alt="Bed Room"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Standard Room</h3>
                            <p>Relax in comfort in our Standard Room. Perfect for solo travelers or couples, this cozy retreat offers all the essentials for a comfortable stay. Whether you're unwinding after a day of exploration or preparing for your next adventure, our Standard Room ensures a restful experience amidst serene surroundings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end our_room -->
    <!-- gallery -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery1.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery2.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery3.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery4.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery5.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery6.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery7.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="src/assets/style/images/gallery8.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
    <!-- blog -->
    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Blog</h2>
                        <p>Discover the latest insights and updates from our blog</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="src/assets/style/images/blog3.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bedroom Decor Ideas</h3>
                            <span>Explore creative ways to enhance your bedroom</span>
                            <p>Discover innovative bedroom decor ideas to transform your space into a cozy retreat. From minimalist designs to luxurious accents, find inspiration for your next home makeover.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="src/assets/style/images/blog1.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Travel Tips</h3>
                            <span>Plan your next adventure with expert travel advice</span>
                            <p>Get insider tips and recommendations for your next travel destination. From hidden gems to must-visit attractions, our travel experts share their insights to help you plan the perfect getaway.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="src/assets/style/images/blog2.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Cuisine Exploration</h3>
                            <span>Embark on a culinary journey around the world</span>
                            <p>Indulge your taste buds with exotic flavors and traditional dishes from different cuisines. From tantalizing street food to gourmet delights, explore a world of culinary delights from the comfort of your home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end blog -->
    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="" class="main_form">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Name" type="text" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23310.105143399553!2d106.77995483322881!3d-6.391462598312806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1715000466543!5m2!1sid!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Depok</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +6281234567890</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> luxury@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="#home"><a href="#">Home</a></li>
                            <li><a href="#about"> about</a></li>
                            <li><a href="#room"> Rooms</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>
                                © 2019 All Rights Reserved by <a href="#!"> Salsa</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="src/assets/style/js/jquery.min.js"></script>
    <script src="src/assets/style/js/bootstrap.bundle.min.js"></script>
    <script src="src/assets/style/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="src/assets/style/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="src/assets/style/js/custom.js"></script>
</body>

</html>
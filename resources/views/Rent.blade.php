<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>PARADISE - Hotel and Bed&Breakfast Site Template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    @include('header')

    <main>
        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="img/rooms/2.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Our Rooms & Suites</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_0">
            <div class="row_list_version_2">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/1.jpg"><img
                                        src="img/rooms/1.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_1.jpg"><img
                                        src="img/rooms/opt_1.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_8.jpg"><img
                                        src="img/rooms/opt_8.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From $150/night</small>
                            <h2>Double Room</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own
                                private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="room-details.html" class="animated_link">
                                    <strong>Details</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

            <div class="row_list_version_2 inverted">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8 order-xl-2">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_2" data-type="image" href="img/rooms/2.jpg"><img
                                        src="img/rooms/2.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_2" data-type="image" href="img/rooms/opt_2.jpg"><img
                                        src="img/rooms/opt_2.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_2" data-type="image" href="img/rooms/opt_5.jpg"><img
                                        src="img/rooms/opt_5.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4 order-xl-1">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From $190/night</small>
                            <h2>Deluxe Room</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own
                                private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="room-details.html" class="animated_link">
                                    <strong>Details</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

            <div class="row_list_version_2">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_3" data-type="image" href="img/rooms/3.jpg"><img
                                        src="img/rooms/3.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_3" data-type="image" href="img/rooms/opt_3.jpg"><img
                                        src="img/rooms/opt_3.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_3" data-type="image" href="img/rooms/opt_6.jpg"><img
                                        src="img/rooms/opt_6.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From $230/night</small>
                            <h2>Superior Room</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own
                                private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="room-details.html" class="animated_link">
                                    <strong>Details</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

            <div class="row_list_version_2 inverted">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8 order-xl-2">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_4" data-type="image" href="img/rooms/4.jpg"><img
                                        src="img/rooms/4.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_4" data-type="image" href="img/rooms/opt_4.jpg"><img
                                        src="img/rooms/opt_4.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_4" data-type="image" href="img/rooms/opt_7.jpg"><img
                                        src="img/rooms/opt_7.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4 order-xl-1">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From $260/night</small>
                            <h2>Junior Suite</h2>
                            <p>Beautiful design with modern furnishings including a glamorous bay window with your own
                                private view of Lucerne.</p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Book Now</span>
                                </a>
                                <a href="room-details.html" class="animated_link">
                                    <strong>Details</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

        </div>
        <!-- /container -->

        <div class="pinned-image pinned-image--medium">
            <div class="pinned-image__container" id="section_video">
                <video loop="loop" muted="muted" id="video_home">
                    <source src="video/sunset.mp4" type="video/mp4">
                    <source src="video/sunset.webm" type="video/webm">
                    <source src="video/sunset.ogv" type="video/ogg">
                </video>
                <div class="pinned-image__container-overlay"></div>
            </div>
            <div class="pinned_over_content">
                <div class="title white center mb-5">
                    <small data-cue="slideInUp">Paradise Hotel</small>
                    <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                        <div class="box_facilities white no-border" data-cue="slideInUp">
                            <i class="customicon-private-parking"></i>
                            <h3>Private Parking</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                        <div class="box_facilities white" data-cue="slideInUp">
                            <i class="customicon-wifi"></i>
                            <h3>High Speed Wifi</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                        <div class="box_facilities white" data-cue="slideInUp">
                            <i class="customicon-cocktail"></i>
                            <h3>Bar & Restaurant</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                        <div class="box_facilities white" data-cue="slideInUp">
                            <i class="customicon-swimming-pool"></i>
                            <h3>Swimming Pool</h3>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
        </div>
        <!-- /pinned-content -->

        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Paradise Hotel</small>
                            <h2>Check Availability</h2>
                        </div>
                        <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates
                            definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                        <p class="phone_element no_borders"><a href="tel://423424234"><i
                                    class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121
                                    1334</span></a></p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div data-cue="slideInUp" data-delay="200">
                        <div class="booking_wrapper">
                            <div class="col-12">
                                <input type="hidden" id="date_booking" name="date_booking">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom_select">
                                        <select class="wide">
                                            <option>Select Room</option>
                                            <option>Double Room</option>
                                            <option>Deluxe Room</option>
                                            <option>Superior Room</option>
                                            <option>Junior Suite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus"
                                                    name="adults_booking">
                                                <input type="text" name="adults_booking" id="adults_booking"
                                                    value="" class="qty form-control" placeholder="Adults">
                                                <input type="button" value="-" class="qtyminus"
                                                    name="adults_booking">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus"
                                                    name="childs_booking">
                                                <input type="text" name="childs_booking" id="childs_booking"
                                                    value="" class="qty form-control" placeholder="Childs">
                                                <input type="button" value="-" class="qtyminus"
                                                    name="childs_booking">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / row -->
                        <p class="text-end mt-5"><a href="#0" class="btn_1 outline">Book Now</a></p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>

    @include('footer')
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/common_functions.js"></script>
    <script src="js/datepicker_inline.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>

</html>

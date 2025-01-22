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

        <div class="hero full-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns" src="img/rooms/1.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <small class="slide-animated one">Luxury Hotel Experience</small>
                            <h1 class="slide-animated two">Sierra Double Room</h1>
                            <p class="slide-animated three">Exquisite furnishings for a cosy ambience</p>
                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_explore">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- / mouse -->
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="bg_white" id="first_section">
            <div class="container margin_120_95">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="title">
                            <small>Luxury Experience</small>
                            <h2>A deeply space that invites you to truly Switch Off.</h2>
                        </div>
                        <p>The dark wood panelling and furnishings, deluxe red-draped four-poster bed, and magnificent
                            black stone bathroom evoke the charm of a secluded Sierra Nevada getaway. The intimate scale
                            and finish give the room a distinctly personal feel.</p>
                        <p>The dark wood panelling and furnishings, deluxe red-draped four-poster bed, and magnificent
                            black stone bathroom evoke the charm.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="room_facilities_list">
                            <ul data-cues="slideInLeft">
                                <li><i class="icon-hotel-double_bed_2"></i> King Size Bed</li>
                                <li><i class="icon-hotel-safety_box"></i> Safety Box</li>
                                <li><i class="icon-hotel-patio"></i>Balcony</li>
                                <li><i class="icon-hotel-tv"></i> 32 Inch TV</li>
                                <li><i class="icon-hotel-disable"></i> Disable Access</li>
                                <li><i class="icon-hotel-dog"></i> Pet Allowed</li>
                                <li><i class="icon-hotel-bottle"></i> Welcome Bottle</li>
                                <li><i class="icon-hotel-wifi"></i> Wifi / Netflix access</li>
                                <li><i class="icon-hotel-hairdryer"></i> Air Dryer</li>
                                <li><i class="icon-hotel-condition"></i> Air Condition</li>
                                <li><i class="icon-hotel-loundry"></i>Loundry Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_white -->

        <div class="bg_white add_bottom_120">
            <div class="container-fluid p-lg-0">
                <div data-cues="zoomIn">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                        <div class="item">
                            <img src="img/rooms/opt_5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/opt_1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/opt_4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/opt_6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image"
                        href="img/rooms/opt_5.jpg">FullScreen Gallery</a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_1.jpg"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_4.jpg"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_6.jpg"></a>
                </div>
            </div>
        </div>
        <!-- /bg_white -->

        <div class="container margin_120_95" id="reviews">
            <div class="row justify-content-between">
                <div class="col-lg-4 order-lg-2 fixed_title reviews_sum_details">
                    <div class="title">
                        <small>Paradise Hotel</small>
                        <h2>Reviews</h2>
                    </div>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere possimus.</p>
                    <h6>Comfort</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>9.0</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Facilities</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>9.5</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Location</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>6.0</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Price</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>6.0</strong></div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar4.jpg" alt=""></figure>
                                <h5>Lukas</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 54 minutes ago</em>
                                </div>
                                <h4>"Great Location!!"</h4>
                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec
                                    tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.
                                    Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit
                                    molestie suscipiantur his et.</p>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /review_card -->
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar6.jpg" alt=""></figure>
                                <h5>Lukas</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 10 Oct. 2022</em>
                                </div>
                                <h4>"Awesome Experience"</h4>
                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec
                                    tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.
                                    Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit
                                    molestie suscipiantur his et.</p>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /review_card -->
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar1.jpg" alt=""></figure>
                                <h5>Marika</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 11 Oct. 2022</em>
                                </div>
                                <h4>"Really great dinner!!"</h4>
                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec
                                    tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.
                                    Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit
                                    molestie suscipiantur his et.</p>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row reply">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10">
                                <div class="review_content">
                                    <strong>Reply from Admin</strong>
                                    <em>Published 3 minutes ago</em>
                                    <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros
                                        eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te,
                                        erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                        petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                </div>
                            </div>
                        </div>
                        <!-- /reply -->
                    </div>
                    <!-- /review_card -->
                    <p class="text-end"><a href="#0" class="btn_1">Leave a review</a></p>
                </div>
            </div>
        </div>
        <!-- /reviews -->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div data-cue="slideInUp">
                    <div class="title">
                        <small>Paradise Hotel</small>
                        <h2>Similar Rooms</h2>
                    </div>
                    <div class="row" data-cues="slideInUp" data-delay="800">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-list-1.html" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/1.jpg)"></div>
                                    <div class="info">
                                        <small>From $150/night</small>
                                        <h3>Double Room</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-list-1.html" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/2.jpg)"></div>
                                    <div class="info">
                                        <small>From $190/night</small>
                                        <h3>Deluxe Room</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-list-1.html" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/3.jpg)"></div>
                                    <div class="info">
                                        <small>From $240/night</small>
                                        <h3>Superior Room</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- /row-->
                </div>
            </div>
        </div>
        <!-- /bg_white -->

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
                        <div class="phone_element no_borders"><a href="tel://423424234"><i
                                    class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121
                                    1334</span></a></div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div data-cue="slideInUp">
                        <div id="message-booking"></div>
                        <form method="post"
                            action="https://www.ansonika.com/paradise/html-menu-1/phpmailer/reserve_template_email.php"
                            id="bookingform" autocomplete="off">
                            <div class="booking_wrapper">
                                <div class="col-12">
                                    <input type="hidden" id="date_booking" name="date_booking">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="custom_select">
                                            <select class="wide" name="rooms_booking" id="rooms_booking">
                                                <option value="">Select Room</option>
                                                <option value="Double Room">Double Room</option>
                                                <option value="Deluxe Room">Deluxe Room</option>
                                                <option value="Superior Room">Superior Room</option>
                                                <option value="Junior Suite">Junior Suite</option>
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
                                <!-- / row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name_booking" id="name_booking"
                                                class="form-control" placeholder="Name and Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email_booking" id="email_booking"
                                                class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <!-- / row -->
                                <hr>
                                <div class="pb-4">
                                    <div class="row align-items-center justify-content-end">
                                        <div class="col-auto">
                                            <label for="verify_booking" class="col-form-label"><strong>Are you
                                                    human?</strong></label>
                                        </div>
                                        <div class="col-md-2 col-4">
                                            <input type="text" name="verify_booking" id="verify_booking"
                                                class="form-control" placeholder="3 + 1 = ?">
                                        </div>
                                    </div>
                                </div>
                                <!-- / row -->
                            </div>
                            <!-- / booking_wrapper -->
                            <p class="text-end mt-4"><input class="btn_1 outline" type="submit" value="Check Now"
                                    id="submit-booking"></p>
                        </form>
                    </div>
                    <!-- /data cue -->
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
    <script>
        // Progress bars animation
        $(function() {
            "use strict";
            var $section = $('#reviews');
            $(window).on('scroll', function(ev) {
                var scrollOffset = $(window).scrollTop();
                var containerOffset = $section.offset().top - window.innerHeight;
                if (scrollOffset > containerOffset) {
                    $(".progress-bar").each(function() {
                        var each_bar_width = $(this).attr('aria-valuenow');
                        $(this).width(each_bar_width + '%');
                    });
                }
            });
        });
    </script>

</body>

</html>

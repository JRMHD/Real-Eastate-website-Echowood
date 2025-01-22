<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Get in touch with Echowood Property Limited for all your real estate needs. Our team is ready to assist you with buying, selling, renting, or property management inquiries.">
    <meta name="author" content="Echowood Property Limited">
    <title>Contact Us - Echowood Property Limited</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


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

    <!-- SEO META TAGS -->
    <meta name="keywords"
        content="Echowood Property Limited, contact us, real estate inquiries, property inquiries, contact real estate agents, customer support, property management, buy or sell property">
    <meta property="og:title" content="Contact Us - Echowood Property Limited">
    <meta property="og:description"
        content="Reach out to Echowood Property Limited for expert assistance with buying, selling, renting, or managing your property. We’re here to help!">
    <meta property="og:image" content="path/to/your/image.jpg">
    <!-- Replace with your logo or an appropriate contact-related image -->
    <meta property="og:url" content="http://www.imanielite.com/contact">
    <meta name="twitter:title" content="Contact Us - Echowood Property Limited">
    <meta name="twitter:description"
        content="Contact Echowood Property Limited for all your property needs. Our dedicated team is ready to assist you with any real estate questions.">
    <meta name="twitter:image" content="path/to/your/image.jpg">
    <!-- Replace with your logo or an appropriate contact-related image -->
    <meta name="twitter:card" content="summary_large_image">
</head>


<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    @include('header')

    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="\img\local_amenities_2.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Echowood Property Limited</small>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>Nairobi, Kenya</div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="mailto:Maryanyangobell@gmail.com">Maryanyangobell@gmail.com</a></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div>+254 702 426184<br>+254 781 973159</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <form method="POST" action="/contact/store" id="contactform">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-4">
                                <input class="form-control" type="text" id="name_contact" name="name_contact"
                                    placeholder="Name" required>
                                <label for="name_contact">Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-4">
                                <input class="form-control" type="text" id="lastname_contact" name="lastname_contact"
                                    placeholder="Last Name">
                                <label for="lastname_contact">Last name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-4">
                                <input class="form-control" type="email" id="email_contact" name="email_contact"
                                    placeholder="Email" required>
                                <label for="email_contact">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-4">
                                <input class="form-control" type="text" id="phone_contact" name="phone_contact"
                                    placeholder="Telephone">
                                <label for="phone_contact">Telephone</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact" required></textarea>
                        <label for="message_contact">Message</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select class="form-control" id="subject_contact" name="subject_contact" required>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Booking Request">Booking Request</option>
                            <option value="Special Requests">Special Requests</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Complaint">Complaint</option>
                        </select>
                        <label for="subject_contact">Subject</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input class="form-control" type="text" id="verify_contact" name="verify_contact"
                                    placeholder="Are you human? 3 + 1 =" required>
                                <label for="verify_contact">Are you human? 3 + 1 =</label>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">
                        <input type="submit" value="Submit" class="btn_1 outline" id="submit-contact">
                    </p>
                </form>

                <!-- Success/Error Message Placeholder -->
                <div id="message-status"></div>

                <style>
                    /* Spinner styles */
                    .spinner {
                        border: 5px solid #f3f3f3;
                        /* Light gray */
                        border-top: 5px solid #3498db;
                        /* Blue */
                        border-radius: 50%;
                        width: 40px;
                        height: 40px;
                        animation: spin 1s linear infinite;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    /* Blurring background during submission */
                    body.loading {
                        overflow: hidden;
                    }

                    body.loading::after {
                        content: "";
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.5);
                        /* Semi-transparent overlay */
                        z-index: 9999;
                        filter: blur(5px);
                    }

                    .spinner-container {
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        z-index: 10000;
                        /* Ensure it's above the blur overlay */
                    }

                    /* Success/Error message styles */
                    #message-status {
                        margin-top: 20px;
                        font-weight: bold;
                        padding: 10px;
                        text-align: center;
                        border-radius: 5px;
                        display: none;
                        /* Hidden by default */
                    }

                    .success {
                        background-color: #28a745;
                        color: white;
                    }

                    .error {
                        background-color: #dc3545;
                        color: white;
                    }
                </style>

                <script>
                    document.getElementById('contactform').addEventListener('submit', async function(e) {
                        e.preventDefault(); // Prevent the form from submitting normally
                        const form = e.target;
                        const formData = new FormData(form);

                        // Apply blur effect to the body
                        document.body.classList.add('loading');

                        // Create and show the spinner
                        const spinnerContainer = document.createElement('div');
                        spinnerContainer.classList.add('spinner-container');
                        spinnerContainer.innerHTML = '<div class="spinner"></div>';
                        document.body.appendChild(spinnerContainer);

                        // Hide the success/error message
                        const messageStatus = document.getElementById('message-status');
                        messageStatus.style.display = 'none';

                        try {
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'Accept': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                            });

                            if (response.ok) {
                                const result = await response.json();
                                // Show success message
                                messageStatus.textContent = result.message;
                                messageStatus.classList.add('success');
                                messageStatus.style.display = 'block';
                            } else {
                                // Show error message
                                messageStatus.textContent = 'Error submitting the form.';
                                messageStatus.classList.add('error');
                                messageStatus.style.display = 'block';
                            }
                        } catch (error) {
                            // Handle unexpected errors
                            messageStatus.textContent = 'An error occurred. Please try again.';
                            messageStatus.classList.add('error');
                            messageStatus.style.display = 'block';
                        } finally {
                            // Remove spinner and restore page
                            document.body.removeChild(spinnerContainer);
                            document.body.classList.remove('loading');
                        }
                    });
                </script>


            </div>
        </div>

        <!-- /row -->
        </div>
        <!--/container -->

        <div class="map_contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.65107988653!2d36.5177334104462!3d-1.3031873859975642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1737548947925!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!--/map_contact -->

            @include('enquary')
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

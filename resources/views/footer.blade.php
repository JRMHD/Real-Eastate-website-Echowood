<footer class="revealed">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" style="background-image: url('img/rooms/3.jpg');"></div>
    </div>
    <div class="container">
        <div class="row move_content">
            <!-- Contacts Section -->
            <div class="col-lg-4 col-md-12">
                <h5>Contacts</h5>
                <ul>
                    <li>Lower Kabate,Westlands,<br>Nairobi, Kenya</li>
                    <li><strong><a href="mailto:Maryanyangobell@gmail.com">Maryanyangobell@gmail.com</a></strong></li>
                    <li><strong><a href="tel:254 702 426184">+254 702 426184</a></strong></li>
                    <li><strong><a href="tel:254 781 973159">+254 781 973159
                            </a></strong></li>
                </ul>
                <div class="social">
                    <ul>
                        <li><a href="https://www.instagram.com/reel/DFIae5ssjqR/?igsh=bHU5OW85MnJhcmhl"><i
                                    class="bi bi-instagram"></i></a></li>
                        <li><a href="https://wa.me/254702426184"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/share/r/15aQR6e8cV/?mibextid=wwXIfr"><i
                                    class="bi bi-facebook"></i></a></li>
                        <li><a href="https://x.com/MaryAnyang10444"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="https://vm.tiktok.com/ZMkxtHAAN/"><i class="bi bi-tiktok"></i></a></li>
                        <li><a href="https://www.linkedin.com/groups/10047327/"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/shorts/412pZhoRhdQ"><i class="bi bi-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
            <!-- Explore Section -->
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Explore</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contacts">Contacts</a></li>
                </ul>
            </div>
            <!-- Newsletter Section -->
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>Newsletter</h5>
                    <form method="post" id="newsletter_form">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                        </div>
                        <div id="loader" style="display: none;">
                            <div class="spinner"></div>
                        </div>
                        <style>
                            /* Spinner styling */
                            #loader .spinner {
                                border: 5px solid rgba(0, 0, 0, 0.1);
                                border-top: 5px solid #007bff;
                                border-radius: 50%;
                                width: 50px;
                                height: 50px;
                                animation: spin 1s linear infinite;
                                margin: 0 auto;
                                position: relative;
                                top: 20px;
                            }

                            @keyframes spin {
                                0% {
                                    transform: rotate(0deg);
                                }

                                100% {
                                    transform: rotate(360deg);
                                }
                            }

                            /* Success and error messages */
                            #message {
                                margin-top: 10px;
                                padding: 10px;
                                font-size: 16px;
                                text-align: center;
                            }

                            #message.success {
                                color: green;
                                background-color: #d4edda;
                                border: 1px solid #c3e6cb;
                            }

                            #message.error {
                                color: red;
                                background-color: #f8d7da;
                                border: 1px solid #f5c6cb;
                            }
                        </style>


                        <script>
                            document.getElementById('newsletter_form').addEventListener('submit', function(e) {
                                e.preventDefault(); // Prevent default form submission

                                const form = e.target;
                                const formData = new FormData(form);
                                const loader = document.getElementById('loader');
                                const messageDiv = document.getElementById('message');

                                // Show loader
                                loader.style.display = 'block';

                                fetch('{{ url('newsletter/store') }}', {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': formData.get('_token'),
                                            'Accept': 'application/json',
                                        },
                                        body: formData,
                                    })
                                    .then(async (response) => {
                                        loader.style.display = 'none'; // Hide loader

                                        const result = await response.json();

                                        if (response.ok) {
                                            messageDiv.style.display = 'block';
                                            messageDiv.className = 'success';
                                            messageDiv.textContent = result.message;
                                            form.reset();
                                        } else {
                                            messageDiv.style.display = 'block';
                                            messageDiv.className = 'error';
                                            messageDiv.textContent = result.message || 'An error occurred.';
                                        }
                                    })
                                    .catch((error) => {
                                        loader.style.display = 'none';

                                        messageDiv.style.display = 'block';
                                        messageDiv.className = 'error';
                                        messageDiv.textContent = 'Failed to submit the form. Please try again.';
                                    });
                            });
                        </script>
                        <div id="message" style="display: none;"></div>
                    </form>



                    <p>Stay connected with the latest Echowood updates, offers, and news. Subscribe now and stay
                        informed about the best opportunities, with no commitments.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copy Section -->
    <div class="copy">
        <div class="container">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script> {{ config('app.name') }} - Designed and Developed by
            <a href="https://www.jrmhd.tech/" target="_blank">Jrmhd Technologies</a>
        </div>
    </div>

</footer>

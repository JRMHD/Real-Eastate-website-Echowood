<div class="container margin_120_95" id="enquiry_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>EchoWood Inquiry</small>
                    <h2>Send an Inquiry about EchoWood</h2>
                </div>
                <p>If you're interested in learning more about our EchoWood service, or have any questions about how it
                    works, please fill out the form below. Our team will get back to you as soon as possible.</p>
                <p class="phone_element no_borders"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info
                                and assistance</em>+254 702 426184</span></a></p>
            </div>
        </div>
        <div class="col-xl-7">
            <div data-cue="slideInUp" data-delay="200">
                <div class="enquiry_wrapper">
                    <form method="POST" action="{{ route('enquiry.store') }}" id="enquairy">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom_select mb-3">
                                    <select class="wide" name="echo_wood_interest" id="echo_wood_interest" required>
                                        <option value="">What would you like to know about EchoWood?</option>
                                        <option value="Features">Features of EchoWood</option>
                                        <option value="Pricing">Pricing Details</option>
                                        <option value="Booking">How to Book EchoWood</option>
                                        <option value="Custom Request">Custom Requirements</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="date" name="preferred_date" id="preferred_date" class="form-control"
                                        placeholder="Preferred Date" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="date" name="follow_up_date" id="follow_up_date" class="form-control"
                                        placeholder="Follow-up Date" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" id="message" class="form-control" placeholder="Any additional questions or requests"
                                rows="4"></textarea>
                        </div>
                        <p class="text-end mt-4"><button type="submit" class="btn_1 outline">Send Inquiry</button></p>
                    </form>
                    <!-- Success/Error Message Placeholder -->
                    <div id="message-status"></div>
                    <script>
                        document.getElementById('enquairy').addEventListener('submit', async function(e) {
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
                                    messageStatus.textContent = 'Error submitting the inquiry.';
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

                </div>
            </div>
        </div>
    </div>
</div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="tp-section-title-wrapper mb-50 wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    <h2 class="tp-section-title mb-20 fs-100">Register</h2>
                                    <p>Join Mission AIM to start your learning journey</p>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="contact-form-wrapper">
                                    <h3 class="tpform-title mb-25">Create Account</h3>
                                </div>
                                <div class="contact-form-box">
                                    <form action="process_registration.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-30">
                                                <input type="text" name="first_name" placeholder="First Name*" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="text" name="last_name" placeholder="Last Name*" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <input type="email" name="email" placeholder="Email Address*" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="tel" name="phone" placeholder="Phone Number*" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="date" name="dob" placeholder="Date of Birth*" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <input type="password" name="password" placeholder="Create Password*" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <input type="password" name="confirm_password" placeholder="Confirm Password*" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <select name="course" class="form-select" required>
                                                    <option value="">Select Course*</option>
                                                    <option value="course1">Course 1</option>
                                                    <option value="course2">Course 2</option>
                                                    <option value="course3">Course 3</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mb-30">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                                    <label class="form-check-label" for="terms">
                                                        I agree to the Terms & Conditions and Privacy Policy
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="tp-btn">
                                                    <span class="tp-btn-wrap">
                                                        <span class="tp-btn-y-1">Register Now</span>
                                                        <span class="tp-btn-y-2">Register Now</span>
                                                    </span>  
                                                    <i></i>
                                                </button>
                                            </div>
                                            <div class="col-12 mt-20 text-center">
                                                <p>Already have an account? <a href="login.php" class="text-primary">Login here</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

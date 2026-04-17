<?php
$page_title = "Vendor Signup | Nobility";
$description = "Lorem ipsum ...";
include('../partials/head.php');
?>

<body>
    <div class="container-fluid p-0 auth-container vendorloginPage">
        <div class="row g-0">
            
            <div class="col-md-6 d-none d-md-block image-container">
                <img src="<?php echo $page_url; ?>/assets/images/vendor/cover.png" alt="auth cover" class="img-fluid auth-image">
            </div>

            <!-- Right side - Multi‑step Form -->
            <div class="col-md-6 form-container">
                <div class="form-wrapper">
                    <!-- Logo (unchanged) -->
                    <div class="text-center logo mb-2">
                        <img src="<?php echo $page_url; ?>/assets/images/logo-dark.svg" alt="Nobility Logo" class="logo">
                        <p class="logoSub">Create your vendor account</p>
                    </div>

                    <!-- Multi‑step form -->
                    <form id="signupForm" action="#" method="POST">
                        <div class="step step-1">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name <span class="text-accent">*</span></label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name <span class="text-accent">*</span></label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number <span class="text-accent">*</span></label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-accent">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                            </div>
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Company Name <span class="text-accent">*</span></label>
                                <input type="text" class="form-control" id="companyName" placeholder="Enter company name" required>
                            </div>
                            <div class="mb-3">
                                <label for="regNumber" class="form-label">Registration Number <span class="text-accent">*</span></label>
                                <input type="text" class="form-control" id="regNumber" placeholder="Enter registration number" required>
                            </div>
                            <div class="mb-4">
                                <label for="companyAddress" class="form-label">Company Address <span class="text-accent">*</span></label>
                                <input type="text" class="form-control" id="companyAddress" placeholder="Enter company address" required>
                            </div>

                            <!-- Continue button -->
                            <button type="button" class="btn btn-login w-100" id="continueBtn">Continue</button>
                        </div>

                        <!-- Step 2: Password & Terms -->
                        <div class="step step-2 d-none">
                            <!-- New Password field + error -->
                            <div class="mb-2 position-relative">
                                <label for="password" class="form-label">Password <span class="text-accent">*</span></label>
                                <input type="password" class="form-control pe-5" id="password" placeholder="Enter password" required>
                                <span class="togglePassword">
                                    <i class="bi bi-eye-slash eyeIcon"></i>
                                </span>
                            </div>
                            <div id="passwordError" class="invalid-feedback mt-0 mb-3" style="display: none;"></div>

                            <!-- Confirm Password field + error -->
                            <div class="mb-2 position-relative">
                                <label for="confirmPassword" class="form-label">Confirm Password <span class="text-accent">*</span></label>
                                <input type="password" class="form-control pe-5" id="confirmPassword" placeholder="Confirm password" required>
                                <span class="togglePassword">
                                    <i class="bi bi-eye-slash eyeIcon"></i>
                                </span>
                            </div>
                            <div id="confirmError" class="invalid-feedback mt-0 mb-3" style="display: none;"></div>

                            <!-- Terms checkbox -->
                            <div class="mb-4 ms-1 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">Agree with <a href="#" target="_blank">Terms & Condition</a></label>
                            </div>

                            <!-- Create Account button -->
                            <button type="submit" class="btn btn-login w-100" id="createAccountBtn">Create Account</button>

                            <!-- Back link -->
                            <p class="text-center mt-3">
                                <a href="#" id="backToDetails" class="text-decoration-none">← Back to details</a>
                            </p>
                        </div>
                    </form>

                    <p class="text-center mt-4">Already have an account? <a href="login" class="text-decoration-none">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <div class="modal-body">
                    <img src="<?php echo $page_url; ?>/assets/images/green-tick.svg" alt="Nobility Logo" style="max-width: 190px; margin-bottom: 20px;">
                    <h3 id="successModalLabel" class="mb-4">Signup Successful!</h3>
                    <a href="<?php echo $page_url; ?>/vendor/dashboard" class="btn btn-login w-100">Done</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('../partials/scripts.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ----- DOM elements -----
            const step1 = document.querySelector('.step-1');
            const step2 = document.querySelector('.step-2');
            const continueBtn = document.getElementById('continueBtn');
            const backLink = document.getElementById('backToDetails');
            const formWrapper = document.querySelector('.form-wrapper');
            const togglePasswords = document.querySelectorAll('.togglePassword');

            // Password validation elements
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const passwordError = document.getElementById('passwordError');
            const confirmError = document.getElementById('confirmError');
            const terms = document.getElementById('terms');
            const form = document.getElementById('signupForm');

            togglePasswords.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const eyeIcon = this.querySelector('.eyeIcon');
                    if (input && input.type === 'password') {
                        input.type = 'text';
                        eyeIcon.classList.remove('bi-eye-slash');
                        eyeIcon.classList.add('bi-eye');
                    } else if (input) {
                        input.type = 'password';
                        eyeIcon.classList.remove('bi-eye');
                        eyeIcon.classList.add('bi-eye-slash');
                    }
                });
            });

            // ----- intl-tel-input on phone field -----
            const phoneInput = document.querySelector("#phone");
            let iti;
            if (phoneInput) {
                iti = window.intlTelInput(phoneInput, {
                    initialCountry: "gb",
                    separateDialCode: true,
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
                });
            }

            // ----- Password validation functions (real-time) -----
            function validatePassword() {
                const pass = password.value;
                if (pass.length === 0) {
                    passwordError.style.display = 'none';
                    password.classList.remove('is-invalid');
                    return false;
                }
                if (pass.length < 8) {
                    passwordError.textContent = 'Password must be at least 8 characters.';
                    passwordError.style.display = 'block';
                    password.classList.add('is-invalid');
                    return false;
                } else {
                    passwordError.style.display = 'none';
                    password.classList.remove('is-invalid');
                    return true;
                }
            }

            function validateConfirm() {
                const pass = password.value;
                const confirm = confirmPassword.value;
                if (confirm.length === 0) {
                    confirmError.style.display = 'none';
                    confirmPassword.classList.remove('is-invalid');
                    return false;
                }
                if (pass !== confirm) {
                    confirmError.textContent = 'Passwords do not match.';
                    confirmError.style.display = 'block';
                    confirmPassword.classList.add('is-invalid');
                    return false;
                } else {
                    confirmError.style.display = 'none';
                    confirmPassword.classList.remove('is-invalid');
                    return true;
                }
            }

            // Attach real-time validation to password fields
            if (password) {
                password.addEventListener('input', function() {
                    validatePassword();
                    if (confirmPassword.value.length > 0) validateConfirm();
                });
            }
            if (confirmPassword) {
                confirmPassword.addEventListener('input', validateConfirm);
            }

            // ----- Transition to Step 2 -----
            continueBtn.addEventListener('click', function() {
                // Validate Step 1 required fields
                const requiredFields = step1.querySelectorAll('[required]');
                let allValid = true;
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        allValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                if (!allValid) return;

                // Animate transition
                const currentHeight = formWrapper.offsetHeight;
                formWrapper.style.height = currentHeight + 'px';

                step1.classList.add('fade-out');
                setTimeout(() => {
                    step1.classList.add('d-none');
                    step1.classList.remove('fade-out');

                    step2.classList.remove('d-none');
                    void step2.offsetWidth; // force reflow
                    step2.classList.add('fade-in');

                    const newHeight = step2.offsetHeight;
                    formWrapper.style.height = newHeight + 'px';
                    setTimeout(() => {
                        formWrapper.style.height = '';
                    }, 400);
                }, 400);
            });

            // ----- Back to Step 1 -----
            backLink.addEventListener('click', function(e) {
                e.preventDefault();

                const currentHeight = formWrapper.offsetHeight;
                formWrapper.style.height = currentHeight + 'px';

                step2.classList.remove('fade-in');
                step2.classList.add('fade-out');
                setTimeout(() => {
                    step2.classList.add('d-none');
                    step2.classList.remove('fade-out');

                    step1.classList.remove('d-none');
                    step1.classList.remove('fade-out'); // ensure it's visible

                    const newHeight = step1.offsetHeight;
                    formWrapper.style.height = newHeight + 'px';
                    setTimeout(() => {
                        formWrapper.style.height = '';
                    }, 400);
                }, 400);
            });

            // ----- Final form submit (Step 2) -----
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // always prevent default – we handle via JS

                // Validate passwords
                const isPassValid = validatePassword();
                const isConfirmValid = validateConfirm();

                // Check terms
                if (!terms.checked) {
                    alert('You must agree to the Terms & Conditions.');
                    terms.focus();
                    return;
                }

                if (isPassValid && isConfirmValid) {
                    if (iti) {
                        const hiddenPhone = document.createElement('input');
                        hiddenPhone.type = 'hidden';
                        hiddenPhone.name = 'phone_full';
                        hiddenPhone.value = iti.getNumber();
                        form.appendChild(hiddenPhone);
                    }

                    // Show success modal
                    const modal = new bootstrap.Modal(document.getElementById('successModal'));
                    modal.show();
                } else {
                    // Focus first invalid field
                    if (!isPassValid) password.focus();
                    else if (!isConfirmValid) confirmPassword.focus();
                }
            });

            window.addEventListener('resize', function() {
                if (!step1.classList.contains('d-none')) {
                    formWrapper.style.height = step1.offsetHeight + 'px';
                } else {
                    formWrapper.style.height = step2.offsetHeight + 'px';
                }
                setTimeout(() => {
                    formWrapper.style.height = '';
                }, 50);
            });
        });
    </script>
</body>

</html>
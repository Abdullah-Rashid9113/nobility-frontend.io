<?php

$page_title = "Admin Forget Password | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('../partials/head.php');
?>

<body>
    <div class="container-fluid p-0 auth-container forgetPass-Page">
        <div class="row g-0">
            <!-- Left side - Image -->
            <div class="col-md-6 d-none d-md-block image-container">
                <img src="<?php echo $page_url; ?>/assets/images/admin/cover.png" alt="auth cover" class="img-fluid auth-image">
            </div>

            <!-- Right side - Form -->
            <div class="col-md-6 form-container">
                <div class="form-wrapper">
                    <!-- Logo -->
                    <div class="text-center logo mb-2">
                        <img src="<?php echo $page_url; ?>/assets/images/logo-dark.svg" alt="Nobility Logo" class="logo">
                        <h2>forgot password</h2>
                        <p class="logoSub">Enter your email for the verification process, we will send 4 digit to your email</p>
                    </div>

                    <!-- Login Form -->
                    <form action="otp-code" method="POST">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email <span class="text-accent">*</span></label>
                            <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter email address">
                            <div class="invalid-feedback" id="emailError" style="display: none;">Please enter a valid email address</div>
                        </div>

                        <button type="submit" class="btn btn-login mt-2 mb-4 w-100">Send Code</button>

                        <p class="w-100 text-center">Back to <a href="login" class="text-decoration-none">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../partials/scripts.php');
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('loginEmail');
            const emailError = document.getElementById('emailError');
            const form = document.getElementById('forgotForm');

            emailInput.addEventListener('input', function() {
                validateEmail();
            });

            emailInput.addEventListener('blur', function() {
                validateEmail();
            });

            form.addEventListener('submit', function(e) {
                if (!validateEmail()) {
                    e.preventDefault();
                    emailError.style.display = 'block';
                    emailInput.classList.add('is-invalid');
                }
            });

            function validateEmail() {
                const email = emailInput.value.trim();
                const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

                if (!isValid && email !== '') {
                    emailError.style.display = 'block';
                    emailInput.classList.add('is-invalid');
                    return false;
                } else {
                    emailError.style.display = 'none';
                    emailInput.classList.remove('is-invalid');
                    return true;
                }
            }

            validateEmail();
        });
    </script>

</body>

</html>
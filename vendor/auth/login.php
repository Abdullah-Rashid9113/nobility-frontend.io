<?php

$page_title = "Vendor Login | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('../partials/head.php');
?>

<body>
    <div class="container-fluid p-0 auth-container vendorloginPage">
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
                        <p class="logoSub">Sign in to your account</p>
                    </div>

                    <!-- Login Form -->
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email <span class="text-accent">*</span></label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter Email">
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="loginPassword" class="form-label">Password <span class="text-accent">*</span></label>

                            <input type="password" class="form-control pe-5" id="loginPassword" placeholder="Enter Password">

                            <span class="togglePassword">
                                <i class="bi bi-eye-slash eyeIcon"></i>
                            </span>
                        </div>

                        <div class="formBottom text-center d-flex justify-content-between mt-4 mb-4">
                            <div class="d-flex align-items-center swithToogle gap-2">

                                <label class="switch mb-0">
                                    <input type="checkbox" name="remember">
                                    <span class="slider"></span>
                                </label>

                                <label for="remember" class="mb-0">Remember me</label>

                            </div>
                            <a href="forget-password.php" class="forgot-password">Forgot Your Password?</a>
                        </div>

                        <button type="submit" class="btn btn-login w-100">Login</button>

                        <p class="text-center mt-4 mb-4">or Login with</p>
                        <div class="socialLogin">
                            <a href="#" class="socialBtn"><img src="<?php echo $page_url; ?>/assets/icons/google.svg" alt="Google"></a>
                            <a href="#" class="socialBtn"><img src="<?php echo $page_url; ?>/assets/icons/facebook.svg" alt="Facebook"></a>
                            <a href="#" class="socialBtn"><img src="<?php echo $page_url; ?>/assets/icons/x.svg" alt="Twitter"></a>
                            <a href="#" class="socialBtn"><img src="<?php echo $page_url; ?>/assets/icons/apple.svg" alt="Apple"></a>
                            <a href="#" class="socialBtn"><img src="<?php echo $page_url; ?>/assets/icons/instagram.svg" alt="Instagram"></a>
                        </div>
                        <p class="text-center mt-4">Not a user? <a href="signup.php" class="text-decoration-none">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <div class="modal-body">
                    <img src="<?php echo $page_url; ?>/assets/images/green-tick.svg" alt="Nobility Logo" style="max-width: 190px; margin-bottom: 20px;">
                    <h3 id="successModalLabel" class="mb-4">Login Successful!</h3>
                    <a href="<?php echo $page_url; ?>/vendor/dashboard.php" class="btn btn-login w-100">Done</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../partials/scripts.php');
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const togglePasswords = document.querySelectorAll('.togglePassword');

            togglePasswords.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const password = this.previousElementSibling;
                    const eyeIcon = this.querySelector('.eyeIcon');
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);

                    // Toggle icon
                    eyeIcon.classList.toggle('bi-eye');
                    eyeIcon.classList.toggle('bi-eye-slash');
                });
            });


            // On form submit
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show success modal
                const modal = new bootstrap.Modal(document.getElementById('successModal'));
                modal.show();
            });


        });
    </script>

</body>

</html>
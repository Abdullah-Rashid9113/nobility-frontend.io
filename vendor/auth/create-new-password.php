<?php
$page_title = "Admin New Password | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('../partials/head.php');
?>

<body>
    <div class="container-fluid p-0 auth-container createNewPasswordPage">
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
                        <h2>Create New password</h2>
                        <p class="logoSub">set a new password for your account.</p>
                    </div>

                    <!-- Password Form -->
                    <form action="#" method="POST" id="passwordForm" novalidate>
                        <!-- New Password -->
                        <div class="mb-2 position-relative">
                            <label for="newPassword" class="form-label">New Password <span class="text-accent">*</span></label>
                            <input type="password" class="form-control pe-5" id="newPassword" placeholder="Enter Password" required>
                            <span class="togglePassword">
                                <i class="bi bi-eye-slash eyeIcon"></i>
                            </span>
                        </div>

                        <!-- Hint and validation message -->
                        <div class="mb-4">
                            <div id="passwordError" class="invalid-feedback" style="display: none;"></div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-2 position-relative">
                            <label for="confirmPassword" class="form-label">Confirm Password <span class="text-accent">*</span></label>
                            <input type="password" class="form-control pe-5" id="confirmPassword" placeholder="Confirm New Password" required>
                            <span class="togglePassword">
                                <i class="bi bi-eye-slash eyeIcon"></i>
                            </span>
                        </div>
                        <!-- Confirm error message -->
                        <div id="confirmError" class="invalid-feedback mt-0 mb-4" style="display: none;"></div>

                        <button type="submit" class="btn btn-login mt-4 mb-4 w-100" id="submitBtn">Update Password</button>
                        <p class="w-100 text-center">Back to <a href="login" class="text-decoration-none">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <div class="modal-body">
                    <!-- Logo (same as page logo) -->
                    <img src="<?php echo $page_url; ?>/assets/images/green-tick.svg" alt="Nobility Logo" style="max-width: 190px; margin-bottom: 20px;">
                    <h3 id="successModalLabel" class="mb-4">Password updated Successfully!</h3>
                    <a href="login" class="btn btn-login w-100">Continue To Login</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newPass = document.getElementById('newPassword');
            const confirmPass = document.getElementById('confirmPassword');
            const passwordError = document.getElementById('passwordError');
            const confirmError = document.getElementById('confirmError');
            const form = document.getElementById('passwordForm');
            const toggleIcons = document.querySelectorAll('.togglePassword');

            // Toggle password visibility
            toggleIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    // Find the associated input (previous sibling)
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

            // Validation functions
            function validatePassword() {
                const pass = newPass.value;
                if (pass.length === 0) {
                    passwordError.style.display = 'none';
                    newPass.classList.remove('is-invalid');
                    return false;
                }
                if (pass.length < 8) {
                    passwordError.textContent = 'Password must be at least 8 characters.';
                    passwordError.style.display = 'block';
                    newPass.classList.add('is-invalid');
                    return false;
                } else {
                    passwordError.style.display = 'none';
                    newPass.classList.remove('is-invalid');
                    return true;
                }
            }

            function validateConfirm() {
                const pass = newPass.value;
                const confirm = confirmPass.value;
                if (confirm.length === 0) {
                    confirmError.style.display = 'none';
                    confirmPass.classList.remove('is-invalid');
                    return false;
                }
                if (pass !== confirm) {
                    confirmError.textContent = 'Passwords do not match.';
                    confirmError.style.display = 'block';
                    confirmPass.classList.add('is-invalid');
                    return false;
                } else {
                    confirmError.style.display = 'none';
                    confirmPass.classList.remove('is-invalid');
                    return true;
                }
            }

            // Real-time validation
            newPass.addEventListener('input', function() {
                validatePassword();
                if (confirmPass.value.length > 0) validateConfirm();
            });

            confirmPass.addEventListener('input', validateConfirm);

            // On form submit
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Always prevent default to handle via JS

                const isPassValid = validatePassword();
                const isConfirmValid = validateConfirm();

                if (isPassValid && isConfirmValid) {
                    // Show success modal
                    const modal = new bootstrap.Modal(document.getElementById('successModal'));
                    modal.show();
                } else {
                    // Focus first invalid field
                    if (!isPassValid) newPass.focus();
                    else if (!isConfirmValid) confirmPass.focus();
                }
            });

            // Optional: initial check (if prefilled)
            validatePassword();
            validateConfirm();
        });
    </script>

    <?php
    include('../partials/scripts.php');
    ?>

</body>

</html>
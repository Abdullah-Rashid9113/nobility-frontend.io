<?php
$page_title = "Admin OTP Code | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('../partials/head.php');
?>

<body>
    <div class="container-fluid p-0 auth-container OTP-Page">
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
                        <h2>Enter 4 digit code</h2>
                        <p class="logoSub">Enter 4 digit code that you received on your email (<strong>henry.thomas@gmail.com</strong>).</p>
                    </div>

                    <!-- OTP Form -->
                    <form action="create-new-password" method="POST" id="otpForm">
                        <!-- Hidden email for resend -->
                        <input type="hidden" id="userEmail" value="henry.thomas@gmail.com">

                        <div class="mb-3">
                            <label for="otpCode" class="form-label">Verification Code <span class="text-accent">*</span></label>
                            <input type="text" class="form-control" id="otpCode" name="otp" placeholder="Enter 4-digit code" maxlength="4" inputmode="numeric" pattern="\d{4}" required>
                        </div>

                        <!-- Resend row with timer -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0" style="font-size: 0.9rem; color: #062338d0;">Email not received?</p>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" id="resendLink" class="me-2">Resend Code</a>
                                <span id="timerDisplay" class="text-muted" style="font-size:0.9rem;">01:00</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-login mt-2 mb-4 w-100" id="continueBtn">Continue</button>

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
            // Timer settings
            let timerSeconds = 60;
            let timerInterval = null;
            const timerDisplay = document.getElementById('timerDisplay');
            const resendLink = document.getElementById('resendLink');
            const userEmail = document.getElementById('userEmail').value;

            // Disable resend link initially
            resendLink.classList.add('disabled');
            resendLink.style.pointerEvents = 'none';
            resendLink.style.opacity = '0.6';

            // Start countdown
            startTimer();

            // Resend link click handler
            resendLink.addEventListener('click', function(e) {
                e.preventDefault();
                if (resendLink.classList.contains('disabled')) return;

                console.log('Resending code to ' + userEmail);

                // Disable link and restart timer
                resendLink.classList.add('disabled');
                resendLink.style.pointerEvents = 'none';
                resendLink.style.opacity = '0.6';
                timerSeconds = 60;
                updateTimerDisplay();
                startTimer();
            });

            // Timer functions
            function startTimer() {
                if (timerInterval) clearInterval(timerInterval);
                timerInterval = setInterval(function() {
                    if (timerSeconds <= 0) {
                        clearInterval(timerInterval);
                        timerInterval = null;
                        timerDisplay.textContent = '00:00';
                        // Enable resend link
                        resendLink.classList.remove('disabled');
                        resendLink.style.pointerEvents = 'auto';
                        resendLink.style.opacity = '1';
                    } else {
                        timerSeconds--;
                        updateTimerDisplay();
                    }
                }, 1000);
            }

            function updateTimerDisplay() {
                const mins = Math.floor(timerSeconds / 60);
                const secs = timerSeconds % 60;
                timerDisplay.textContent = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
            }

        });
    </script>
</body>

</html>
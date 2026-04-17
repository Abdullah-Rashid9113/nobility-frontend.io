<?php

$page_title = "Nobility | Admin Portal";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<body>
    <div class="MainSplash adminSplash position-relative d-flex flex-column align-items-center justify-content-start vh-100 overflow-hidden">

        <div class="text-center contentBlock position-relative" style="z-index:10">

            <!-- Logo icon -->
            <div class="logo-box d-flex align-items-center justify-content-center mx-auto mb-1">
                <img src="<?php echo $page_url; ?>/assets/images/logo.svg" alt="Nobility Logo" class="w-100">
            </div>

            <!-- Headline -->
            <h1 class="text-white mt-4">
                Welcome to<br>Admin Portal
            </h1>

            <!-- Tagline -->
            <p class="mt-2 mb-4" style="font-weight: 400 !important;">
                Empowering administrators with smart control and insights.usdyausadtyugajsdgu
            </p>

            <!-- CTA button -->
            <button onclick="window.location.href='auth/login'" class="cta-circle d-inline-flex align-items-center justify-content-center anim-5"
                aria-label="Enter Admin Portal">
               <i class="fa-solid fa-chevron-right"></i>
            </button>

        </div>

        <div class="wave-area">
            <img src="<?php echo $page_url; ?>/assets/images/splash.svg" class="splashWave" alt="wave">
        </div>

        <p class="footer-url text-uppercase fw-semibold position-absolute bottom-0 mb-4" style="color: #031626;">
            www.nobility4u.com
        </p>

    </div>

    <?php
    include('partials/scripts.php');
    ?>
</body>

</html>
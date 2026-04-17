<?php

$page_title = "Nobility | Vendor Portal";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<body>
    <div class="MainSplash vendorSplash position-relative d-flex flex-column align-items-center justify-content-start vh-100 overflow-hidden">

        <div class="text-center contentBlock position-relative" style="z-index:10">

            <!-- Logo icon -->
            <div class="logo-box d-flex align-items-center justify-content-center mx-auto mb-1">
                <img src="<?php echo $page_url; ?>/assets/images/logo.svg" alt="Nobility Logo" class="w-100">
            </div>

            <!-- Headline -->
            <h1 class="text-white mt-4">
                Welcome to<br>Vendor Portal
            </h1>

            <!-- Tagline -->
            <p class="mt-2 mb-4" style="font-weight: 400 !important;">
                Your one stop destination for hassle free online shopping and services.
            </p>

           <div class="d-flex justify-content-center align-items-center w-100 gap-4 btnWrap">
            <button onclick="window.location.href='auth/login'" class="btn btn-primary"
                aria-label="Sign In">
                Sign In
            </button>
            <button onclick="window.location.href='auth/signup'" class="btn btn-outline"
                aria-label="Register">
                Register
            </button>
           </div>


        </div>

        <div class="wave-area">
            <img src="<?php echo $page_url; ?>/assets/images/splash.svg" class="splashWave" alt="">
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
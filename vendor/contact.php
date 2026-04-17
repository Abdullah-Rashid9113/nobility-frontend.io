<?php
$page_title = "Contact | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<body>

    <?php
    include('partials/sidebar.php');
    ?>

    <div id="main-wrapper">

        <?php
        include('partials/header.php');
        ?>

        <div id="page-content" class="dashboardPage contactPage">
            <div class="dashboard-wrap">

                <div class="prof-section">

                    <h2 class="prof-heading mb-4">Contact Us</h2>

                    <div class="form-container">
                        <form id="contactForm" action="#">

                            <div class="mb-3">
                                <label class="form-label">Full Name<span class="req">*</span></label>
                                <input type="text" class="form-control" id="ct-name" placeholder="Enter Full Name" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address<span class="req">*</span></label>
                                <input type="email" class="form-control" id="ct-email" placeholder="Enter Email Address" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subject<span class="req">*</span></label>
                                <input type="text" class="form-control" id="ct-subject" placeholder="Enter Subject" />
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Message<span class="req">*</span></label>
                                <textarea class="form-control" id="ct-message" rows="6" placeholder="Enter Message"></textarea>
                            </div>

                            <div id="ctFormErr" class="form-err mb-3" style="display:none"></div>

                            <button type="button" class="btn btn-primary" id="ctSubmitBtn">Submit</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="img-modal-overlay" id="ctSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <div class="success-tick-icon mb-2"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0">Successful!</h5>
            <p class="pm-confirm-desc">Contact information has been submitted.</p>
            <button class="btn btn-primary w-100" id="ctDoneBtn">Done</button>
        </div>
    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <script>
        $(function() {

            $('#ctSubmitBtn').on('click', function() {
                var name = $.trim($('#ct-name').val());
                var email = $.trim($('#ct-email').val());
                var subject = $.trim($('#ct-subject').val());
                var message = $.trim($('#ct-message').val());

                $('#ctFormErr').hide();

                if (!name || !email || !subject || !message) {
                    $('#ctFormErr').text('Please fill in all required fields.').show();
                    return;
                }

                $('#ctSuccessOverlay').fadeIn(200);
            });

            $('#ctDoneBtn').on('click', function() {
                $('#ctSuccessOverlay').fadeOut(200);
                $('#contactForm')[0].reset();
            });

            $('#ctSuccessOverlay').on('click', function(e) {
                if ($(e.target).is('#ctSuccessOverlay')) $(this).fadeOut(200);
            });

        });
    </script>

</body>

</html>
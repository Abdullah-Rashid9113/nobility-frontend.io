<?php
$page_title = "Admin Profile | Nobility ";
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

        <div id="page-content" class="profilePage adminProfilePage">
            <div class="dashboard-wrap">
                <div id="view-profile" class="prof-section">
                    <h2 class="prof-heading">My Profile</h2>

                    <div class="prof-avatar-wrap">
                        <img src="https://i.pravatar.cc/200?img=3" alt="Profile" id="avatarImg" class="prof-avatar-img" />
                    </div>

                    <div class="prof-info-list">
                        <div class="prof-info-row">
                            <span class="prof-info-label">Full Name:</span>
                            <span class="prof-info-val" id="v-firstname">Tom</span>
                        </div>
                        <div class="prof-info-row">
                            <span class="prof-info-label">Email Address:</span>
                            <span class="prof-info-val" id="v-email">tomalbert@gmail.com</span>
                        </div>
                    </div>

                    <div class="prof-btn-row">
                        <button class="btn btn-primary" id="goEditBtn">Edit Profile</button>
                        <button class="btn btn-outline btn-dark" id="goChangePwdBtn">Change Password</button>
                    </div>
                </div>


                <!-- ═══ VIEW 2: EDIT PROFILE ═══ -->
                <div id="view-edit" class="prof-section" style="display:none">
                    <h2 class="prof-heading">
                        <button class="back-btn" id="editBackBtn"><i class="bi bi-arrow-left"></i></button>
                        Edit Profile
                    </h2>

                    <!-- Avatar with camera -->
                    <div class="edit-avatar-wrap">
                        <div class="edit-avatar-circle">
                            <img src="https://i.pravatar.cc/200?img=3" alt="Profile" id="editAvatarImg" class="edit-avatar-img" />
                            <button class="camera-btn" id="openImageModal" type="button">
                                <i class="bi bi-camera-fill"></i>
                            </button>
                        </div>
                    </div>

                    <form action="">
                        <div class="edit-form f form-container">
                            <div class="edit-field">
                                <label>Full Name<span class="req">*</span></label>
                                <input type="text" id="e-fullname" class="form-control" placeholder="Full Name" value="Tom Albert" />
                            </div>
                            <div class="edit-field">
                                <label>Email Address<span class="req">*</span></label>
                                <input type="email" id="e-email" class="form-control" placeholder="Email Address" value="tomalbert@gmail.com" />
                            </div>
                            <div id="editFormError" class="form-err" style="display:none"></div>
                            <div class="prof-btn-row">
                                <button class="btn btn-primary" id="saveEditBtn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- ═══ VIEW 3: CHANGE PASSWORD ═══ -->
                <div id="view-change-pwd" class="prof-section" style="display:none">
                    <h2 class="prof-heading">
                        <button class="back-btn" id="pwdBackBtn"><i class="bi bi-arrow-left"></i></button>
                        Change Password
                    </h2>

                    <form action=""></form>
                    <div class="edit-form form-container">
                        <div class="edit-field">
                            <label>Current Password<span class="req">*</span></label>
                            <div class="pwd-wrap">
                                <input type="password" id="cp-current" class="form-control" placeholder="Enter current password" />
                                <button type="button" class="eye-btn togglePassword" data-target="cp-current"><i class="bi bi-eye-slash eyeIcon"></i></button>
                            </div>
                        </div>
                        <div class="edit-field">
                            <label>New Password<span class="req">*</span></label>
                            <div class="pwd-wrap">
                                <input type="password" id="cp-new" class="form-control" placeholder="Enter new password" />
                                <button type="button" class="eye-btn togglePassword" data-target="cp-new"><i class="bi bi-eye-slash eyeIcon"></i></button>
                            </div>
                        </div>
                        <div class="edit-field">
                            <label>Confirm New Password<span class="req">*</span></label>
                            <div class="pwd-wrap">
                                <input type="password" id="cp-confirm" class="form-control" placeholder="Confirm new password" />
                                <button type="button" class="eye-btn togglePassword" data-target="cp-confirm"><i class="bi bi-eye-slash eyeIcon"></i></button>
                            </div>
                        </div>
                        <div id="pwdFormError" class="form-err" style="display:none"></div>
                        <div class="prof-btn-row">
                            <button class="btn btn-primary" id="savePwdBtn">Update</button>
                        </div>
                    </div>
                    </form>
                </div>


                <!-- ═══ IMAGE UPLOAD MODAL ═══ -->
                <div class="img-modal-overlay" id="imgModalOverlay" style="display:none">
                    <div class="img-modal-box">
                        <!-- Preview circle -->
                        <div class="img-preview-wrap">
                            <div class="img-preview-circle">
                                <img id="imgPreview" src="https://i.pravatar.cc/200?img=3" alt="Preview" />
                            </div>
                        </div>
                        <!-- Upload trigger -->
                        <label class="upload-label" for="avatarFileInput">
                            <i class="bi bi-arrow-up-circle-fill"></i> Upload Image
                        </label>
                        <input type="file" id="avatarFileInput" accept="image/*" style="display:none" />
                        <!-- Zoom slider -->
                        <div class="zoom-wrap">
                            <input type="range" id="zoomSlider" min="1" max="2" step="0.01" value="1" class="zoom-slider" />
                        </div>
                        <!-- Update button -->
                        <button class="btn btn-primary w-100" id="applyImageBtn">Update</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4 success-modal-content">
                <div class="modal-body">
                    <img src="<?php echo $page_url; ?>/assets/images/green-tick.svg" alt="Nobility Logo" style="max-width: 190px; margin-bottom: 20px;">
                    <h3 id="successModalLabel" class="success-modal-title mb-3">Updated Successfully!</h3>
                    <button class="btn btn-primary w-100" id="successDoneBtn" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('partials/scripts.php');
    ?>


    <script>
        $(function() {

            /* ── View switcher helpers ── */
            function showView(id) {
                $('#view-profile, #view-edit, #view-change-pwd').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            /* ── Navigation ── */
            $('#goEditBtn').on('click', function() {
                // Sync edit fields from current displayed values
                $('#e-fullname').val($('#v-firstname').text());
                $('#e-email').val($('#v-email').text());

                showView('#view-edit');
            });

            $('#goChangePwdBtn').on('click', function() {
                showView('#view-change-pwd');
            });

            $('#editBackBtn').on('click', function() {
                showView('#view-profile');
                $('#editFormError').hide();
            });

            $('#pwdBackBtn').on('click', function() {
                showView('#view-profile');
                $('#pwdFormError').hide();
                $('#cp-current, #cp-new, #cp-confirm').val('');
            });

            /* ── Save Edit Profile ── */
            $('#saveEditBtn').on('click', function() {
                let fullname = $.trim($('#e-fullname').val());
                let em = $.trim($('#e-email').val());

                $('#editFormError').hide();

                if (!fullname || !em) {
                    $('#editFormError').text('Please fill in all required fields.').show();
                    return;
                }

                // Update profile view values
                $('#v-firstname').text(fullname);
                $('#v-email').text(em);

                // Update avatars
                let src = $('#editAvatarImg').attr('src');
                $('#avatarImg').attr('src', src);

                showView('#view-profile');
                $('#successModal').modal('show');
            });

            /* ── Save Change Password ── */
            $('#savePwdBtn').on('click', function() {
                let cur = $.trim($('#cp-current').val());
                let nw = $.trim($('#cp-new').val());
                let cnf = $.trim($('#cp-confirm').val());

                $('#pwdFormError').hide();

                if (!cur || !nw || !cnf) {
                    $('#pwdFormError').text('Please fill in all required fields.').show();
                    return;
                }
                if (nw.length < 8) {
                    $('#pwdFormError').text('New password must be at least 8 characters.').show();
                    return;
                }
                if (nw !== cnf) {
                    $('#pwdFormError').text('New passwords do not match.').show();
                    return;
                }

                // Reset fields
                $('#cp-current, #cp-new, #cp-confirm').val('');
                $('.eye-btn i').removeClass('bi-eye').addClass('bi-eye-slash');
                $('.pwd-wrap input').attr('type', 'password');

                showView('#view-profile');
                $('#successModal').modal('show');
            });

            /* ── Password eye toggle ── */
            $(document).on('click', '.eye-btn', function() {
                let id = $(this).data('target');
                let $inp = $('#' + id);
                let isPass = $inp.attr('type') === 'password';
                $inp.attr('type', isPass ? 'text' : 'password');
                $(this).find('i').toggleClass('bi-eye-slash bi-eye');
            });

            /* ── Image Upload Modal ── */
            let _selectedFile = null;

            $('#openImageModal').on('click', function() {
                $('#imgModalOverlay').fadeIn(200);
            });

            // Close overlay on background click
            $('#imgModalOverlay').on('click', function(e) {
                if ($(e.target).is('#imgModalOverlay')) {
                    $('#imgModalOverlay').fadeOut(200);
                }
            });

            // File chosen → show preview
            $('#avatarFileInput').on('change', function() {
                let file = this.files[0];
                if (!file) return;
                _selectedFile = file;
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgPreview').attr('src', e.target.result);
                    $('#zoomSlider').val(1).trigger('input');
                };
                reader.readAsDataURL(file);
            });

            // Zoom slider
            $('#zoomSlider').on('input', function() {
                let val = $(this).val();
                $('#imgPreview').css('transform', 'scale(' + val + ')');
                let pct = ((val - 1) / 1) * 100;
                $(this).css('background',
                    'linear-gradient(90deg, #e91e8c ' + pct + '%, #d0d3de ' + pct + '%)'
                );
            });

            // Apply image
            $('#applyImageBtn').on('click', function() {
                let src = $('#imgPreview').attr('src');
                $('#editAvatarImg').attr('src', src);
                $('#imgModalOverlay').fadeOut(200);
                _selectedFile = null;
                $('#avatarFileInput').val('');
                $('#zoomSlider').val(1).trigger('input');
            });

            /* ── Success modal done ── */
            $('#successDoneBtn').on('click', function() {
                $('#successModal').modal('hide');
            });

        });
    </script>
</body>

</html>
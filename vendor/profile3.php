<?php
$page_title = "Vendor Profile | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<style>
    /* ── Two-column layout for My Profile (same as Edit Profile) ── */
    .prof-two-col {
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }
    .prof-left-col {
        flex: 1;
    }
    .prof-right-col {
        flex: 1;
    }

    /* ── Images section on right ── */
    .prof-images-section { }
    .prof-images-heading { font-size: 1rem; font-weight: 600; margin-bottom: 12px; }
    .prof-images-grid { display: flex; flex-wrap: wrap; gap: 12px; }
    .prof-images-grid img {
        width: 110px;
        height: 110px;
        object-fit: cover;
        border-radius: 10px;
        border: 2px solid #f0f0f0;
    }

    /* ── Thumbnails in dropzone ── */
    .pm-thumb-row { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 12px; }
    .pm-thumb-item { position: relative; }
    .pm-thumb-img { width: 80px; height: 80px; object-fit: cover; border-radius: 8px; border: 2px solid #f0f0f0; }
    .pm-thumb-remove {
        position: absolute; top: -6px; right: -6px;
        width: 20px; height: 20px;
        background: #e91e8c; color: #fff;
        border: none; border-radius: 50%;
        font-size: 13px; line-height: 1;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
    }
    .pm-dropzone.drag-over { border-color: #e91e8c; background: #fff0fa; }
</style>

<body>

    <?php
    include('partials/sidebar.php');
    ?>

    <div id="main-wrapper">

        <?php
        include('partials/header.php');
        ?>

        <div id="page-content" class="profilePage EditUpdateProfile">
            <div class="dashboard-wrap">

                <!-- ═══ VIEW 1: MY PROFILE ═══ -->
                <div id="view-profile" class="prof-section">
                    <h2 class="prof-heading">My Profile</h2>

                    <!-- ✅ Two column layout: left = info, right = images -->
                    <div class="prof-two-col">

                        <!-- LEFT: avatar + info + buttons -->
                        <div class="prof-left-col">
                            <div class="prof-avatar-wrap">
                                <img src="https://i.pravatar.cc/200?img=47" alt="Profile" id="avatarImg" class="prof-avatar-img" />
                            </div>

                            <div class="prof-info-list">
                                <div class="prof-info-row">
                                    <span class="prof-info-label">First Name:</span>
                                    <span class="prof-info-val" id="v-firstname">Tom</span>
                                </div>
                                <div class="prof-info-row">
                                    <span class="prof-info-label">Last Name:</span>
                                    <span class="prof-info-val" id="v-lastname">Albert</span>
                                </div>
                                <div class="prof-info-row">
                                    <span class="prof-info-label">Email Address:</span>
                                    <span class="prof-info-val" id="v-email">tomalbert@gmail.com</span>
                                </div>
                                <div class="prof-info-row">
                                    <span class="prof-info-label">Company Name:</span>
                                    <span class="prof-info-val" id="v-company">Silhouette Modesty</span>
                                </div>
                                <div class="prof-info-row">
                                    <span class="prof-info-label">Phone Number:</span>
                                    <span class="prof-info-val">
                                        <img src="https://flagcdn.com/w20/gb.png" srcset="https://flagcdn.com/w40/gb.png 2x" alt="UK" class="prof-flag" />
                                        <span id="v-phone">+44 456 39940</span>
                                    </span>
                                </div>
                            </div>

                            <div class="prof-btn-row">
                                <button class="btn btn-primary" id="goEditBtn">Edit Profile</button>
                                <button class="btn btn-outline btn-dark" id="goChangePwdBtn">Change Password</button>
                            </div>
                        </div>

                        <!-- RIGHT: uploaded images (hidden until Update is clicked) -->
                        <div class="prof-right-col">
                            <div id="prof-images-section" class="prof-images-section" style="display:none">
                                <h4 class="prof-images-heading">Add Images</h4>
                                <div class="prof-images-grid" id="profImagesGrid"></div>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ═══ VIEW 2: EDIT PROFILE ═══ -->
                <div id="view-edit" class="prof-section" style="display:none">
                    <h2 class="prof-heading">
                        <button class="back-btn" id="editBackBtn"><i class="bi bi-arrow-left"></i></button>
                        Edit Profile
                    </h2>

                    <div class="addimg">
                        <!-- LEFT: avatar + form -->
                        <div class="edit-avatar-wrap">
                            <div class="edit-avatar-circle">
                                <img src="https://i.pravatar.cc/200?img=47" alt="Profile" id="editAvatarImg" class="edit-avatar-img" />
                                <button class="camera-btn" id="openImageModal" type="button">
                                    <i class="bi bi-camera-fill"></i>
                                </button>
                            </div>

                            <form action="">
                                <div class="edit-form f form-container">
                                    <div class="edit-field">
                                        <label>First Name<span class="req">*</span></label>
                                        <input type="text" id="e-firstname" class="form-control" placeholder="First Name" value="Tom" />
                                    </div>
                                    <div class="edit-field">
                                        <label>Last Name<span class="req">*</span></label>
                                        <input type="text" id="e-lastname" class="form-control" placeholder="Last Name" value="Albert" />
                                    </div>
                                    <div class="edit-field">
                                        <label>Email Address<span class="req">*</span></label>
                                        <input type="email" id="e-email" class="form-control" placeholder="Email Address" value="tomalbert@gmail.com" />
                                    </div>
                                    <div class="edit-field">
                                        <label>Company Name<span class="req">*</span></label>
                                        <input type="text" id="e-company" class="form-control" placeholder="Company Name" value="Silhouette Modesty" />
                                    </div>
                                    <div class="edit-field">
                                        <label>Phone Number<span class="req">*</span></label>
                                        <input type="tel" id="e-phone" class="form-control" placeholder="Phone number" />
                                    </div>
                                    <div id="editFormError" class="form-err" style="display:none"></div>
                                    <div class="prof-btn-row">
                                        <button class="btn btn-primary" id="saveEditBtn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- RIGHT: image drop zone -->
                        <div class="uploadimg">
                            <div class="edit-field mb-0">
                                <label>Add Images<span class="req">*</span></label>
                                <div class="pm-dropzone" id="uploadDropzone">
                                    <div class="pm-drop-inner">
                                        <div class="pm-drop-icon">
                                            <img src="<?php echo $page_url; ?>/assets/icons/upload.svg" alt="Upload Icon">
                                        </div>
                                        <label class="upload-label mt-1" for="uploadFileInput">
                                            <i class="bi bi-upload" style="color: #C6238B; font-size: 1.2rem;"></i> Drop Your Files Here. Or <span>Browse</span>
                                        </label>
                                        <input type="file" id="uploadFileInput" multiple accept="image/*" style="display:none" />
                                    </div>
                                </div>
                                <!-- Preview thumbnails -->
                                <div class="pm-thumb-row" id="uploadThumbRow"></div>
                            </div>
                        </div>
                    </div>
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
                        <div class="img-preview-wrap">
                            <div class="img-preview-circle">
                                <img id="imgPreview" src="https://i.pravatar.cc/200?img=47" alt="Preview" />
                            </div>
                        </div>
                        <label class="upload-label" for="avatarFileInput">
                            <i class="bi bi-arrow-up-circle-fill"></i> Upload Image
                        </label>
                        <input type="file" id="avatarFileInput" accept="image/*" style="display:none" />
                        <div class="zoom-wrap">
                            <input type="range" id="zoomSlider" min="1" max="2" step="0.01" value="1" class="zoom-slider" />
                        </div>
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

            let itiPhone;
            let _uploadedImgSrcs = [];

            function normalizePhoneNumber(phone) {
                if (!phone) return '';
                return phone.replace(/[^\d+]/g, '');
            }

            function showView(id) {
                $('#view-profile, #view-edit, #view-change-pwd').hide();
                $(id).show();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            /* ── Navigation ── */
            $('#goEditBtn').on('click', function() {
                $('#e-firstname').val($('#v-firstname').text());
                $('#e-lastname').val($('#v-lastname').text());
                $('#e-email').val($('#v-email').text());
                $('#e-company').val($('#v-company').text());
                if (itiPhone) {
                    itiPhone.setNumber(normalizePhoneNumber($('#v-phone').text().trim()));
                }
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
                let fn = $.trim($('#e-firstname').val());
                let ln = $.trim($('#e-lastname').val());
                let em = $.trim($('#e-email').val());
                let co = $.trim($('#e-company').val());

                let fullPhoneNumber = '';
                let countryCode = 'gb';
                let isValid = false;

                if (itiPhone) {
                    isValid = itiPhone.isValidNumber();
                    if (isValid) {
                        fullPhoneNumber = itiPhone.getNumber();
                        countryCode = itiPhone.getSelectedCountryData().iso2;
                    } else {
                        let rawPhone = $.trim($('#e-phone').val());
                        if (rawPhone) { fullPhoneNumber = rawPhone; }
                    }
                } else {
                    fullPhoneNumber = $.trim($('#e-phone').val());
                }

                $('#editFormError').hide();

                if (!fn || !ln || !em || !co || !fullPhoneNumber) {
                    $('#editFormError').text('Please fill in all required fields.').show();
                    return;
                }
                if (!isValid && itiPhone && !itiPhone.isValidNumber()) {
                    $('#editFormError').text('Please enter a valid phone number.').show();
                    return;
                }

                $('#v-firstname').text(fn);
                $('#v-lastname').text(ln);
                $('#v-email').text(em);
                $('#v-company').text(co);
                $('#v-phone').text(fullPhoneNumber);

                const flagImg = $('#v-phone').closest('.prof-info-row').find('.prof-flag');
                if (flagImg.length) {
                    flagImg.attr('src', `https://flagcdn.com/w20/${countryCode}.png`);
                    flagImg.attr('srcset', `https://flagcdn.com/w40/${countryCode}.png 2x`);
                }

                $('#avatarImg').attr('src', $('#editAvatarImg').attr('src'));

                // ✅ Images RIGHT side pe show karo
                if (_uploadedImgSrcs.length > 0) {
                    let grid = $('#profImagesGrid');
                    grid.empty();
                    _uploadedImgSrcs.forEach(function(imgSrc) {
                        grid.append($('<img>').attr('src', imgSrc));
                    });
                    $('#prof-images-section').show();
                }

                showView('#view-profile');
                $('#successModal').modal('show');
            });

            /* ── Save Change Password ── */
            $('#savePwdBtn').on('click', function() {
                let cur = $.trim($('#cp-current').val());
                let nw  = $.trim($('#cp-new').val());
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

                $('#cp-current, #cp-new, #cp-confirm').val('');
                $('.eye-btn i').removeClass('bi-eye').addClass('bi-eye-slash');
                $('.pwd-wrap input').attr('type', 'password');
                showView('#view-profile');
                $('#successModal').modal('show');
            });

            /* ── Password eye toggle ── */
            $(document).on('click', '.eye-btn', function() {
                let id   = $(this).data('target');
                let $inp = $('#' + id);
                let isPass = $inp.attr('type') === 'password';
                $inp.attr('type', isPass ? 'text' : 'password');
                $(this).find('i').toggleClass('bi-eye-slash bi-eye');
            });

            /* ── Profile Image Upload Modal ── */
            let _selectedFile = null;

            $('#openImageModal').on('click', function() {
                $('#imgModalOverlay').fadeIn(200);
            });

            $('#imgModalOverlay').on('click', function(e) {
                if ($(e.target).is('#imgModalOverlay')) {
                    $('#imgModalOverlay').fadeOut(200);
                }
            });

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

            $('#zoomSlider').on('input', function() {
                let val = $(this).val();
                $('#imgPreview').css('transform', 'scale(' + val + ')');
                let pct = ((val - 1) / 1) * 100;
                $(this).css('background', 'linear-gradient(90deg, #e91e8c ' + pct + '%, #d0d3de ' + pct + '%)');
            });

            $('#applyImageBtn').on('click', function() {
                let src = $('#imgPreview').attr('src');
                $('#editAvatarImg').attr('src', src);
                $('#imgModalOverlay').fadeOut(200);
                _selectedFile = null;
                $('#avatarFileInput').val('');
                $('#zoomSlider').val(1).trigger('input');
            });

            $('#successDoneBtn').on('click', function() {
                $('#successModal').modal('hide');
            });

            /* ── ✅ Dropzone: sirf JS se handle, label tag se conflict nahi ── */
            $('#uploadDropzone').on('click', function(e) {
                // Agar label ya input pe directly click ho toh double trigger nahi hoga
                if ($(e.target).is('input[type="file"]')) return;
                e.preventDefault();
                $('#uploadFileInput').trigger('click');
            });

            $('#uploadDropzone').on('dragover', function(e) {
                e.preventDefault();
                $(this).addClass('drag-over');
            });

            $('#uploadDropzone').on('dragleave drop', function(e) {
                e.preventDefault();
                $(this).removeClass('drag-over');
                if (e.type === 'drop') {
                    handleUploadedFiles(e.originalEvent.dataTransfer.files);
                }
            });

            /* ── ✅ File change event — reset value taake same file dobara pick ho sake ── */
            $('#uploadFileInput').on('change', function() {
                if (this.files && this.files.length > 0) {
                    handleUploadedFiles(this.files);
                }
                $(this).val(''); // reset so same file can be re-selected
            });

            function handleUploadedFiles(files) {
                if (!files || !files.length) return;
                Array.from(files).forEach(function(file) {
                    if (!file.type.startsWith('image/')) return;
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let imgSrc = e.target.result;
                        _uploadedImgSrcs.push(imgSrc);

                        let thumb     = $('<img>').attr('src', imgSrc).addClass('pm-thumb-img');
                        let removeBtn = $('<button type="button" class="pm-thumb-remove">×</button>');
                        let wrap      = $('<div class="pm-thumb-item"></div>').append(thumb).append(removeBtn);

                        removeBtn.on('click', function() {
                            _uploadedImgSrcs = _uploadedImgSrcs.filter(function(s) { return s !== imgSrc; });
                            wrap.remove();
                        });

                        $('#uploadThumbRow').append(wrap);
                    };
                    reader.readAsDataURL(file);
                });
            }

            /* ── intl-tel-input ── */
            function initIntlTelInput() {
                const phoneInputElem = document.querySelector("#e-phone");
                if (phoneInputElem && typeof window.intlTelInput === 'function') {
                    if (itiPhone) { itiPhone.destroy(); }
                    itiPhone = window.intlTelInput(phoneInputElem, {
                        initialCountry: "gb",
                        separateDialCode: true,
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
                    });
                }
            }

            initIntlTelInput();

        });
    </script>
</body>

</html>
<?php
$page_title = "Manage Bank Details | Nobility ";
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

        <div id="page-content" class="dashboardPage manageBankPage">
            <div class="dashboard-wrap">

                <div id="bank-add" class="prof-section">

                    <h2 class="prof-heading mb-4">Manage Bank account details</h2>

                    <div class="bank-form-wrap form-container">
                        <form id="bankAddForm">

                            <div class="mb-3">
                                <label class="form-label">Account Holder Name<span class="req">*</span></label>
                                <input type="text" class="form-control" id="add-holder" placeholder="Enter Account Holder Name" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Account Number<span class="req">*</span></label>
                                <input type="text" class="form-control" id="add-number" placeholder="Enter Account Number" />
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Confirm Account Number<span class="req">*</span></label>
                                <input type="text" class="form-control" id="add-confirm" placeholder="Confirm Account Number" />
                            </div>

                            <div id="addFormErr" class="form-err mb-3" style="display:none"></div>

                            <button type="button" class="btn btn-primary" id="saveDetailsBtn">Save Details</button>

                        </form>
                    </div>

                </div>


                <!-- ═══ VIEW 2: VIEW BANK DETAILS ═══ -->
                <div id="bank-view" class="prof-section" style="display:none">

                    <h2 class="prof-heading mb-4">View Bank Details</h2>

                    <div class="bank-form-wrap">
                        <h6 class="bank-sub-heading">Bank Details</h6>

                        <div class="pm-view-row">
                            <span class="pm-view-label bank-view-label">Account Holder Name:</span>
                            <span class="pm-view-val" id="view-holder">Elbert James</span>
                        </div>
                        <div class="pm-view-row">
                            <span class="pm-view-label bank-view-label">Account Number:</span>
                            <span class="pm-view-val" id="view-number">1234567 234567 123</span>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-primary" id="goEditBtn">Edit Details</button>
                        </div>
                    </div>

                </div>


                <!-- ═══ VIEW 3: EDIT BANK DETAILS ═══ -->
                <div id="bank-edit" class="prof-section" style="display:none">

                    <h2 class="prof-heading mb-4">View Bank Details</h2>

                    <div class="bank-form-wrap form-container">
                        <h6 class="bank-sub-heading">Bank Details</h6>

                        <form id="bankEditForm">

                            <div class="mb-3">
                                <label class="form-label">Account Holder Name<span class="req">*</span></label>
                                <input type="text" class="form-control" id="edit-holder" placeholder="Enter Account Holder Name" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Account Number<span class="req">*</span></label>
                                <input type="text" class="form-control" id="edit-number" placeholder="Enter Account Number" />
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Confirm Account Number<span class="req">*</span></label>
                                <input type="text" class="form-control" id="edit-confirm" placeholder="Confirm Account Number" />
                            </div>

                            <div id="editFormErr" class="form-err mb-3" style="display:none"></div>

                            <button type="button" class="btn btn-primary" id="updateDetailsBtn">Update</button>

                        </form>
                    </div>

                </div>



            </div>
        </div>

    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="img-modal-overlay" id="bankSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="bankSuccessClose"><i class="bi bi-x"></i></button>
            <div class="success-tick-icon mb-2"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0">Successful!</h5>
            <p class="pm-confirm-desc" id="bankSuccessDesc">Bank Details has been saved successfully!</p>
            <button class="btn btn-primary w-100" id="bankSuccessDone">Done</button>
        </div>
    </div>

    <script>
        $(function() {

            /* ── saved bank data (in real app comes from server) ── */
            var bankData = {
                holder: '',
                number: ''
            };
            var hasSaved = false; /* flip to true after first save */

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#bank-add, #bank-view, #bank-edit').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            /* On page load: if bank data exists go to view, else show add form */
            if (hasSaved) {
                showView('#bank-view');
            } else {
                showView('#bank-add');
            }

            /* ════ SUCCESS MODAL ════ */
            function showSuccess(msg, afterFn) {
                $('#bankSuccessDesc').text(msg);
                $('#bankSuccessOverlay').fadeIn(200);
                $('#bankSuccessDone, #bankSuccessClose').off('click').on('click', function() {
                    $('#bankSuccessOverlay').fadeOut(200);
                    if (typeof afterFn === 'function') afterFn();
                });
            }

            $('#bankSuccessOverlay').on('click', function(e) {
                if ($(e.target).is('#bankSuccessOverlay')) $(this).fadeOut(200);
            });

            /* ════ SAVE DETAILS (Add Form) ════ */
            $('#saveDetailsBtn').on('click', function() {
                var holder = $.trim($('#add-holder').val());
                var number = $.trim($('#add-number').val());
                var confirm = $.trim($('#add-confirm').val());

                $('#addFormErr').hide();

                if (!holder || !number || !confirm) {
                    $('#addFormErr').text('Please fill in all required fields.').show();
                    return;
                }
                if (number !== confirm) {
                    $('#addFormErr').text('Account numbers do not match.').show();
                    return;
                }

                /* Save data */
                bankData.holder = holder;
                bankData.number = formatAccNumber(number);
                hasSaved = true;

                showSuccess('Bank Details has been saved successfully!', function() {
                    populateView();
                    showView('#bank-view');
                    /* reset add form */
                    $('#add-holder, #add-number, #add-confirm').val('');
                });
            });

            /* ════ GO TO EDIT ════ */
            $('#goEditBtn').on('click', function() {
                $('#edit-holder').val(bankData.holder);
                $('#edit-number').val(bankData.number.replace(/\s/g, ''));
                $('#edit-confirm').val('');
                $('#editFormErr').hide();
                showView('#bank-edit');
            });

            /* ════ UPDATE DETAILS (Edit Form) ════ */
            $('#updateDetailsBtn').on('click', function() {
                var holder = $.trim($('#edit-holder').val());
                var number = $.trim($('#edit-number').val());
                var confirm = $.trim($('#edit-confirm').val());

                $('#editFormErr').hide();

                if (!holder || !number || !confirm) {
                    $('#editFormErr').text('Please fill in all required fields.').show();
                    return;
                }
                if (number !== confirm) {
                    $('#editFormErr').text('Account numbers do not match.').show();
                    return;
                }

                bankData.holder = holder;
                bankData.number = formatAccNumber(number);

                showSuccess('Bank Details has been updated successfully!', function() {
                    populateView();
                    showView('#bank-view');
                });
            });

            /* ════ HELPERS ════ */
            function populateView() {
                $('#view-holder').text(bankData.holder);
                $('#view-number').text(bankData.number);
            }

            /* Format: 1234567891234 → 1234567 891234 5 (chunks of 7) */
            function formatAccNumber(num) {
                var clean = num.replace(/\D/g, '');
                return clean.match(/.{1,7}/g).join(' ');
            }

        });
    </script>

</body>

</html>
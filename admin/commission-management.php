<?php
$page_title = "Commission Management | Nobility Admin ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

include('partials/head.php');
?>

<body>

    <?php include('partials/sidebar.php'); ?>

    <div id="main-wrapper">

        <?php include('partials/header.php'); ?>

        <div id="page-content" class="dashboardPage AdminCommissionManagement">

            <div class="dashboard-wrap">

                <div id="vm-list" class="prof-section">

                    <h2 class="prof-heading mb-5">Commission Management</h2>
                    <!-- Commission Input Section -->
                    <div class="commission-container mb-5">
                        <div class="d-flex align-items-center justify-content-between">
                            <label class="form-label" style="font-weight:500; margin-bottom:8px;">Commission Percentage<span class="req">*</span></label>
                            <div class="input-group">
                                <input type="text" id="commissionInput" class="form-control" value="05">
                                <span class="input-group-text">%</span>
                            </div>
                            <button id="updateCommissionBtn" class="btn btn-primary"
                                style="background: linear-gradient(90deg, #00c6ff, #a855f7); border:none; padding:12px 32px; font-weight:500;">
                                Products
                            </button>
                        </div>
                    </div>

                    <!-- Commission Logs -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h2 class="prof-heading mb-0">Commission Logs</h2>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="vmPerPage" class="pm-select">
                                <option>5</option>
                                <option selected>8</option>
                                <option>10</option>
                                <option>25</option>
                            </select>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>

                    <div class="pm-table-wrap">
                        <table class="pm-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Commission Percentage</th>
                                    <th>Update Date</th>
                                </tr>
                            </thead>
                            <tbody id="vmTableBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="vmEntryInfo"></span>
                        <div class="pm-pagination" id="vmPagination"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Confirm Modal -->
    <div class="img-modal-overlay" id="vmConfirmOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="vmConfirmClose"><i class="bi bi-x"></i></button>
            <h5 class="pm-confirm-title" id="vmConfirmTitle">Updating Commission</h5>
            <p class="pm-confirm-desc" id="vmConfirmDesc">Are you sure about updating commission?</p>
            <div class="d-flex gap-2 w-100">
                <button class="btn btn-primary flex-fill" id="vmConfirmYes">Yes</button>
                <button class="btn btn-outline btn-dark flex-fill" id="vmConfirmNo">No</button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="img-modal-overlay" id="vmSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="vmSuccessClose"><i class="bi bi-x"></i></button>
            <div class="success-tick-icon mb-1"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title">Successful!</h5>
            <p class="pm-confirm-desc" id="vmSuccessDesc">YAAYY! Commission has been updated successfully!</p>
            <button class="btn btn-primary w-100" id="vmSuccessDone" style="background: linear-gradient(90deg, #00c6ff, #a855f7);">Done</button>
        </div>
    </div>

    <?php include('partials/scripts.php'); ?>

    <script>
        $(function() {

            /* Commission Logs Data */
            var commissionLogs = [{
                    sno: '01',
                    percentage: '10%',
                    date: '12/12/2025'
                },
                {
                    sno: '02',
                    percentage: '30%',
                    date: '12/12/2025'
                },
                {
                    sno: '03',
                    percentage: '50%',
                    date: '12/12/2025'
                },
                {
                    sno: '04',
                    percentage: '5%',
                    date: '12/12/2025'
                },
                {
                    sno: '05',
                    percentage: '40%',
                    date: '12/12/2025'
                },
                {
                    sno: '06',
                    percentage: '25%',
                    date: '12/12/2025'
                },
                {
                    sno: '07',
                    percentage: '20%',
                    date: '12/12/2025'
                },
                {
                    sno: '08',
                    percentage: '15%',
                    date: '12/12/2025'
                },
            ];

            var vmPage = 1;
            var vmPer = 8;

            /* Render Table */
            function renderTable() {
                var start = (vmPage - 1) * vmPer;
                var rows = commissionLogs.slice(start, start + vmPer);
                var html = '';

                rows.forEach(function(item) {
                    html += `<tr>
                        <td>${item.sno}</td>
                        <td><strong>${item.percentage}</strong></td>
                        <td>${item.date}</td>
                    </tr>`;
                });

                $('#vmTableBody').html(html);

                // Showing text
                var total = commissionLogs.length;
                $('#vmEntryInfo').text(`Showing 1 to ${Math.min(start + vmPer, total)} of ${total} entries`);
            }

            /* Pagination */
            function renderPagination() {
                var totalPages = Math.ceil(commissionLogs.length / vmPer);
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';

                for (var i = 1; i <= Math.min(totalPages, 5); i++) {
                    html += `<button class="pm-page-btn ${i === vmPage ? 'active' : ''}" data-page="${i}">${i}</button>`;
                }
                if (totalPages > 5) html += '<span class="pm-page-sep">|</span>';
                html += '<button class="pm-page-btn" data-action="next">Next</button>';

                $('#vmPagination').html(html);

                $('#vmPagination .pm-page-btn').on('click', function() {
                    if ($(this).data('action') === 'prev' && vmPage > 1) {
                        vmPage--;
                    } else if ($(this).data('action') === 'next' && vmPage < totalPages) {
                        vmPage++;
                    } else if ($(this).data('page')) {
                        vmPage = parseInt($(this).data('page'));
                    }
                    renderTable();
                    renderPagination();
                });
            }

            /* Products Button Click */
            $('#updateCommissionBtn').on('click', function() {
                var val = $('#commissionInput').val().trim();
                if (!val) {
                    alert("Please enter commission percentage");
                    return;
                }

                showConfirm('Updating Commission', 'Are you sure about updating commission?', function() {
                    showSuccess('YAAYY! Commission has been updated successfully!');
                    // You can refresh table here if needed
                });
            });

            function showConfirm(title, desc, onYes) {
                $('#vmConfirmTitle').text(title);
                $('#vmConfirmDesc').text(desc);
                window.confirmCallback = onYes;
                $('#vmConfirmOverlay').fadeIn(200);
            }

            function showSuccess(msg) {
                $('#vmSuccessDesc').text(msg);
                $('#vmSuccessOverlay').fadeIn(200);
            }

            /* Modal Events */
            $('#vmConfirmYes').on('click', function() {
                $('#vmConfirmOverlay').fadeOut(200);
                if (typeof window.confirmCallback === 'function') window.confirmCallback();
            });

            $('#vmConfirmNo, #vmConfirmClose').on('click', function() {
                $('#vmConfirmOverlay').fadeOut(200);
            });

            $('#vmSuccessDone, #vmSuccessClose').on('click', function() {
                $('#vmSuccessOverlay').fadeOut(200);
            });

            /* Init */
            $('#vmPerPage').on('change', function() {
                vmPer = parseInt($(this).val());
                vmPage = 1;
                renderTable();
                renderPagination();
            });

            renderTable();
            renderPagination();
        });
    </script>

</body>

</html>
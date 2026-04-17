<?php
$page_title = "Payment Tracking | Nobility ";
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

        <div id="page-content" class="dashboardPage paymentTrackingPage">
            <div class="dashboard-wrap">

                <div id="pt-list" class="prof-section">

                    <!-- Header -->
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Payment Tracking</h2>
                        <button class="btn btn-primary" id="goLogsBtn">Payment Logs</button>
                    </div>

                    <!-- Stat cards — reuse dashboard .stats-row + .stat-card -->
                    <div class="stats-row pt-stats-row mb-4">

                        <div class="stat-card">
                            <div class="stat-top"><span class="stat-label">Total Earnings</span></div>
                            <div class="stat-value">£1,243</div>
                            <div class="stat-wave">
                                <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="ptWg1" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                            <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 40 C60 10 120 60 180 30 C230 8 270 45 300 25 L300 80 L0 80 Z" fill="url(#ptWg1)" />
                                    <path d="M0 40 C60 10 120 60 180 30 C230 8 270 45 300 25" fill="none" stroke="#e91e8c" stroke-width="0" opacity="0.6" />
                                </svg>
                            </div>
                           <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/total-earning.svg" alt="stat icon">
                        </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-top"><span class="stat-label">Pending Payments</span></div>
                            <div class="stat-value">£2,450</div>
                            <div class="stat-wave">
                                <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="ptWg2" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                            <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 30 C50 55 100 10 160 40 C210 62 260 20 300 35 L300 80 L0 80 Z" fill="url(#ptWg2)" />
                                    <path d="M0 30 C50 55 100 10 160 40 C210 62 260 20 300 35" fill="none" stroke="#e91e8c" stroke-width="0" opacity="0.6" />
                                </svg>
                            </div>
                            <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/pending-payment.svg" alt="stat icon">
                        </div>
                        </div>

                    </div>

                    <!-- Table controls -->
                    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="pm-show-label">Showing:</span>
                            <div class="pm-select-wrap">
                                <select id="ptPerPage" class="pm-select">
                                    <option>5</option>
                                    <option selected>8</option>
                                    <option>10</option>
                                    <option>25</option>
                                </select>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="pm-show-label">Filter by date or status:</span>
                            <div class="pm-select-wrap">
                                <select id="ptStatusFilter" class="pm-select" style="min-width:120px">
                                    <option value="">All Status</option>
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                </select>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="pm-table-wrap">
                        <table class="pm-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="ptTableBody"></tbody>
                        </table>
                    </div>

                    <!-- Footer -->
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="ptEntryInfo"></span>
                        <div class="pm-pagination" id="ptPagination"></div>
                    </div>

                </div>


                <!-- ═══ VIEW 2: PAYMENT LOGS ═══ -->
                <div id="pt-logs" class="prof-section" style="display:none">

                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">
                            <button class="back-btn" id="logsBackBtn"><i class="bi bi-arrow-left"></i></button>
                            Payment Logs
                        </h2>
                        <button class="pm-filter-btn" title="Filter"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="logsPerPage" class="pm-select">
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
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Admin Commission</th>
                                </tr>
                            </thead>
                            <tbody id="logsTableBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="logsEntryInfo"></span>
                        <div class="pm-pagination" id="logsPagination"></div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <script>
        $(function() {

            /* ════ DATA ════ */
            var payments = [{
                    id: 1,
                    sno: '01',
                    orderId: '#123456',
                    userName: 'tom albert',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'paid',
                    commission: '05%'
                },
                {
                    id: 2,
                    sno: '02',
                    orderId: '#123456',
                    userName: 'lucie mike',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'pending',
                    commission: '05%'
                },
                {
                    id: 3,
                    sno: '03',
                    orderId: '#123456',
                    userName: 'charlie andrew',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'paid',
                    commission: '05%'
                },
                {
                    id: 4,
                    sno: '04',
                    orderId: '#123456',
                    userName: 'adriana james',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'pending',
                    commission: '05%'
                },
                {
                    id: 5,
                    sno: '05',
                    orderId: '#123456',
                    userName: 'allice monk',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'paid',
                    commission: '05%'
                },
                {
                    id: 6,
                    sno: '06',
                    orderId: '#123456',
                    userName: 'cindy jane',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'pending',
                    commission: '05%'
                },
                {
                    id: 7,
                    sno: '07',
                    orderId: '#123456',
                    userName: 'belle jimmy',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'paid',
                    commission: '05%'
                },
                {
                    id: 8,
                    sno: '08',
                    orderId: '#123456',
                    userName: 'david smith',
                    date: '12/12/2025',
                    amount: '£30.99',
                    status: 'pending',
                    commission: '05%'
                },
            ];

            var ptPage = 1,
                ptPer = 8,
                ptFilter = '';
            var logsPage = 1,
                logsPer = 8;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#pt-list,#pt-logs').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            $('#goLogsBtn').on('click', function() {
                showView('#pt-logs');
                renderLogs();
            });
            $('#logsBackBtn').on('click', function() {
                showView('#pt-list');
            });

            /* ════ PAYMENT TRACKING TABLE ════ */
            function filteredPayments() {
                if (!ptFilter) return payments;
                return payments.filter(function(p) {
                    return p.status === ptFilter;
                });
            }

            function renderPtTable() {
                var data = filteredPayments();
                var start = (ptPage - 1) * ptPer;
                var rows = data.slice(start, start + ptPer);
                var html = '';

                rows.forEach(function(p) {
                    var statusHtml = p.status === 'paid' ?
                        '<span class="pt-paid">Paid</span>' :
                        '<span class="pt-pending">Pending</span>';
                    html += '<tr>' +
                        '<td>' + p.sno + '</td>' +
                        '<td>' + p.orderId + '</td>' +
                        '<td>' + p.userName + '</td>' +
                        '<td>' + p.date + '</td>' +
                        '<td>' + p.amount + '</td>' +
                        '<td>' + statusHtml + '</td>' +
                        '</tr>';
                });

                $('#ptTableBody').html(html);
                $('#ptEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + ptPer, data.length) + ' of ' + data.length + ' entries');
                renderPagination('#ptPagination', ptPage, Math.ceil(data.length / ptPer), function(p) {
                    ptPage = p;
                    renderPtTable();
                });
            }

            $('#ptPerPage').on('change', function() {
                ptPer = parseInt($(this).val());
                ptPage = 1;
                renderPtTable();
            });
            $('#ptStatusFilter').on('change', function() {
                ptFilter = $(this).val();
                ptPage = 1;
                renderPtTable();
            });

            /* ════ PAYMENT LOGS TABLE ════ */
            function renderLogs() {
                var start = (logsPage - 1) * logsPer;
                var rows = payments.slice(start, start + logsPer);
                var html = '';

                rows.forEach(function(p) {
                    html += '<tr>' +
                        '<td>' + p.sno + '</td>' +
                        '<td>' + p.orderId + '</td>' +
                        '<td>' + p.userName + '</td>' +
                        '<td>' + p.date + '</td>' +
                        '<td>' + p.amount + '</td>' +
                        '<td class="pt-commission">' + p.commission + '</td>' +
                        '</tr>';
                });

                $('#logsTableBody').html(html);
                $('#logsEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + logsPer, payments.length) + ' of ' + payments.length + ' entries');
                renderPagination('#logsPagination', logsPage, Math.ceil(payments.length / logsPer), function(p) {
                    logsPage = p;
                    renderLogs();
                });
            }

            $('#logsPerPage').on('change', function() {
                logsPer = parseInt($(this).val());
                logsPage = 1;
                renderLogs();
            });

            /* ════ SHARED PAGINATION ════ */
            function renderPagination(selector, current, total, onPage) {
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) {
                    html += '<button class="pm-page-btn' + (i === current ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
                }
                if (total > 5) html += '<span class="pm-page-sep">|</span>';
                html += '<button class="pm-page-btn" data-action="next">Next</button>';

                var $pg = $(selector);
                $pg.html(html);

                $pg.find('[data-page]').on('click', function() {
                    onPage(parseInt($(this).data('page')));
                });
                $pg.find('[data-action="prev"]').on('click', function() {
                    if (current > 1) onPage(current - 1);
                });
                $pg.find('[data-action="next"]').on('click', function() {
                    if (current < total) onPage(current + 1);
                });
            }

            /* ════ INIT ════ */
            renderPtTable();

        });
    </script>

</body>

</html>
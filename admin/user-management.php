<?php
$page_title = "User Management | Nobility Admin ";
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

        <div id="page-content" class="dashboardPage AdminUserManagement">

            <div class="dashboard-wrap">

                <div id="um-list" class="prof-section">

                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">User Management</h2>
                        <button class="pm-filter-btn" title="Filter"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="umPerPage" class="pm-select">
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                    <th>Registration Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="umTableBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="umEntryInfo"></span>
                        <div class="pm-pagination" id="umPagination"></div>
                    </div>

                </div>


                <!-- ═══ VIEW 2: USER DETAILS ═══ -->
                <div id="um-detail" class="prof-section" style="display:none">

                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="umDetailBack"><i class="bi bi-arrow-left"></i></button>
                        User Details
                    </h2>

                    <!-- Info card -->
                    <div class="om-card mb-4" style="position:relative">

                        <!-- Status top-right -->
                        <div style="position:absolute;top:20px;right:22px;display:flex;align-items:center;gap:8px">
                            <span class="pm-show-label">Status</span>
                            <span class="um-status-toggle" id="umStatusBadge"></span>
                        </div>

                        <div class="pm-view-info-list" style="max-width:520px">
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">First Name</span><span class="pm-view-val" id="ud-fname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Last Name</span><span class="pm-view-val" id="ud-lname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Email Address</span><span class="pm-view-val" id="ud-email"></span></div>
                            <div class="pm-view-row" style="border-bottom:none"><span class="pm-view-label" style="min-width:160px">Phone Number</span><span class="pm-view-val" id="ud-phone"></span></div>
                        </div>
                    </div>

                    <!-- Order Logs -->
                    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                        <h3 class="prof-heading mb-0">Order Logs</h3>
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
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SKU</th>
                                    <th>Total Amount</th>
                                    <th>Available Stock</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="umLogsBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="umLogsInfo"></span>
                        <div class="pm-pagination" id="umLogsPagination"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ═══ CONFIRM MODAL (reuse existing) ═══ -->
    <div class="img-modal-overlay" id="umConfirmOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="umConfirmClose"><i class="bi bi-x"></i></button>
            <div class="pm-confirm-icon" id="umConfirmIcon"></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="umConfirmTitle"></h5>
            <p class="pm-confirm-desc" id="umConfirmDesc"></p>
            <div class="d-flex gap-2 w-100">
                <button class="btn btn-primary flex-fill" id="umConfirmYes">Yes</button>
                <button class="btn btn-outline btn-dark flex-fill" id="umConfirmNo">No</button>
            </div>
        </div>
    </div>

    <!-- ═══ SUCCESS MODAL (reuse existing) ═══ -->
    <div class="img-modal-overlay" id="umSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <div class="success-tick-icon mb-1"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0">Successful</h5>
            <p class="pm-confirm-desc" id="umSuccessDesc"></p>
            <button class="btn btn-primary w-100" id="umSuccessDone">Okay</button>
        </div>
    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <script>
        $(function() {

            var users = [{
                    id: 1,
                    sno: '01',
                    fname: 'Tom',
                    lname: 'Albert',
                    email: 'tomalbert@gmail.com',
                    date: '12/12/2025',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 2,
                    sno: '02',
                    fname: 'Lucie',
                    lname: 'mike',
                    email: 'luciemike@gmail.com',
                    date: '12/12/2025',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 3,
                    sno: '03',
                    fname: 'Charlie',
                    lname: 'Andrew',
                    email: 'charlieandrew@gmail.com',
                    date: '12/12/2025',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 4,
                    sno: '04',
                    fname: 'Adriana',
                    lname: 'James',
                    email: 'adrianajames@gmail.com',
                    date: '12/12/2025',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 5,
                    sno: '05',
                    fname: 'Allice',
                    lname: 'Monk',
                    email: 'allicemonk@gmail.com',
                    date: '12/12/2025',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 6,
                    sno: '06',
                    fname: 'Cindy',
                    lname: 'Jane',
                    email: 'cindyjane@gmail.com',
                    date: '12/12/2025',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 7,
                    sno: '07',
                    fname: 'Belle',
                    lname: 'jimmy',
                    email: 'bellejimmy@gmail.com',
                    date: '12/12/2025',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 8,
                    sno: '08',
                    fname: 'David',
                    lname: 'Smith',
                    email: 'davidsmith@gmail.com',
                    date: '12/12/2025',
                    status: 'active',
                    phone: '123 456 7890'
                },
            ];

            var orderLogs = [{
                    name: '2 PCS New Casual...',
                    category: 'Classic New Casual',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '56',
                    status: 'in-stock'
                },
                {
                    name: 'Stylish Hublot...',
                    category: 'Modern Stylish Hublot',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock'
                },
                {
                    name: "Women's Summer...",
                    category: "Open-Front Women's",
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '15',
                    status: 'in-stock'
                },
                {
                    name: 'Round Metal...',
                    category: 'Travel-Friendly Metal',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock'
                },
                {
                    name: 'AirPods Pro...',
                    category: 'AirPods Pro',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '45',
                    status: 'in-stock'
                },
                {
                    name: 'Slippers For Men...',
                    category: 'Occasion/Party Slippers',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock'
                },
                {
                    name: 'Mini Portable...',
                    category: 'Mini Portable Fans',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '08',
                    status: 'in-stock'
                },
            ];

            var currentPage = 1,
                perPage = 8;
            var logsPage = 1,
                logsPer = 8;
            var activeUserId = null;
            var confirmAction = null;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#um-list,#um-detail').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            $('#umDetailBack').on('click', function() {
                showView('#um-list');
            });

            /* ════ RENDER LIST TABLE ════ */
            function renderTable() {
                var start = (currentPage - 1) * perPage;
                var rows = users.slice(start, start + perPage);
                var html = '';

                rows.forEach(function(u) {
                    var isActive = u.status === 'active';
                    var badgeHtml = '<span class="um-badge ' + (isActive ? 'active' : 'inactive') + ' um-toggle-badge" data-id="' + u.id + '">' +
                        '<span class="um-dot"></span>' + (isActive ? 'Active' : 'In Active') +
                        '</span>';

                    html += '<tr>' +
                        '<td>' + u.sno + '</td>' +
                        '<td>' + u.fname + '</td>' +
                        '<td>' + u.lname + '</td>' +
                        '<td>' + u.email + '</td>' +
                        '<td>' + u.date + '</td>' +
                        '<td>' + badgeHtml + '</td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button class="pm-view-btn um-view-btn" data-id="' + u.id + '"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });

                $('#umTableBody').html(html);
                $('#umEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + perPage, users.length) + ' of ' + users.length + ' entries');
                renderPagination('#umPagination', currentPage, Math.ceil(users.length / perPage), function(p) {
                    currentPage = p;
                    renderTable();
                });
            }

            $('#umPerPage').on('change', function() {
                perPage = parseInt($(this).val());
                currentPage = 1;
                renderTable();
            });

            /* ════ TOGGLE STATUS FROM LIST ════ */
            $(document).on('click', '.um-toggle-badge', function(e) {
                e.stopPropagation();
                var id = parseInt($(this).data('id'));
                var u = users.find(function(x) {
                    return x.id === id;
                });
                if (!u) return;
                var toActive = (u.status === 'inactive');
                showConfirm(
                    toActive ? 'active' : 'inactive',
                    toActive ? 'Active User' : 'Inactive User',
                    toActive ? 'Are you sure you want to active User?' : 'Are you sure you want to inactive User?',
                    function() {
                        u.status = toActive ? 'active' : 'inactive';
                        renderTable();
                        showSuccess('User has been ' + (toActive ? 'activated' : 'deactivated') + ' successfully!');
                    }
                );
            });

            /* ════ VIEW USER DETAIL ════ */
            $(document).on('click', '.um-view-btn', function() {
                var id = parseInt($(this).data('id'));
                var u = users.find(function(x) {
                    return x.id === id;
                });
                if (!u) return;
                activeUserId = id;
                renderDetail(u);
                showView('#um-detail');
            });

            function renderDetail(u) {
                $('#ud-fname').text(u.fname);
                $('#ud-lname').text(u.lname);
                $('#ud-email').text(u.email);
                $('#ud-phone').text(u.phone);
                updateStatusBadge(u);
                renderLogs();
            }

            function updateStatusBadge(u) {
                var isActive = u.status === 'active';
                $('#umStatusBadge')
                    .removeClass('active inactive')
                    .addClass(isActive ? 'active' : 'inactive')
                    .html((isActive ? 'Active' : 'Inactive') + ' <i class="bi bi-chevron-down" style="font-size:.7rem"></i>');
            }

            /* Toggle status from detail page */
            $('#umStatusBadge').on('click', function() {
                var u = users.find(function(x) {
                    return x.id === activeUserId;
                });
                if (!u) return;
                var toActive = (u.status === 'inactive');
                showConfirm(
                    toActive ? 'active' : 'inactive',
                    toActive ? 'Active User' : 'Inactive User',
                    toActive ? 'Are you sure you want to active User?' : 'Are you sure you want to inactive User?',
                    function() {
                        u.status = toActive ? 'active' : 'inactive';
                        updateStatusBadge(u);
                        renderTable();
                        showSuccess('User has been ' + (toActive ? 'activated' : 'deactivated') + ' successfully!');
                    }
                );
            });

            /* ════ ORDER LOGS TABLE ════ */
            function renderLogs() {
                var start = (logsPage - 1) * logsPer;
                var rows = orderLogs.slice(start, start + logsPer);
                var html = '';

                rows.forEach(function(p) {
                    var isIn = p.status === 'in-stock';
                    var badge = '<span class="pm-status-badge ' + (isIn ? 'in-stock' : 'out-stock') + '">' +
                        '<span class="pm-dot"></span>' + (isIn ? 'In Stock' : 'Out Stock') +
                        '</span>';
                    html += '<tr>' +
                        '<td>' + p.name + '</td>' +
                        '<td>' + p.category + '</td>' +
                        '<td>' + p.sku + '</td>' +
                        '<td>' + p.amount + '</td>' +
                        '<td>' + p.stock + '</td>' +
                        '<td>' + badge + '</td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button onclick="window.location.href=\'order-management.php\'" class="pm-view-btn"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });

                $('#umLogsBody').html(html);
                $('#umLogsInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + logsPer, orderLogs.length) + ' of ' + orderLogs.length + ' entries');
                renderPagination('#umLogsPagination', logsPage, Math.ceil(orderLogs.length / logsPer), function(p) {
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
            function renderPagination(sel, cur, total, onPage) {
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) {
                    html += '<button class="pm-page-btn' + (i === cur ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
                }
                if (total > 5) html += '<span class="pm-page-sep">|</span>';
                html += '<button class="pm-page-btn" data-action="next">Next</button>';
                var $p = $(sel).html(html);
                $p.find('[data-page]').on('click', function() {
                    onPage(parseInt($(this).data('page')));
                });
                $p.find('[data-action="prev"]').on('click', function() {
                    if (cur > 1) onPage(cur - 1);
                });
                $p.find('[data-action="next"]').on('click', function() {
                    if (cur < total) onPage(cur + 1);
                });
            }

            /* ════ CONFIRM / SUCCESS MODALS ════ */
            function showConfirm(type, title, desc, onYes) {
                var iconHtml = type === 'active' ?
                    '<i class="bi bi-person-check-fill" style="color:#22c55e;font-size:2.6rem;display:block;margin-bottom:6px"></i>' :
                    '<i class="bi bi-person-x-fill"     style="color:#e91e8c;font-size:2.6rem;display:block;margin-bottom:6px"></i>';
                $('#umConfirmIcon').html(iconHtml);
                $('#umConfirmTitle').text(title);
                $('#umConfirmDesc').text(desc);
                confirmAction = onYes;
                $('#umConfirmOverlay').fadeIn(200);
            }

            function showSuccess(msg) {
                $('#umSuccessDesc').text(msg);
                $('#umSuccessOverlay').fadeIn(200);
            }

            $('#umConfirmClose,#umConfirmNo').on('click', function() {
                $('#umConfirmOverlay').fadeOut(200);
            });
            $('#umConfirmYes').on('click', function() {
                $('#umConfirmOverlay').fadeOut(200);
                if (typeof confirmAction === 'function') confirmAction();
            });
            $('#umSuccessDone').on('click', function() {
                $('#umSuccessOverlay').fadeOut(200);
            });
            $('#umConfirmOverlay,#umSuccessOverlay').on('click', function(e) {
                if ($(e.target).is(this)) $(this).fadeOut(200);
            });

            /* ── INIT ── */
            renderTable();
        });
    </script>

</body>

</html>
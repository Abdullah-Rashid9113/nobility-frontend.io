<?php
$page_title = "Vendor Management | Nobility Admin ";
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

        <div id="page-content" class="dashboardPage AdminVendorManagement">

            <div class="dashboard-wrap">

                <div id="vm-list" class="prof-section">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Vendor Management</h2>
                        <div class="d-flex gap-2">
                            <button class="btn btn-small btn-primary" id="goRequestListBtn">Vendor Account Request</button>
                            <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                        </div>
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
                                    <th>Vendor Name</th>
                                    <th>Store Name</th>
                                    <th>Email Address</th>
                                    <th>Commission Rate</th>
                                    <th>Status</th>
                                    <th>Action</th>
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


                <!-- ═══ VIEW 2: VENDOR DETAILS ═══ -->
                <div id="vm-detail" class="prof-section" style="display:none">
                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="vmDetailBack"><i class="bi bi-arrow-left"></i></button>
                        Vendor Details
                    </h2>

                    <div class="om-card mb-4" style="position:relative">
                        <div style="position:absolute;top:20px;right:22px;display:flex;align-items:center;gap:8px">
                            <span class="pm-show-label">Status</span>
                            <span class="um-status-toggle" id="vmStatusBadge"></span>
                        </div>
                        <div class="pm-view-info-list" style="max-width:520px">
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">First Name</span><span class="pm-view-val" id="vd-fname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Last Name</span><span class="pm-view-val" id="vd-lname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Email Address</span><span class="pm-view-val" id="vd-email"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Phone Number</span><span class="pm-view-val" id="vd-phone"></span></div>
                            <div class="pm-view-row" style="border-bottom:none"><span class="pm-view-label" style="min-width:160px">Shop Name</span><span class="pm-view-val" id="vd-shop"></span></div>
                        </div>
                        <div class="mt-3">
                            <img id="vd-img" class="vddImage" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Store" />
                        </div>
                    </div>

                    <!-- Order Logs -->
                    <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                        <h3 class="prof-heading mb-0">Order Logs</h3>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="vdLogsPerPage" class="pm-select">
                                <option>5</option>
                                <option selected>8</option>
                                <option>10</option>
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
                            <tbody id="vdLogsBody"></tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="vdLogsInfo"></span>
                        <div class="pm-pagination" id="vdLogsPagination"></div>
                    </div>
                </div>


                <!-- ═══ VIEW 3: VENDOR ACCOUNT REQUEST LIST ═══ -->
                <div id="vm-req-list" class="prof-section" style="display:none">
                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="reqListBack"><i class="bi bi-arrow-left"></i></button>
                        Vendor Account Request
                    </h2>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="reqPerPage" class="pm-select">
                                <option>5</option>
                                <option selected>8</option>
                                <option>10</option>
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
                            <tbody id="reqTableBody"></tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="reqEntryInfo"></span>
                        <div class="pm-pagination" id="reqPagination"></div>
                    </div>
                </div>


                <!-- ═══ VIEW 4: VENDOR ACCOUNT REQUEST DETAILS ═══ -->
                <div id="vm-req-detail" class="prof-section" style="display:none">
                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="reqDetailBack"><i class="bi bi-arrow-left"></i></button>
                        Vendor Account Request Details
                    </h2>

                    <div class="om-card">
                        <div style="position:absolute;top:20px;right:22px;display:flex;align-items:center;gap:8px">
                            <span class="pm-show-label">Status</span>
                            <span class="um-status-toggle inactive">Inactive <i class="bi bi-chevron-down" style="font-size:.7rem"></i></span>
                        </div>
                        <div class="pm-view-info-list" style="max-width:520px">
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">First Name</span><span class="pm-view-val" id="rd-fname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Last Name</span><span class="pm-view-val" id="rd-lname"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Email Address</span><span class="pm-view-val" id="rd-email"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Phone Number</span><span class="pm-view-val" id="rd-phone"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:160px">Shop Name</span><span class="pm-view-val" id="rd-shop"></span></div>
                        </div>
                        <div class="mt-3 mb-4">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Store" class="vddImage"/>
                        </div>
                        <!-- Rejection reason (shown after reject) -->
                        <div id="rd-rejection-wrap" style="display:none">
                            <p style="font-size:.88rem;font-weight:700;color:#1a1d2e;margin-bottom:4px">Rejection Reason:</p>
                            <p id="rd-rejection-text" style="font-size:.85rem;color:#4a5068;line-height:1.6"></p>
                        </div>
                        <div class="prof-btn-row mt-2" id="rdActionBtns">
                            <button class="btn btn-primary" id="rdAcceptBtn">Accept Request</button>
                            <button class="btn btn-outline btn-dark" id="rdRejectBtn">Reject Request</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- ═══ REJECTION REASON MODAL ═══ -->
    <div class="img-modal-overlay" id="rejectReasonOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box">
            <button class="pm-modal-close" id="rejectReasonClose"><i class="bi bi-x"></i></button>
            <h5 class="pm-confirm-title success-modal-title m-0">Rejection Reason</h5>
            <div class="edit-field w-100">
                <label>Reason<span class="req">*</span></label>
                <textarea id="rejectReasonText" class="form-control" rows="5" placeholder="Write Reason"></textarea>
            </div>
            <div id="rejectReasonErr" class="form-err w-100" style="display:none">Please write a reason.</div>
            <button class="btn btn-primary w-100" id="rejectReasonSubmit">Submit</button>
        </div>
    </div>

    <!-- ═══ CONFIRM MODAL ═══ -->
    <div class="img-modal-overlay" id="vmConfirmOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="vmConfirmClose"><i class="bi bi-x"></i></button>
            <div class="pm-confirm-icon" id="vmConfirmIcon"></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="vmConfirmTitle"></h5>
            <p class="pm-confirm-desc" id="vmConfirmDesc"></p>
            <div class="d-flex gap-2 w-100">
                <button class="btn btn-primary flex-fill" id="vmConfirmYes">Yes</button>
                <button class="btn btn-outline btn-dark flex-fill" id="vmConfirmNo">No</button>
            </div>
        </div>
    </div>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="img-modal-overlay" id="vmSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="vmSuccessClose"><i class="bi bi-x"></i></button>
            <div class="success-tick-icon mb-1"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0">Successful</h5>
            <p class="pm-confirm-desc" id="vmSuccessDesc"></p>
            <button class="btn btn-primary w-100" id="vmSuccessDone">Okay</button>
        </div>
    </div>


    <?php
    include('partials/scripts.php');
    ?>

    <script>
        $(function() {

            /* ════ DATA ════ */
            var vendors = [{
                    id: 1,
                    sno: '01',
                    fname: 'Tom',
                    lname: 'Albert',
                    vname: 'Tom Albert',
                    store: 'Tom Store',
                    email: 'tomalbert@gmail.com',
                    commission: '£30.99',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 2,
                    sno: '02',
                    fname: 'Lucie',
                    lname: 'Mike',
                    vname: 'Lucie Mike',
                    store: 'Lucie Mike Store',
                    email: 'luciemike@gmail.com',
                    commission: '£30.99',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 3,
                    sno: '03',
                    fname: 'Charlie',
                    lname: 'Andrew',
                    vname: 'Charlie Andrew',
                    store: 'Charlie Store',
                    email: 'charlieandrew@gmail.com',
                    commission: '£30.99',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 4,
                    sno: '04',
                    fname: 'Adriana',
                    lname: 'James',
                    vname: 'Adriana James',
                    store: 'Adriana Store',
                    email: 'adrianajames@gmail.com',
                    commission: '£30.99',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 5,
                    sno: '05',
                    fname: 'Allice',
                    lname: 'Monk',
                    vname: 'Allice Monk',
                    store: 'Allice Monk Store',
                    email: 'allicemonk@gmail.com',
                    commission: '£30.99',
                    status: 'active',
                    phone: '123 456 7890'
                },
                {
                    id: 6,
                    sno: '06',
                    fname: 'Cindy',
                    lname: 'Jane',
                    vname: 'Cindy Jane',
                    store: 'Cindy Jane Store',
                    email: 'cindyjane@gmail.com',
                    commission: '£30.99',
                    status: 'inactive',
                    phone: '123 456 7890'
                },
                {
                    id: 7,
                    sno: '07',
                    fname: 'Belle',
                    lname: 'Jimmy',
                    vname: 'Belle Jimmy',
                    store: 'Belle Jimmy Store',
                    email: 'bellejimmy@gmail.com',
                    commission: '£30.99',
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

            var vmPage = 1,
                vmPer = 8;
            var vdLogsPage = 1,
                vdLogsPer = 8;
            var reqPage = 1,
                reqPer = 8;
            var activeVendorId = null,
                confirmAction = null;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#vm-list,#vm-detail,#vm-req-list,#vm-req-detail').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            $('#vmDetailBack').on('click', function() {
                showView('#vm-list');
            });
            $('#reqListBack').on('click', function() {
                showView('#vm-list');
            });
            $('#reqDetailBack').on('click', function() {
                showView('#vm-req-list');
            });

            /* ════ VENDOR LIST ════ */
            function renderVmTable() {
                var start = (vmPage - 1) * vmPer,
                    rows = vendors.slice(start, start + vmPer),
                    html = '';
                rows.forEach(function(v) {
                    var isAct = v.status === 'active';
                    html += '<tr>' +
                        '<td>' + v.sno + '</td>' +
                        '<td>' + v.vname + '</td>' +
                        '<td>' + v.store + '</td>' +
                        '<td>' + v.email + '</td>' +
                        '<td>' + v.commission + '</td>' +
                        '<td><span class="um-badge ' + (isAct ? 'active' : 'inactive') + ' vm-toggle-badge" data-id="' + v.id + '"><span class="um-dot"></span>' + (isAct ? 'Active' : 'In Active') + ' <i class="bi bi-chevron-down" style="font-size:.6rem"></i></span></td>' +
                        '<td><div class="pm-action-wrap"><button class="pm-dots-btn">⋮</button><button class="pm-view-btn vm-view-btn" data-id="' + v.id + '"><i class="bi bi-eye"></i> View</button></div></td>' +
                        '</tr>';
                });
                $('#vmTableBody').html(html);
                $('#vmEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + vmPer, vendors.length) + ' of ' + vendors.length + ' entries');
                renderPagination('#vmPagination', vmPage, Math.ceil(vendors.length / vmPer), function(p) {
                    vmPage = p;
                    renderVmTable();
                });
            }
            $('#vmPerPage').on('change', function() {
                vmPer = parseInt($(this).val());
                vmPage = 1;
                renderVmTable();
            });

            /* Toggle status from list */
            $(document).on('click', '.vm-toggle-badge', function(e) {
                e.stopPropagation();
                var id = parseInt($(this).data('id')),
                    v = vendors.find(function(x) {
                        return x.id === id;
                    });
                if (!v) return;
                var toActive = (v.status === 'inactive');
                showConfirm(
                    toActive ? 'active' : 'inactive',
                    toActive ? 'Active Vendor' : 'Inactive Vendor',
                    toActive ? 'Are you sure you want to active vendor?' : 'Are you sure you want to inactive vendor?',
                    function() {
                        v.status = toActive ? 'active' : 'inactive';
                        renderVmTable();
                        showSuccess('Vendor Has Been ' + (toActive ? 'Activated' : 'Deactivated') + ' Successfully!');
                    }
                );
            });

            /* View vendor */
            $(document).on('click', '.vm-view-btn', function() {
                var id = parseInt($(this).data('id')),
                    v = vendors.find(function(x) {
                        return x.id === id;
                    });
                if (!v) return;
                activeVendorId = id;
                $('#vd-fname').text(v.fname);
                $('#vd-lname').text(v.lname);
                $('#vd-email').text(v.email);
                $('#vd-phone').text(v.phone);
                $('#vd-shop').text(v.store + ' Shop');
                updateVmStatusBadge(v);
                renderVdLogs();
                showView('#vm-detail');
            });

            function updateVmStatusBadge(v) {
                var isAct = v.status === 'active';
                $('#vmStatusBadge').removeClass('active inactive').addClass(isAct ? 'active' : 'inactive')
                    .html((isAct ? 'Active' : 'Inactive') + ' <i class="bi bi-chevron-down" style="font-size:.7rem"></i>');
            }

            $('#vmStatusBadge').on('click', function() {
                var v = vendors.find(function(x) {
                    return x.id === activeVendorId;
                });
                if (!v) return;
                var toActive = (v.status === 'inactive');
                showConfirm(
                    toActive ? 'active' : 'inactive',
                    toActive ? 'Active Vendor' : 'Inactive Vendor',
                    toActive ? 'Are you sure you want to active vendor?' : 'Are you sure you want to inactive vendor?',
                    function() {
                        v.status = toActive ? 'active' : 'inactive';
                        updateVmStatusBadge(v);
                        renderVmTable();
                        showSuccess('Vendor Has Been ' + (toActive ? 'Activated' : 'Deactivated') + ' Successfully!');
                    }
                );
            });

            /* ════ ORDER LOGS ════ */
            function renderVdLogs() {
                var start = (vdLogsPage - 1) * vdLogsPer,
                    rows = orderLogs.slice(start, start + vdLogsPer),
                    html = '';
                rows.forEach(function(p) {
                    var isIn = p.status === 'in-stock';
                    html += '<tr><td>' + p.name + '</td><td>' + p.category + '</td><td>' + p.sku + '</td><td>' + p.amount + '</td><td>' + p.stock + '</td>' +
                        '<td><span class="pm-status-badge ' + (isIn ? 'in-stock' : 'out-stock') + '"><span class="pm-dot"></span>' + (isIn ? 'In Stock' : 'Out Stock') + ' <i class="bi bi-chevron-down" style="font-size:.6rem"></i></span></td>' +
                        '<td><div class="pm-action-wrap"><button class="pm-dots-btn">⋮</button><button onclick="window.location.href=\'order-management.php\'" class="pm-view-btn"><i class="bi bi-eye"></i> View</button></div></td></tr>';
                });
                $('#vdLogsBody').html(html);
                $('#vdLogsInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + vdLogsPer, orderLogs.length) + ' of ' + orderLogs.length + ' entries');
                renderPagination('#vdLogsPagination', vdLogsPage, Math.ceil(orderLogs.length / vdLogsPer), function(p) {
                    vdLogsPage = p;
                    renderVdLogs();
                });
            }
            $('#vdLogsPerPage').on('change', function() {
                vdLogsPer = parseInt($(this).val());
                vdLogsPage = 1;
                renderVdLogs();
            });

            /* ════ ACCOUNT REQUEST LIST ════ */
            $('#goRequestListBtn').on('click', function() {
                renderReqTable();
                showView('#vm-req-list');
            });

            function renderReqTable() {
                var start = (reqPage - 1) * reqPer,
                    rows = vendors.slice(start, start + reqPer),
                    html = '';
                rows.forEach(function(v, i) {
                    var isAct = v.status === 'active';
                    html += '<tr>' +
                        '<td>0' + (i + 1) + '</td><td>' + v.fname + '</td><td>' + v.lname + '</td><td>' + v.email + '</td><td>12/12/2025</td>' +
                        '<td><span class="um-badge ' + (isAct ? 'active' : 'inactive') + '"><span class="um-dot"></span>' + (isAct ? 'Active' : 'In Active') + ' <i class="bi bi-chevron-down" style="font-size:.6rem"></i></span></td>' +
                        '<td><div class="pm-action-wrap"><button class="pm-dots-btn">⋮</button><button class="pm-view-btn req-view-btn" data-id="' + v.id + '"><i class="bi bi-eye"></i> View</button></div></td>' +
                        '</tr>';
                });
                $('#reqTableBody').html(html);
                $('#reqEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + reqPer, vendors.length) + ' of ' + vendors.length + ' entries');
                renderPagination('#reqPagination', reqPage, Math.ceil(vendors.length / reqPer), function(p) {
                    reqPage = p;
                    renderReqTable();
                });
            }
            $('#reqPerPage').on('change', function() {
                reqPer = parseInt($(this).val());
                reqPage = 1;
                renderReqTable();
            });

            /* View request detail */
            $(document).on('click', '.req-view-btn', function() {
                var id = parseInt($(this).data('id')),
                    v = vendors.find(function(x) {
                        return x.id === id;
                    });
                if (!v) return;
                activeVendorId = id;
                $('#rd-fname').text(v.fname);
                $('#rd-lname').text(v.lname);
                $('#rd-email').text(v.email);
                $('#rd-phone').text(v.phone);
                $('#rd-shop').text(v.store + ' Shop');
                $('#rdActionBtns').show();
                $('#rd-rejection-wrap').hide();
                showView('#vm-req-detail');
            });

            /* Accept Request */
            $('#rdAcceptBtn').on('click', function() {
                showConfirm('active', 'Accept Request', 'Are you sure you want to accept this vendor request?', function() {
                    showSuccess('Vendor Request Has Been Approved Successfully!');
                    $('#rdActionBtns').hide();
                });
            });

            /* Reject Request */
            $('#rdRejectBtn').on('click', function() {
                $('#rejectReasonText').val('');
                $('#rejectReasonErr').hide();
                $('#rejectReasonOverlay').fadeIn(200);
            });

            $('#rejectReasonClose').on('click', function() {
                $('#rejectReasonOverlay').fadeOut(200);
            });
            $('#rejectReasonOverlay').on('click', function(e) {
                if ($(e.target).is(this)) $(this).fadeOut(200);
            });

            $('#rejectReasonSubmit').on('click', function() {
                var reason = $.trim($('#rejectReasonText').val());
                if (!reason) {
                    $('#rejectReasonErr').show();
                    return;
                }
                $('#rejectReasonOverlay').fadeOut(200);
                showSuccess('Vendor Account Request Has Been Rejected Successfully Notification Has Been Send To Vendor!');
                $('#rd-rejection-wrap').show();
                $('#rd-rejection-text').text(reason);
                $('#rdActionBtns').hide();
            });

            /* ════ SHARED PAGINATION ════ */
            function renderPagination(sel, cur, total, onPage) {
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) html += '<button class="pm-page-btn' + (i === cur ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
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

            /* ════ CONFIRM / SUCCESS ════ */
            function showConfirm(type, title, desc, onYes) {
                var icon = type === 'active' ?
                    '<i class="bi bi-person-check-fill" style="color:#22c55e;font-size:2.6rem;display:block;margin-bottom:6px"></i>' :
                    '<i class="bi bi-person-x-fill"     style="color:#e91e8c;font-size:2.6rem;display:block;margin-bottom:6px"></i>';
                $('#vmConfirmIcon').html(icon);
                $('#vmConfirmTitle').text(title);
                $('#vmConfirmDesc').text(desc);
                confirmAction = onYes;
                $('#vmConfirmOverlay').fadeIn(200);
            }

            function showSuccess(msg) {
                $('#vmSuccessDesc').text(msg);
                $('#vmSuccessOverlay').fadeIn(200);
            }

            $('#vmConfirmClose,#vmConfirmNo').on('click', function() {
                $('#vmConfirmOverlay').fadeOut(200);
            });
            $('#vmConfirmYes').on('click', function() {
                $('#vmConfirmOverlay').fadeOut(200);
                if (typeof confirmAction === 'function') confirmAction();
            });
            $('#vmSuccessClose,#vmSuccessDone').on('click', function() {
                $('#vmSuccessOverlay').fadeOut(200);
            });
            $('#vmConfirmOverlay,#vmSuccessOverlay').on('click', function(e) {
                if ($(e.target).is(this)) $(this).fadeOut(200);
            });

            /* ── INIT ── */
            renderVmTable();
        });
    </script>

</body>

</html>
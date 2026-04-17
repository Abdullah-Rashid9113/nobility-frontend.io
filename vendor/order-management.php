<?php
$page_title = "Order Management | Nobility ";
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

        <div id="page-content" class="dashboardPage orderManagementPage">
            <div class="dashboard-wrap">
                <div id="om-list" class="prof-section">

                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Order Management</h2>
                        <button class="pm-filter-btn" title="Filter"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="omPerPage" class="pm-select">
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
                                    <th>S.No</th>
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Admin Commission</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="omTableBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="omEntryInfo"></span>
                        <div class="pm-pagination" id="omPagination"></div>
                    </div>

                </div>


                <!-- ═══ VIEW 2: ORDER DETAIL ═══ -->
                <div id="om-detail" class="prof-section" style="display:none">

                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="omDetailBack"><i class="bi bi-arrow-left"></i></button>
                        Order Details
                    </h2>

                    <!-- Status Timeline Card -->
                    <div class="om-card mb-3">
                        <div class="om-timeline" id="omTimeline"></div>
                        <div class="om-meta-grid">
                            <div class="pm-view-row">
                                <span class="pm-view-label">Tracking Number:</span>
                                <span class="pm-view-val" id="det-tracking">#1234567</span>
                            </div>
                            <div class="pm-view-row om-status-right">
                                <div class="chatRow">
                                    <span class="pm-show-label">Status</span>
                                    <span class="om-status-val" id="det-status-badge"></span>
                                </div>
                                <button onclick="window.location.href='<?php echo $page_url; ?>/vendor/chats'" class="om-chat-btn btn btn-primary"><i class="bi bi-chat-dots-fill"></i> Chat</button>
                            </div>
                            <div class="pm-view-row">
                                <span class="pm-view-label">Order ID:</span>
                                <span class="pm-view-val" id="det-orderid">#123456</span>
                            </div>
                            <div class="pm-view-row">
                                <span class="pm-view-label">Order Date:</span>
                                <span class="pm-view-val" id="det-date">12/12/2024</span>
                            </div>
                        </div>

                        <!-- Action buttons (change based on status) -->
                        <div class="prof-btn-row mt-3" id="detActionBtns"></div>
                    </div>

                    <!-- Items Table -->
                    <div class="om-card mb-3">
                        <div class="pm-table-wrap">
                            <table class="pm-table">
                                <thead>
                                        <th>S. No</th>
                                        <th>Items</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="detItemsBody"></tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="om-card mb-3">
                        <h5 class="om-section-title">Order Summary</h5>
                        <div class="pm-view-row">
                            <span class="pm-view-label">Sub Total:</span>
                            <span class="pm-view-val" id="det-subtotal">$30.99</span>
                        </div>
                        <div class="pm-view-row">
                            <span class="pm-view-label">Total:</span>
                            <span class="pm-view-val fw-bold" id="det-total">$30.99</span>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="om-card mb-3">
                        <h5 class="om-section-title">Contact Information</h5>
                        <div class="pm-view-row"><span class="pm-view-label">First Name:</span><span class="pm-view-val">Tom</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Last Name:</span><span class="pm-view-val">Albert</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Email Address:</span><span class="pm-view-val">tomalbert@gmail.com</span></div>
                        <div class="pm-view-row">
                            <span class="pm-view-label">Phone Number:</span>
                            <span class="pm-view-val d-flex align-items-center gap-1">
                                <img src="https://flagcdn.com/w20/gb.png" alt="UK" style="width:18px;border-radius:2px;"> 123-4567-890
                            </span>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="om-card mb-3">
                        <h5 class="om-section-title">Shipping Address</h5>
                        <div class="pm-view-row"><span class="pm-view-label">First Name:</span><span class="pm-view-val">Tom</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Last Name:</span><span class="pm-view-val">Albert</span></div>
                        <div class="pm-view-row">
                            <span class="pm-view-label">Phone Number:</span>
                            <span class="pm-view-val d-flex align-items-center gap-1">
                                <img src="https://flagcdn.com/w20/gb.png" alt="UK" style="width:18px;border-radius:2px;"> 123-4567-890
                            </span>
                        </div>
                        <div class="pm-view-row"><span class="pm-view-label">Address:</span><span class="pm-view-val">123 Maple Avenue Springfield, IL 62704 United States</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Country:</span><span class="pm-view-val">United States Of America</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">State:</span><span class="pm-view-val">California</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">City:</span><span class="pm-view-val">New York</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Zip Code:</span><span class="pm-view-val">12345</span></div>
                    </div>

                    <!-- Billing Address -->
                    <div class="om-card mb-3">
                        <h5 class="om-section-title">Billing Address</h5>
                        <div class="pm-view-row"><span class="pm-view-label">First Name:</span><span class="pm-view-val">Tom</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Last Name:</span><span class="pm-view-val">Albert</span></div>
                        <div class="pm-view-row">
                            <span class="pm-view-label">Phone Number:</span>
                            <span class="pm-view-val d-flex align-items-center gap-1">
                                <img src="https://flagcdn.com/w20/gb.png" alt="UK" style="width:18px;border-radius:2px;"> 123-4567-890
                            </span>
                        </div>
                        <div class="pm-view-row"><span class="pm-view-label">Address:</span><span class="pm-view-val">123 Maple Avenue Springfield, IL 62704 United States</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Country:</span><span class="pm-view-val">United States Of America</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">State:</span><span class="pm-view-val">California</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">City:</span><span class="pm-view-val">New York</span></div>
                        <div class="pm-view-row"><span class="pm-view-label">Zip Code:</span><span class="pm-view-val">12345</span></div>
                    </div>

                    <!-- Container for dynamic cancellation reason card -->
                    <div id="omCancelReasonContainer"></div>

                </div>

            </div>
        </div>

    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <!-- ═══ CONFIRM MODAL ═══ -->
    <div class="img-modal-overlay" id="confirmOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box">
            <button class="pm-modal-close" id="confirmCloseBtn"><i class="bi bi-x"></i></button>
            <div class="pm-confirm-icon" id="confirmIcon"></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="confirmTitle">Add Product</h5>
            <p class="pm-confirm-desc" id="confirmDesc">Are you sure you want to add the product?</p>
            <div class="d-flex gap-2 w-100">
                <button class="btn btn-primary flex-fill" id="confirmYesBtn">Yes</button>
                <button class="btn btn-outline btn-dark flex-fill" id="confirmNoBtn">No</button>
            </div>
        </div>
    </div>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="img-modal-overlay" id="successOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box">
            <button class="pm-modal-close" id="successCloseBtn"><i class="bi bi-x"></i></button>
            <div class="pm-confirm-icon"><i class="bi bi-check-circle-fill" style="color:#22c55e;font-size:2.8rem"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="successTitle">Successful</h5>
            <p class="pm-confirm-desc" id="successDesc">Order has been accepted successfully!</p>
            <div class="d-flex gap-2 w-100">
                <button class="btn btn-primary flex-fill" id="successDoneBtn">Done</button>
            </div>
        </div>
    </div>

    <!-- ═══ CANCELLATION REASON MODAL ═══ -->
    <div class="img-modal-overlay" id="cancelReasonOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box">
            <button class="pm-modal-close" id="cancelReasonCloseBtn"><i class="bi bi-x"></i></button>
            <h5 class="pm-confirm-title success-modal-title m-0">Cancelation Reason</h5>
            <div class="edit-field w-100">
                <label>Reason<span class="req">*</span></label>
                <textarea id="cancelReasonText" class="form-control" rows="5" placeholder="Write Reason"></textarea>
            </div>
            <div id="cancelReasonErr" class="form-err w-100" style="display:none">Please write a reason.</div>
            <button class="btn btn-primary w-100" id="cancelReasonSubmit">Submit</button>
        </div>
    </div>

    <script>
        $(function() {

            /* ════ SAMPLE DATA (with cancel_reason field) ════ */
            var orders = [{
                    id: 1,
                    sno: '01',
                    orderId: '#123456',
                    userName: 'tom albert',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '05%',
                    status: 'pending',
                    cancel_reason: null
                },
                {
                    id: 2,
                    sno: '02',
                    orderId: '#123456',
                    userName: 'lucie mike',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '10%',
                    status: 'cancelled',
                    cancel_reason: 'Customer requested cancellation due to change of mind.'
                },
                {
                    id: 3,
                    sno: '03',
                    orderId: '#123456',
                    userName: 'charlie andrew',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '15%',
                    status: 'delivered',
                    cancel_reason: null
                },
                {
                    id: 4,
                    sno: '04',
                    orderId: '#123456',
                    userName: 'adriana james',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '25%',
                    status: 'cancelled',
                    cancel_reason: 'Out of stock, cannot fulfill.'
                },
                {
                    id: 5,
                    sno: '05',
                    orderId: '#123456',
                    userName: 'allice monk',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '19%',
                    status: 'pending',
                    cancel_reason: null
                },
                {
                    id: 6,
                    sno: '06',
                    orderId: '#123456',
                    userName: 'cindy jane',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '13%',
                    status: 'delivered',
                    cancel_reason: null
                },
                {
                    id: 7,
                    sno: '07',
                    orderId: '#123456',
                    userName: 'belle jimmy',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '17%',
                    status: 'pending',
                    cancel_reason: null
                },
                {
                    id: 8,
                    sno: '08',
                    orderId: '#123456',
                    userName: 'david smith',
                    date: '12/12/2025',
                    amount: '£30.99',
                    commission: '11%',
                    status: 'accepted',
                    cancel_reason: null
                },
            ];

            var orderItems = [{
                    sno: '01',
                    img: 'https://images.unsplash.com/photo-1603344797033-f0f4f587ab60?w=100',
                    name: '2 PCS New Casual...',
                    sub: 'Classic New Casual',
                    price: '$30.99',
                    qty: '01',
                    total: '$30.99'
                },
                {
                    sno: '02',
                    img: 'https://images.unsplash.com/photo-1622434641406-a158123450f9?w=100',
                    name: 'Stylish Hublot...',
                    sub: 'Simple Designs',
                    price: '$30.99',
                    qty: '01',
                    total: '$30.99'
                },
                {
                    sno: '03',
                    img: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=100',
                    name: 'Modern Stylish Hublot',
                    sub: "Open-Front Women's",
                    price: '$30.99',
                    qty: '01',
                    total: '$30.99'
                },
            ];

            var currentPage = 1,
                perPage = 8;
            var confirmAction = null;
            var currentOrderId = null;

            /* ════ STATUS HELPERS ════ */
            var statusCfg = {
                pending: {
                    cls: 'om-pending',
                    label: 'Pending'
                },
                cancelled: {
                    cls: 'om-cancelled',
                    label: 'Cancelled'
                },
                delivered: {
                    cls: 'om-delivered',
                    label: 'Delivered'
                },
                accepted: {
                    cls: 'om-accepted',
                    label: 'Accepted'
                },
            };

            function statusBadgeHtml(status) {
                var c = statusCfg[status] || {
                    cls: 'om-pending',
                    label: status
                };
                return '<span class="' + c.cls + '">' + c.label + '</span>';
            }

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#om-list,#om-detail').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            /* ════ RENDER TABLE ════ */
            function renderTable() {
                var start = (currentPage - 1) * perPage;
                var rows = orders.slice(start, start + perPage);
                var html = '';

                rows.forEach(function(o) {
                    var cfg = statusCfg[o.status] || {
                        cls: 'om-pending',
                        label: o.status
                    };
                    html += '<tr>' +
                        '<td>' + o.sno + '</td>' +
                        '<td>' + o.orderId + '</td>' +
                        '<td>' + o.userName + '</td>' +
                        '<td>' + o.date + '</td>' +
                        '<td>' + o.amount + '</td>' +
                        '<td>' + o.commission + '</td>' +
                        '<td><span class="' + cfg.cls + '">' + cfg.label + '</span></td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button class="pm-view-btn om-view-btn" data-id="' + o.id + '"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });

                $('#omTableBody').html(html);
                $('#omEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + perPage, orders.length) + ' of ' + orders.length + ' entries');
                renderPagination();
            }

            function renderPagination() {
                var total = Math.ceil(orders.length / perPage);
                var html = '<button class="pm-page-btn pm-prev-btn">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) {
                    html += '<button class="pm-page-btn' + (i === currentPage ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
                }
                html += '<button class="pm-page-btn pm-next-btn">Next</button>';
                $('#omPagination').html(html);
            }

            renderTable();

            $(document).on('click', '.pm-page-btn[data-page]', function() {
                currentPage = parseInt($(this).data('page'));
                renderTable();
            });
            $(document).on('click', '.pm-prev-btn', function() {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable();
                }
            });
            $(document).on('click', '.pm-next-btn', function() {
                var total = Math.ceil(orders.length / perPage);
                if (currentPage < total) {
                    currentPage++;
                    renderTable();
                }
            });
            $('#omPerPage').on('change', function() {
                perPage = parseInt($(this).val());
                currentPage = 1;
                renderTable();
            });

            /* ════ OPEN ORDER DETAIL ════ */
            $(document).on('click', '.om-view-btn', function() {
                var id = parseInt($(this).data('id'));
                var o = orders.find(function(x) {
                    return x.id === id;
                });
                if (!o) return;
                currentOrderId = id;
                renderDetail(o);
                showView('#om-detail');
            });

            $('#omDetailBack').on('click', function() {
                showView('#om-list');
            });

            /* ════ RENDER DETAIL (including cancellation reason) ════ */
            function renderDetail(o) {
                var cfg = statusCfg[o.status] || {
                    cls: 'om-pending',
                    label: o.status
                };

                /* timeline */
                var steps = buildTimeline(o.status);
                var tlHtml = '';
                steps.forEach(function(s, i) {
                    var isActive = s.active;
                    tlHtml += '<div class="om-tl-step' + (isActive ? ' active' : '') + '">' +
                        '<div class="tl-label">' + s.label + '</div>' +
                        '<div class="tl-date">' + s.date + '</div>' +
                        '</div>';
                    if (i < steps.length - 1) tlHtml += '<div class="om-tl-line"></div>';
                });
                $('#omTimeline').html(tlHtml);

                /* meta */
                $('#det-tracking').text('#1234567');
                $('#det-orderid').text(o.orderId);
                $('#det-date').text('12/12/2024');
                $('#det-status-badge').html('<span class="' + cfg.cls + '">' + cfg.label + '</span>');

                /* action buttons */
                var btnHtml = '';
                if (o.status === 'pending') {
                    btnHtml += '<button class="btn btn-primary om-cancel-order-btn">Cancel Order</button>' +
                            '<button class="btn btn-outline btn-dark ms-2 om-accept-order-btn">Accept Order</button>';
                } else if (o.status === 'accepted') {
                    btnHtml += '<button class="btn btn-primary om-delivered-btn">Mark as Delivered</button>' +
                            '<button class="btn btn-outline btn-dark om-change-to-pending-btn">Change to Pending</button>';
                } else if (o.status === 'delivered' || o.status === 'cancelled') {
                    btnHtml += '<button class="btn btn-warning om-change-to-pending-btn">Change to Pending</button>';
                }
                $('#detActionBtns').html(btnHtml);

                /* items */
                var iHtml = '';
                orderItems.forEach(function(item) {
                    iHtml += '<tr>' +
                        '<td>' + item.sno + '</td>' +
                        '<td><div class="d-flex align-items-center gap-2">' +
                        '<img src="' + item.img + '" class="om-item-img" alt=""/>' +
                        '<div><div class="om-item-name">' + item.name + '</div><div class="om-item-sub">' + item.sub + '</div></div>' +
                        '</div></td>' +
                        '<td>' + item.price + '</td>' +
                        '<td>' + item.qty + '</td>' +
                        '<td>' + item.total + '</td>' +
                        '</tr>';
                });
                $('#detItemsBody').html(iHtml);

                /* summary */
                $('#det-subtotal').text(o.amount);
                $('#det-total').text(o.amount);

                /* cancellation reason container */
                if (o.status === 'cancelled' && o.cancel_reason && o.cancel_reason.trim() !== '') {
                    var reasonHtml = '<div class="om-card mb-3">' +
                        '<h5 class="om-section-title">Cancellation Reason</h5>' +
                        '<div class="pm-view-row">' +
                        '<span class="pm-view-val">' + escapeHtml(o.cancel_reason) + '</span>' +
                        '</div>' +
                        '</div>';
                    $('#omCancelReasonContainer').html(reasonHtml);
                } else {
                    $('#omCancelReasonContainer').empty();
                }
            }

            // Helper to escape HTML to avoid XSS
            function escapeHtml(text) {
                if (!text) return '';
                return text.replace(/[&<>]/g, function(m) {
                    if (m === '&') return '&amp;';
                    if (m === '<') return '&lt;';
                    if (m === '>') return '&gt;';
                    return m;
                });
            }

            function buildTimeline(status) {
                // Define all possible steps in order
                const allSteps = [{
                        key: 'pending',
                        label: 'Pending'
                    },
                    {
                        key: 'accepted',
                        label: 'Accepted'
                    },
                    {
                        key: 'delivered',
                        label: 'Delivered'
                    }
                ];

                // Special case: cancelled order
                if (status === 'cancelled') {
                    return [{
                            label: 'Pending',
                            date: '12/12/2025',
                            active: false
                        },
                        {
                            label: 'Cancelled',
                            date: '12/12/2025',
                            active: true
                        }
                    ];
                }

                // Find index of current status
                const currentIndex = allSteps.findIndex(step => step.key === status);
                if (currentIndex === -1) return []; // fallback

                // Build steps up to current status
                const stepsToShow = allSteps.slice(0, currentIndex + 1);
                return stepsToShow.map(step => ({
                    label: step.label,
                    date: '12/12/2025',
                    active: step.key === status
                }));
            }

            /* ════ CONFIRM MODAL HELPERS ════ */
            function showConfirm(iconHtml, title, desc, onYes) {
                $('#confirmIcon').html(iconHtml);
                $('#confirmTitle').text(title);
                $('#confirmDesc').text(desc);
                confirmAction = onYes;
                $('#confirmOverlay').fadeIn(200);
            }

            function showSuccess(title, desc) {
                $('#successTitle').text(title || 'Successful');
                $('#successDesc').text(desc);
                $('#successOverlay').fadeIn(200);
            }

            $('#confirmCloseBtn,#confirmNoBtn').on('click', function() {
                $('#confirmOverlay').fadeOut(200);
            });
            $('#successCloseBtn,#successDoneBtn').on('click', function() {
                $('#successOverlay').fadeOut(200);
            });
            $('#confirmYesBtn').on('click', function() {
                $('#confirmOverlay').fadeOut(200);
                if (typeof confirmAction === 'function') confirmAction();
            });
            $('#confirmOverlay,#successOverlay').on('click', function(e) {
                if ($(e.target).is('#confirmOverlay,#successOverlay')) $(this).fadeOut(200);
            });

            /* ════ CANCEL ORDER WITH REASON ════ */
            $(document).on('click', '.om-cancel-order-btn', function() {
                showConfirm(
                    '<i class="bi bi-x-circle-fill" style="color:#22c55e;font-size:2.8rem"></i>',
                    'Cancel Order',
                    'Are you sure you want to cancel order?',
                    function() {
                        openCancelReason();
                    }
                );
            });

            function openCancelReason() {
                $('#cancelReasonText').val('');
                $('#cancelReasonErr').hide();
                $('#cancelReasonOverlay').fadeIn(200);
            }

            $('#cancelReasonCloseBtn').on('click', function() {
                $('#cancelReasonOverlay').fadeOut(200);
            });
            $('#cancelReasonOverlay').on('click', function(e) {
                if ($(e.target).is('#cancelReasonOverlay')) $(this).fadeOut(200);
            });

            $('#cancelReasonSubmit').on('click', function() {
                var reason = $.trim($('#cancelReasonText').val());
                if (!reason) {
                    $('#cancelReasonErr').show();
                    return;
                }
                $('#cancelReasonOverlay').fadeOut(200);

                /* update order status and store reason */
                var o = orders.find(function(x) {
                    return x.id === currentOrderId;
                });
                if (o) {
                    o.status = 'cancelled';
                    o.cancel_reason = reason;
                    renderTable();
                    renderDetail(o);
                }

                showSuccess('Successful', 'Order has been cancelled!');
            });

            /* ════ ACCEPT ORDER ════ */
            $(document).on('click', '.om-accept-order-btn', function() {
                showConfirm(
                    '<i class="bi bi-bag-check-fill" style="color:#22c55e;font-size:2.8rem"></i>',
                    'Accept Order',
                    'Are you sure you want to accept order?',
                    function() {
                        var o = orders.find(function(x) {
                            return x.id === currentOrderId;
                        });
                        if (o) {
                            o.status = 'accepted';
                            renderTable();
                            renderDetail(o);
                        }
                        showSuccess('Successful', 'Order has been accepted successfully!');
                    }
                );
            });

            /* ════ MARK AS DELIVERED ════ */
            $(document).on('click', '.om-delivered-btn', function() {
                showConfirm(
                    '<i class="bi bi-box-seam-fill" style="color:#22c55e;font-size:2.8rem"></i>',
                    'Mark As Delivered',
                    'Are you sure you want to mark this order as delivered?',
                    function() {
                        var o = orders.find(function(x) {
                            return x.id === currentOrderId;
                        });
                        if (o) {
                            o.status = 'delivered';
                            renderTable();
                            renderDetail(o);
                        }
                        showSuccess('Successful', 'Order has been marked as delivered!');
                    }
                );
            });

            /* ════ CHANGE TO PENDING ════ */
            $(document).on('click', '.om-change-to-pending-btn', function() {
                showConfirm(
                    '<i class="bi bi-arrow-counterclockwise" style="color:#22c55e;font-size:2.8rem"></i>',
                    'Change to Pending',
                    'Are you sure you want to revert this order to Pending?',
                    function() {
                        var o = orders.find(function(x) {
                            return x.id === currentOrderId;
                        });
                        if (o) {
                            o.status = 'pending';
                            // Clear any cancellation reason if it was cancelled
                            if (o.cancel_reason) {
                                o.cancel_reason = null;
                            }
                            renderTable();
                            renderDetail(o);
                        }
                        showSuccess('Successful', 'Order status changed to Pending!');
                    }
                );
            });

        });
    </script>

</body>

</html>
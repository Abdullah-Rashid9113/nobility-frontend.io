<?php
$page_title = "View Shops | Nobility Admin ";
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

        <div id="page-content" class="dashboardPage AdminviewShops">

            <div class="dashboard-wrap">

                <div id="vs-list" class="prof-section">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">View Shops</h2>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="vsPerPage" class="pm-select">
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
                                    <th>Craeted On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="vsTableBody"></tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="vsEntryInfo"></span>
                        <div class="pm-pagination" id="vsPagination"></div>
                    </div>
                </div>


                <!-- ═══ VIEW 2: SHOP DETAILS ═══ -->
                <div id="vs-detail" class="prof-section" style="display:none">
                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="vsDetailBack"><i class="bi bi-arrow-left"></i></button>
                        Shop Details
                    </h2>
                    <div class="om-card">
                        <div class="pm-view-info-list" style="max-width:660px">
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:180px;font-weight:700">Shop Name:</span><span class="pm-view-val" id="sd-name"></span></div>
                            <div class="pm-view-row" style="border-bottom:none"><span class="pm-view-label" style="min-width:180px;font-weight:700">Phone Number:</span><span class="pm-view-val" id="sd-phone"></span></div>
                        </div>
                        <div class="mt-3 mb-4">
                            <img id="sd-img" class="vddImage" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8" alt="Shop" />
                        </div>
                        <button class="btn btn-primary" id="vsGoProductsBtn">Products</button>
                    </div>
                </div>


                <!-- ═══ VIEW 3: PRODUCTS ═══ -->
                <div id="vs-products" class="prof-section" style="display:none">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">
                            <button class="back-btn" id="vsProductsBack"><i class="bi bi-arrow-left"></i></button>
                            Products
                        </h2>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="vsProdPerPage" class="pm-select">
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
                            <tbody id="vsProdBody"></tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="vsProdInfo"></span>
                        <div class="pm-pagination" id="vsProdPagination"></div>
                    </div>
                </div>


                <!-- ═══ VIEW 4: PRODUCT DETAIL ═══ -->
                <div id="vs-product-detail" class="prof-section" style="display:none">
                    <h2 class="prof-heading mb-4">
                        <button class="back-btn" id="vsProdDetailBack"><i class="bi bi-arrow-left"></i></button>
                        View Product Details
                    </h2>
                    <div class="om-card" style="position:relative">
                        <!-- Status top-right -->
                        <div style="position:absolute;top:20px;right:22px;display:flex;align-items:center;gap:8px">
                            <span class="pm-show-label">Status</span>
                            <span class="um-status-toggle" id="vsProdStatus"></span>
                        </div>

                        <div class="pm-view-info-list" style="max-width:660px">
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:180px;font-weight:700">Product Name:</span><span class="pm-view-val" id="vpd-name"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:180px;font-weight:700">Price:</span><span class="pm-view-val" id="vpd-price"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="min-width:180px;font-weight:700">Category:</span><span class="pm-view-val" id="vpd-category"></span></div>
                            <div class="pm-view-row" style="border-bottom:none"><span class="pm-view-label" style="min-width:180px;font-weight:700">Quantity:</span><span class="pm-view-val" id="vpd-qty"></span></div>
                        </div>

                        <div class="mt-3 mb-3">
                            <p class="pm-view-label" style="font-weight: 700;">Product Description:</p>
                            <p id="vpd-desc" style="color:#4a5068;max-width:660px"></p>
                        </div>

                        <!-- Product images 5-slot grid (read-only) -->
                        <div class="edit-field mb-4">
                            <label class="pm-view-label" style="font-weight: 700;">Product Image<span class="req">*</span></label>
                            <div class="pm-img-grid" id="vpdImgGrid" style="max-width:660px"></div>
                        </div>

                        <button class="btn btn-primary" id="vsDeleteProductBtn">Delete Products</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- ═══ DELETE REASON MODAL ═══ -->
    <div class="img-modal-overlay" id="deleteReasonOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box" style="max-width:660px;gap:14px;text-align:left">
            <button class="pm-modal-close" id="deleteReasonClose"><i class="bi bi-x"></i></button>
            <h5 class="pm-confirm-title success-modal-title m-0 text-center">Deleting Product</h5>
            <p style="font-size:.84rem;color:#4a5068;text-align:center;margin:0">Share Why Are You Deleting This Product?</p>
            <div class="edit-field w-100">
                <textarea id="deleteReasonText" class="form-control" rows="5" placeholder="Write Reason"></textarea>
            </div>
            <div id="deleteReasonErr" class="form-err w-100" style="display:none">Please write a reason.</div>
            <button class="btn btn-primary w-100" id="deleteReasonSubmit">Submit</button>
        </div>
    </div>

    <!-- ═══ SUCCESS MODAL ═══ -->
    <div class="img-modal-overlay" id="vsSuccessOverlay" style="display:none">
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="vsSuccessClose"><i class="bi bi-x"></i></button>
            <div class="success-tick-icon mb-2"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="vsSuccessTitle">Successful!</h5>
            <p class="pm-confirm-desc" id="vsSuccessDesc"></p>
            <button class="btn btn-primary w-100" id="vsSuccessDone">Done</button>
        </div>
    </div>


    <?php
    include('partials/scripts.php');
    ?>

    <script>
        $(function() {

            var shops = [{
                    id: 1,
                    sno: '01',
                    vendor: 'Tom Albert',
                    store: 'Tom Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 2,
                    sno: '02',
                    vendor: 'Lucie Mike',
                    store: 'Lucie Mike Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 3,
                    sno: '03',
                    vendor: 'Charlie Andrew',
                    store: 'Charlie Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 4,
                    sno: '04',
                    vendor: 'Adriana James',
                    store: 'Adriana Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 5,
                    sno: '05',
                    vendor: 'Allice Monk',
                    store: 'Allice Monk Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 6,
                    sno: '06',
                    vendor: 'Cindy Jane',
                    store: 'Cindy Jane Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
                {
                    id: 7,
                    sno: '07',
                    vendor: 'Belle Jimmy',
                    store: 'Belle Jimmy Store',
                    date: '12/12/2025',
                    phone: '123 456 7890'
                },
            ];

            var products = [{
                    id: 1,
                    name: '2 PCS New Casual...',
                    category: 'Classic New Casual',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '56',
                    status: 'in-stock',
                    qty: '5'
                },
                {
                    id: 2,
                    name: 'Stylish Hublot...',
                    category: 'Modern Stylish Hublot',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock',
                    qty: '0'
                },
                {
                    id: 3,
                    name: "Women's Summer...",
                    category: "Open-Front Women's",
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '15',
                    status: 'in-stock',
                    qty: '15'
                },
                {
                    id: 4,
                    name: 'Round Metal...',
                    category: 'Travel-Friendly Metal',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock',
                    qty: '0'
                },
                {
                    id: 5,
                    name: 'AirPods Pro...',
                    category: 'AirPods Pro',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '45',
                    status: 'in-stock',
                    qty: '45'
                },
                {
                    id: 6,
                    name: 'Slippers For Men...',
                    category: 'Occasion/Party Slippers',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '00',
                    status: 'out-stock',
                    qty: '5'
                },
                {
                    id: 7,
                    name: 'Mini Portable...',
                    category: 'Mini Portable Fans',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    stock: '08',
                    status: 'in-stock',
                    qty: '8'
                },
            ];

            var demoImages = [
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=right',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=bottom',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=top',
            ];

            var vsPage = 1,
                vsPer = 8;
            var vsProdPage = 1,
                vsProdPer = 8;
            var activeShopId = null,
                activeProdId = null;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#vs-list,#vs-detail,#vs-products,#vs-product-detail').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            $('#vsDetailBack').on('click', function() {
                showView('#vs-list');
            });
            $('#vsProductsBack').on('click', function() {
                showView('#vs-detail');
            });
            $('#vsProdDetailBack').on('click', function() {
                showView('#vs-products');
            });

            /* ════ SHOPS LIST ════ */
            function renderShops() {
                var start = (vsPage - 1) * vsPer,
                    rows = shops.slice(start, start + vsPer),
                    html = '';
                rows.forEach(function(s) {
                    html += '<tr>' +
                        '<td>' + s.sno + '</td>' +
                        '<td>' + s.vendor + '</td>' +
                        '<td>' + s.store + '</td>' +
                        '<td>' + s.date + '</td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button class="pm-view-btn vs-view-shop" data-id="' + s.id + '"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });
                $('#vsTableBody').html(html);
                $('#vsEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + vsPer, shops.length) + ' of ' + shops.length + ' entries');
                renderPag('#vsPagination', vsPage, Math.ceil(shops.length / vsPer), function(p) {
                    vsPage = p;
                    renderShops();
                });
            }
            $('#vsPerPage').on('change', function() {
                vsPer = parseInt($(this).val());
                vsPage = 1;
                renderShops();
            });

            $(document).on('click', '.vs-view-shop', function() {
                var id = parseInt($(this).data('id')),
                    s = shops.find(function(x) {
                        return x.id === id;
                    });
                if (!s) return;
                activeShopId = id;
                $('#sd-name').text(s.store + ' Shop');
                $('#sd-phone').text(s.phone);
                showView('#vs-detail');
            });

            /* ════ GO TO PRODUCTS ════ */
            $('#vsGoProductsBtn').on('click', function() {
                vsProdPage = 1;
                renderProducts();
                showView('#vs-products');
            });

            /* ════ PRODUCTS LIST ════ */
            function renderProducts() {
                var start = (vsProdPage - 1) * vsProdPer,
                    rows = products.slice(start, start + vsProdPer),
                    html = '';
                rows.forEach(function(p) {
                    var isIn = p.status === 'in-stock';
                    html += '<tr>' +
                        '<td>' + p.name + '</td>' +
                        '<td>' + p.category + '</td>' +
                        '<td>' + p.sku + '</td>' +
                        '<td>' + p.amount + '</td>' +
                        '<td>' + p.stock + '</td>' +
                        '<td><span class="pm-status-badge ' + (isIn ? 'in-stock' : 'out-stock') + '"><span class="pm-dot"></span>' + (isIn ? 'In Stock' : 'Out Stock') + ' <i class="bi bi-chevron-down" style="font-size:.6rem"></i></span></td>' +
                        '<td><div class="pm-action-wrap"><button class="pm-dots-btn">⋮</button><button class="pm-view-btn vs-view-prod" data-id="' + p.id + '"><i class="bi bi-eye"></i> View</button></div></td>' +
                        '</tr>';
                });
                $('#vsProdBody').html(html);
                $('#vsProdInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + vsProdPer, products.length) + ' of ' + products.length + ' entries');
                renderPag('#vsProdPagination', vsProdPage, Math.ceil(products.length / vsProdPer), function(p) {
                    vsProdPage = p;
                    renderProducts();
                });
            }
            $('#vsProdPerPage').on('change', function() {
                vsProdPer = parseInt($(this).val());
                vsProdPage = 1;
                renderProducts();
            });

            /* ════ PRODUCT DETAIL ════ */
            $(document).on('click', '.vs-view-prod', function() {
                var id = parseInt($(this).data('id')),
                    p = products.find(function(x) {
                        return x.id === id;
                    });
                if (!p) return;
                activeProdId = id;
                $('#vpd-name').text(p.name);
                $('#vpd-price').text(p.amount);
                $('#vpd-category').text(p.category.toLowerCase());
                $('#vpd-qty').text(p.qty);
                $('#vpd-desc').text('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

                var isIn = p.status === 'in-stock';
                $('#vsProdStatus').removeClass('active inactive').addClass(isIn ? 'active' : 'inactive')
                    .html((isIn ? 'Active' : 'Inactive') + ' <i class="bi bi-chevron-down" style="font-size:.7rem"></i>');

                /* Product image grid — 5 slots read-only */
                var imgHtml = '';
                for (var i = 0; i < 4; i++) {
                    imgHtml += '<div class="pm-img-slot">' +
                        (demoImages[i] ? '<img src="' + demoImages[i] + '" alt="Product"/>' : '<span class="pm-slot-empty"><i class="bi bi-image"></i></span>') +
                        '</div>';
                }
                $('#vpdImgGrid').html(imgHtml);

                showView('#vs-product-detail');
            });

            /* Status toggle on product detail */
            $('#vsProdStatus').on('click', function() {
                var p = products.find(function(x) {
                    return x.id === activeProdId;
                });
                if (!p) return;
                var toActive = (p.status === 'out-stock');
                p.status = toActive ? 'in-stock' : 'out-stock';
                var isIn = p.status === 'in-stock';
                $(this).removeClass('active inactive').addClass(isIn ? 'active' : 'inactive')
                    .html((isIn ? 'Active' : 'Inactive') + ' <i class="bi bi-chevron-down" style="font-size:.7rem"></i>');
                renderProducts();
                showSuccess('Product status updated successfully!');
            });

            /* ════ DELETE PRODUCT ════ */
            $('#vsDeleteProductBtn').on('click', function() {
                $('#deleteReasonText').val('');
                $('#deleteReasonErr').hide();
                $('#deleteReasonOverlay').fadeIn(200);
            });
            $('#deleteReasonClose').on('click', function() {
                $('#deleteReasonOverlay').fadeOut(200);
            });
            $('#deleteReasonOverlay').on('click', function(e) {
                if ($(e.target).is(this)) $(this).fadeOut(200);
            });

            $('#deleteReasonSubmit').on('click', function() {
                var r = $.trim($('#deleteReasonText').val());
                if (!r) {
                    $('#deleteReasonErr').show();
                    return;
                }
                $('#deleteReasonOverlay').fadeOut(200);
                /* remove product */
                products = products.filter(function(x) {
                    return x.id !== activeProdId;
                });
                showSuccess('Thank you for your feedback, the reason has been added successfully!', 'Successful!');
                /* go back to products list after Done */
                $('#vsSuccessDone').off('click').on('click', function() {
                    $('#vsSuccessOverlay').fadeOut(200);
                    renderProducts();
                    showView('#vs-products');
                });
            });

            /* ════ SUCCESS MODAL ════ */
            function showSuccess(desc, title) {
                $('#vsSuccessTitle').text(title || 'Successful!');
                $('#vsSuccessDesc').text(desc);
                $('#vsSuccessOverlay').fadeIn(200);
            }
            $('#vsSuccessClose').on('click', function() {
                $('#vsSuccessOverlay').fadeOut(200);
            });
            $('#vsSuccessDone').on('click', function() {
                $('#vsSuccessOverlay').fadeOut(200);
            });
            $('#vsSuccessOverlay').on('click', function(e) {
                if ($(e.target).is(this)) $(this).fadeOut(200);
            });

            /* ════ SHARED PAGINATION ════ */
            function renderPag(sel, cur, total, onPage) {
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

            /* INIT */
            renderShops();
        });
    </script>

</body>

</html>
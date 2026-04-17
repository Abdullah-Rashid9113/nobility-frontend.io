<?php
$page_title = "Product Management | Nobility ";
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

        <div id="page-content" class="dashboardPage productManagementPage">
            <div class="dashboard-wrap">

                <div id="pm-list" class="prof-section">

                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Product Management</h2>
                        <div class="d-flex gap-2">
                            <button class="btn btn-small btn-primary" id="goUploadBtn">Add Product</button>
                            <button class="pm-filter-btn" title="Filter"><i class="bi bi-sliders2"></i></button>
                        </div>
                    </div>

                    <!-- Show entries -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="perPageSelect" class="pm-select">
                                <option>5</option>
                                <option selected>8</option>
                                <option>10</option>
                                <option>25</option>
                            </select>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="pm-table-wrap">
                        <table class="pm-table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SKU</th>
                                    <th>Total Amount</th>
                                    <th>S. No</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="pmTableBody">
                                <!-- rows injected by JS -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer -->
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="pmEntryInfo">Showing 1 to 8 of 52 entries</span>
                        <div class="pm-pagination" id="pmPagination"></div>
                    </div>

                </div>

                <!-- ═══ VIEW 2: PRODUCT UPLOAD ═══ -->
                <div id="pm-upload" class="prof-section" style="display:none">
                    <h2 class="prof-heading">
                        <button class="back-btn" id="uploadBackBtn"><i class="bi bi-arrow-left"></i></button>
                        Product Upload
                    </h2>

                    <div class="pm-form-grid">
                        <!-- Left -->
                        <div class="edit-form form-container">
                            <form action="#" method="POST">
                                <div class="edit-field">
                                    <label>Product Name<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <input type="text" class="form-control" id="up-name" placeholder="Navy Blue Sneakers Shoe" />
                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Category<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="up-category" class="pm-field-select form-select">
                                            <option>Men</option>
                                            <option>Women</option>
                                            <option>Kids</option>
                                            <option>Electronics</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Description<span class="req">*</span></label>
                                    <textarea class="form-control" id="up-desc" rows="5" placeholder="Enter product description…"></textarea>
                                </div>
                                <div class="edit-field">
                                    <label>Total Amount<span class="req">*</span></label>
                                    <input type="text" class="form-control" id="up-amount" placeholder="£30.99" />
                                </div>
                                <div class="edit-field">
                                    <label>Available Stock<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="up-stock" class="pm-field-select form-select">
                                            <option>56</option>
                                            <option>10</option>
                                            <option>25</option>
                                            <option>100</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>SKU<span class="req">*</span></label>
                                    <input type="text" class="form-control" id="up-sku" placeholder="KS9452123" />
                                </div>
                                <div class="edit-field variation-section" id="uploadVariationSection">
                                    <div class="var-section-header">
                                        <label class="mb-0">Product Variations</label>
                                        <button type="button" class="var-add-attr-btn" id="upAddAttrBtn">
                                            <i class="bi bi-plus-circle"></i> Add Variation
                                        </button>
                                    </div>

                                    <div class="var-attrs-wrap" id="upAttrsWrap">
                                        <!-- attribute rows injected by JS -->
                                    </div>

                                    <!-- Generated combinations table -->
                                    <div class="var-combos-wrap" id="upCombosWrap" style="display:none">
                                        <div class="var-combo-label">Variation Combinations</div>
                                        <div class="var-combo-table-wrap">
                                            <table class="var-combo-table">
                                                <thead id="upComboHead"></thead>
                                                <tbody id="upComboBody"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Status<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="up-status" class="pm-field-select form-select">
                                            <option>In Stock</option>
                                            <option>Out Stock</option>
                                        </select>

                                    </div>
                                </div>
                                <div id="uploadFormErr" class="form-err" style="display:none"></div>
                                <div class="prof-btn-row mt-4">
                                    <button class="btn btn-primary" id="publishUploadBtn">Publish Product</button>
                                </div>
                            </form>
                        </div>

                        <!-- Right: image drop zone -->
                        <div>
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

                <!-- ═══ VIEW 3: EDIT PRODUCT ═══ -->
                <div id="pm-edit" class="prof-section" style="display:none">
                    <h2 class="prof-heading">
                        <button class="back-btn" id="editBackBtn"><i class="bi bi-arrow-left"></i></button>
                        Edit Product
                    </h2>

                    <div class="pm-form-grid">
                        <!-- Left -->
                        <div class="edit-form form-container">
                            <form action="#">
                                <div class="edit-field">
                                    <label>Product Name<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <input type="text" class="form-control" id="ed-name" placeholder="Product Name" />

                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Category<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="ed-category" class="pm-field-select form-select">
                                            <option>Men</option>
                                            <option>Women</option>
                                            <option>Kids</option>
                                            <option>Electronics</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Description<span class="req">*</span></label>
                                    <textarea class="form-control" id="ed-desc" rows="5"></textarea>
                                </div>
                                <div class="edit-field">
                                    <label>Total Amount<span class="req">*</span></label>
                                    <input type="text" class="form-control" id="ed-amount" />
                                </div>
                                <div class="edit-field">
                                    <label>Available Stock<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="ed-stock" class="pm-field-select form-select">
                                            <option>56</option>
                                            <option>10</option>
                                            <option>25</option>
                                            <option>100</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>SKU<span class="req">*</span></label>
                                    <input type="text" class="form-control" id="ed-sku" />
                                </div>
                                <div class="edit-field variation-section" id="editVariationSection">
                                    <div class="var-section-header">
                                        <label class="mb-0">Product Variations</label>
                                        <button type="button" class="var-add-attr-btn" id="edAddAttrBtn">
                                            <i class="bi bi-plus-circle"></i> Add Variation
                                        </button>
                                    </div>

                                    <div class="var-attrs-wrap" id="edAttrsWrap">
                                        <!-- pre-filled by JS when editing -->
                                    </div>

                                    <div class="var-combos-wrap" id="edCombosWrap" style="display:none">
                                        <div class="var-combo-label">Variation Combinations</div>
                                        <div class="var-combo-table-wrap">
                                            <table class="var-combo-table">
                                                <thead id="edComboHead"></thead>
                                                <tbody id="edComboBody"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-field">
                                    <label>Status<span class="req">*</span></label>
                                    <div class="pm-select-field-wrap">
                                        <select id="ed-status" class="pm-field-select form-select">
                                            <option>In Stock</option>
                                            <option>Out Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="editFormErr" class="form-err" style="display:none"></div>
                                <div class="prof-btn-row mt-4">
                                    <button class="btn btn-primary" id="publishEditBtn">Publish Product</button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <div class="edit-field mt-0">
                                <label>Product Image<span class="req">*</span></label>
                                <div class="pm-img-grid" id="editImgGrid">
                                    <!-- slots injected by JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ═══ VIEW 4: VIEW PRODUCT ═══ -->
                <div id="pm-view" class="prof-section" style="display:none">
                    <div class="d-flex align-items-start justify-content-between gap-2 mb-4 flex-wrap">
                        <h2 class="prof-heading mb-0">
                            <button class="back-btn" id="viewBackBtn"><i class="bi bi-arrow-left"></i></button>
                            View Product
                        </h2>
                        <div class="d-flex align-items-center gap-2">
                            <span class="pm-show-label">Status</span>
                            <span class="pm-status-badge in-stock" id="viewStatusBadge">In Stock <i class="bi bi-chevron-down"></i></span>
                        </div>
                    </div>

                    <div class="pm-form-grid">
                        <!-- Left: read-only info -->
                        <div>
                            <div class="pm-view-info-list">
                                <div class="pm-view-row">
                                    <span class="pm-view-label">Product Name<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-name">Navy Blue Sneakers Shoe</span>
                                </div>
                                <div class="pm-view-row">
                                    <span class="pm-view-label">Category<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-category">Men</span>
                                </div>
                                <div class="pm-view-row description">
                                    <span class="pm-view-label">Description<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span>
                                </div>
                                <div class="pm-view-row">
                                    <span class="pm-view-label">Total Amount<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-amount">£30.99</span>
                                </div>
                                <div class="pm-view-row">
                                    <span class="pm-view-label">Available Stock<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-stock">56</span>
                                </div>
                                <div class="pm-view-row">
                                    <span class="pm-view-label">SKU<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-sku">KS9452123</span>
                                </div>
                                <div class="pm-view-row" id="vw-variations-wrap" style="display:none">
                                    <span class="pm-view-label">Variations<span class="req">*</span></span>
                                    <div class="var-view-list" id="vw-variations"></div>
                                </div>
                                <div class="pm-view-row">
                                    <span class="pm-view-label">Status<span class="req">*</span></span>
                                    <span class="pm-view-val" id="vw-status">In Stock</span>
                                </div>
                            </div>
                            <div class="prof-btn-row mt-4">
                                <button class="btn btn-primary" id="goEditFromViewBtn">Edit Product</button>
                                <button class="btn btn-outline btn-dark" id="deleteProductBtn">Delete Products</button>
                            </div>
                        </div>

                        <!-- Right: image grid read-only -->
                        <div>
                            <div class="edit-field mt-0">
                                <label>Product Image<span class="req">*</span></label>
                                <div class="pm-img-grid" id="viewImgGrid"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <!-- ═══ CONFIRM MODAL (Add / Update / Delete) ═══ -->
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
        <div class="img-modal-box pm-confirm-box text-center">
            <button class="pm-modal-close" id="successCloseBtn"><i class="bi bi-x"></i></button>
            <div class="success-tick-icon mb-1"><i class="bi bi-check-circle"></i></div>
            <h5 class="pm-confirm-title success-modal-title m-0" id="successTitle">Successful</h5>
            <p class="pm-confirm-desc" id="successDesc">Product has been added successfully!</p>
            <button class="btn btn-primary w-100" id="successDoneBtn">Done</button>
        </div>
    </div>

    <script>
        $(function() {

            /* ════ SAMPLE DATA ════ */
            var products = [{
                    id: 1,
                    name: '2 PCS New Casual...',
                    category: 'Classic New Casual',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '01',
                    status: 'in-stock'
                },
                {
                    id: 2,
                    name: 'Stylish Hublot...',
                    category: 'Modern Stylish Hublot',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '02',
                    status: 'out-stock'
                },
                {
                    id: 3,
                    name: "Women's Summer...",
                    category: "Open-Front Women's",
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '03',
                    status: 'in-stock'
                },
                {
                    id: 4,
                    name: 'Round Metal...',
                    category: 'Travel-Friendly Metal',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '04',
                    status: 'out-stock'
                },
                {
                    id: 5,
                    name: 'AirPods Pro...',
                    category: 'AirPods Pro',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '05',
                    status: 'in-stock'
                },
                {
                    id: 6,
                    name: 'Slippers For Men...',
                    category: 'Occasion/Party Slippers',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '06',
                    status: 'out-stock'
                },
                {
                    id: 7,
                    name: 'Mini Portable...',
                    category: 'Mini Portable Fans',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '07',
                    status: 'in-stock'
                },
                {
                    id: 8,
                    name: 'Smart Watch...',
                    category: 'Wearable Tech',
                    sku: 'ks9452123',
                    amount: '£30.99',
                    sno: '08',
                    status: 'in-stock'
                },
            ];

            var demoImages = [
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=right',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=bottom',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=top',
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop&crop=left',
            ];

            var currentPage = 1;
            var perPage = 8;
            var confirmAction = null;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#pm-list, #pm-upload, #pm-edit, #pm-view').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            /* ════ RENDER TABLE ════ */
            function renderTable() {
                var start = (currentPage - 1) * perPage;
                var rows = products.slice(start, start + perPage);
                var html = '';

                rows.forEach(function(p) {
                    var statusLabel = p.status === 'in-stock' ? 'In Stock' : 'Out Stock';
                    var statusCls = p.status === 'in-stock' ? 'in-stock' : 'out-stock';
                    html += '<tr>' +
                        '<td>' + p.name + '</td>' +
                        '<td>' + p.category + '</td>' +
                        '<td>' + p.sku + '</td>' +
                        '<td>' + p.amount + '</td>' +
                        '<td>' + p.sno + '</td>' +
                        '<td><span class="pm-status-badge ' + statusCls + '"><span class="pm-dot"></span>' + statusLabel + '</span></td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button class="pm-view-btn view-row-btn" data-id="' + p.id + '"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });

                $('#pmTableBody').html(html);
                $('#pmEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + perPage, products.length) + ' of ' + products.length + ' entries');
                renderPagination();
            }

            function renderPagination() {
                var total = Math.ceil(products.length / perPage);
                var html = '<button class="pm-page-btn" id="prevPageBtn" ' + (currentPage === 1 ? 'disabled' : '') + '>Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) {
                    html += '<button class="pm-page-btn ' + (i === currentPage ? 'active' : '') + '" data-page="' + i + '">' + i + '</button>';
                }
                if (total > 5) html += '<span class="pm-page-sep">...</span>';
                html += '<button class="pm-page-btn" id="nextPageBtn" ' + (currentPage === total ? 'disabled' : '') + '>Next</button>';
                $('#pmPagination').html(html);
            }

            renderTable();

            /* ── Pagination clicks ── */
            $(document).on('click', '.pm-page-btn', function() {
                if ($(this).prop('disabled')) return;
                var p = $(this).data('page');
                if ($(this).attr('id') === 'prevPageBtn' && currentPage > 1) {
                    currentPage--;
                } else if ($(this).attr('id') === 'nextPageBtn' && currentPage < Math.ceil(products.length / perPage)) {
                    currentPage++;
                } else if (p) {
                    currentPage = parseInt(p);
                } else {
                    return;
                }
                renderTable();
            });

            /* ── Per page change ── */
            $('#perPageSelect').on('change', function() {
                perPage = parseInt($(this).val());
                currentPage = 1;
                renderTable();
            });

            /* ════ NAVIGATION ════ */
            $('#goUploadBtn').on('click', function() {
                showView('#pm-upload');
                resetUploadForm();
            });
            $('#uploadBackBtn').on('click', function() {
                showView('#pm-list');
            });
            $('#editBackBtn').on('click', function() {
                showView('#pm-list');
            });
            $('#viewBackBtn').on('click', function() {
                showView('#pm-list');
            });

            /* ── View row ── */
            $(document).on('click', '.view-row-btn', function() {
                var id = $(this).data('id');
                var p = products.find(function(x) {
                    return x.id === id;
                });
                if (!p) return;

                $('#vw-name').text(p.name);
                $('#vw-category').text(p.category);
                $('#vw-desc').text('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.');
                $('#vw-amount').text(p.amount);
                $('#vw-stock').text('56');
                $('#vw-sku').text(p.sku);
                $('#vw-status').text(p.status === 'in-stock' ? 'In Stock' : 'Out Stock');

                var badge = $('#viewStatusBadge');
                badge.removeClass('in-stock out-stock').addClass(p.status);
                badge.html((p.status === 'in-stock' ? 'In Stock' : 'Out Stock') + ' <i class="bi bi-chevron-down"></i>');

                renderViewGrid();
                showView('#pm-view');
            });

            /* ── Go to Edit from View ── */
            $('#goEditFromViewBtn').on('click', function() {
                // Pre-fill edit fields
                $('#ed-name').val($('#vw-name').text());
                $('#ed-desc').val($('#vw-desc').text());
                $('#ed-amount').val($('#vw-amount').text());
                $('#ed-sku').val($('#vw-sku').text());
                renderEditGrid();
                showView('#pm-edit');
            });

            /* ════ IMAGE GRID ════ */
            function renderEditGrid() {
                var html = '';
                for (var i = 0; i < 5; i++) {
                    var imgSrc = demoImages[i] || '';
                    html += '<div class="pm-img-slot">' +
                        (imgSrc ? '<img src="' + imgSrc + '" alt="Product"/>' : '<span class="pm-slot-empty"><i class="bi bi-plus"></i></span>') +
                        '<label class="pm-slot-upload" title="Replace"><i class="bi bi-upload"></i><input type="file" accept="image/*" style="display:none" class="slot-file"/></label>' +
                        '</div>';
                }
                $('#editImgGrid').html(html);
            }

            function renderViewGrid() {
                var html = '';
                for (var i = 0; i < 5; i++) {
                    var imgSrc = demoImages[i] || '';
                    html += '<div class="pm-img-slot">' +
                        (imgSrc ? '<img src="' + imgSrc + '" alt="Product"/>' : '') +
                        '' +
                        '</div>';
                }
                $('#viewImgGrid').html(html);
            }

            /* slot file replace */
            $(document).on('change', '.slot-file', function() {
                var file = this.files[0];
                if (!file) return;
                var reader = new FileReader();
                var $slot = $(this).closest('.pm-img-slot');
                reader.onload = function(e) {
                    $slot.find('img').remove();
                    $slot.find('.pm-slot-empty').remove();
                    $slot.prepend('<img src="' + e.target.result + '" alt="Product"/>');
                };
                reader.readAsDataURL(file);
            });

            /* ════ UPLOAD DROPZONE ════ */
            function resetUploadForm() {
                $('#up-name, #up-amount, #up-sku').val('');
                $('#up-desc').val('');
                $('#uploadThumbRow').empty();
                $('#uploadFormErr').hide();
            }

            $('#uploadDropzone').on('click', function(e) {
                if (!$(e.target).is('label') && !$(e.target).is('.upload-label') && !$(e.target).is('span')) {
                    $('#uploadFileInput').trigger('click');
                }
            });

            $('#uploadFileInput').on('change', function() {
                var files = Array.from(this.files);
                files.forEach(function(file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#uploadThumbRow').append('<img src="' + e.target.result + '" alt="thumb"/>');
                    };
                    reader.readAsDataURL(file);
                });
            });

            /* drag & drop */
            $('#uploadDropzone').on('dragover', function(e) {
                e.preventDefault();
                $(this).css('background', '#fce5f3');
            }).on('dragleave', function() {
                $(this).css('background', '');
            }).on('drop', function(e) {
                e.preventDefault();
                $(this).css('background', '');
                var files = Array.from(e.originalEvent.dataTransfer.files);
                files.forEach(function(file) {
                    var reader = new FileReader();
                    reader.onload = function(ev) {
                        $('#uploadThumbRow').append('<img src="' + ev.target.result + '" alt="thumb"/>');
                    };
                    reader.readAsDataURL(file);
                });
            });

            /* ════ CONFIRM MODAL HELPERS ════ */
            function showConfirm(type, onYes) {
                var cfg = {
                    add: {
                        icon: '<i class="bi bi-bag-plus-fill add-icon"></i>',
                        title: 'Add Product',
                        desc: 'Are you sure you want to add the product?'
                    },
                    update: {
                        icon: '<i class="bi bi-upload update-icon" style="color:#3b82f6"></i>',
                        title: 'Update Product',
                        desc: 'Are you sure you want to update the product?'
                    },
                    delete: {
                        icon: '<i class="bi bi-trash-fill stock-icon"></i>',
                        title: 'Delete Product',
                        desc: 'Are you sure you want to delete this product?'
                    },
                    stock: {
                        icon: '<i class="bi bi-box-seam stock-icon"></i>',
                        title: 'Out Of Stock',
                        desc: 'Are you sure you want to out of stock product?'
                    },
                };
                var c = cfg[type];
                $('#confirmIcon').html(c.icon);
                $('#confirmTitle').text(c.title);
                $('#confirmDesc').text(c.desc);
                confirmAction = onYes;
                $('#confirmOverlay').fadeIn(200);
            }

            function showSuccess(desc) {
                $('#successDesc').text(desc || 'Product has been added successfully!');
                $('#successOverlay').fadeIn(200);
            }

            /* close modals */
            $('#confirmCloseBtn, #confirmNoBtn').on('click', function() {
                $('#confirmOverlay').fadeOut(200);
            });
            $('#successCloseBtn, #successDoneBtn').on('click', function() {
                $('#successOverlay').fadeOut(200);
            });

            $('#confirmYesBtn').on('click', function() {
                $('#confirmOverlay').fadeOut(200);
                if (typeof confirmAction === 'function') confirmAction();
            });

            /* close on overlay click */
            $('#confirmOverlay, #successOverlay').on('click', function(e) {
                if ($(e.target).is('#confirmOverlay, #successOverlay')) $(this).fadeOut(200);
            });

            /* ── Publish Upload ── */
            $('#publishUploadBtn').on('click', function() {
                $('#uploadFormErr').hide();
                if (!$.trim($('#up-name').val()) || !$.trim($('#up-amount').val()) || !$.trim($('#up-sku').val())) {
                    $('#uploadFormErr').text('Please fill in all required fields.').show();
                    return;
                }
                showConfirm('add', function() {
                    showSuccess('Product has been added successfully!');
                });
            });

            /* ── Publish Edit ── */
            $('#publishEditBtn').on('click', function() {
                $('#editFormErr').hide();
                if (!$.trim($('#ed-name').val())) {
                    $('#editFormErr').text('Please fill in all required fields.').show();
                    return;
                }
                showConfirm('update', function() {
                    showSuccess('Product has been updated successfully!');
                });
            });

            /* ── Delete product ── */
            $('#deleteProductBtn').on('click', function() {
                showConfirm('delete', function() {
                    showSuccess('Product has been deleted successfully!');
                });
            });

            /* ── Status badge toggle (view page) ── */
            $('#viewStatusBadge').on('click', function() {
                var isIn = $(this).hasClass('in-stock');
                showConfirm('stock', function() {
                    if (isIn) {
                        $('#viewStatusBadge').removeClass('in-stock').addClass('out-stock').html('Out Of Stock <i class="bi bi-chevron-down"></i>');
                        $('#vw-status').text('Out Stock');
                    } else {
                        $('#viewStatusBadge').removeClass('out-stock').addClass('in-stock').html('In Stock <i class="bi bi-chevron-down"></i>');
                        $('#vw-status').text('In Stock');
                    }
                    showSuccess('Stock status has been updated!');
                });
            });

            renderEditGrid();

        });
    </script>

<script>
(function ($) {
 
    /* ════════════════════════════════════
       STATE
       varState[ctx]   = [ {name:'', values:[]}, ... ]
       crossLinks[ctx] = { 'S':['Black','White'], 'M':['Red'] }
       comboRows[ctx]  = [ {combo, price, stock, sku, img, _editing} ]
       activeParent[ctx] = currently open parent tab key (string)
    ════════════════════════════════════ */
    var varState    = { up:[], ed:[] };
    var crossLinks  = { up:{}, ed:{} };
    var comboRows   = { up:[], ed:[] };
    var generated   = { up:false, ed:false };
    var activeParent= { up:null, ed:null };
 
    var demoVariations  = [{name:'Size',values:['S','M','L','XL']},{name:'Color',values:['Black','White','Navy']}];
    var demoCrossLinks  = {S:['Black','White'],M:['Black','White','Navy'],L:['White','Navy'],XL:['Navy']};
 
    /* ════ HELPERS ════ */
    function escHtml(s){ return $('<div>').text(s||'').html(); }
 
    /* ════════════════════════════════════
       RENDER ATTRIBUTE ROWS
    ════════════════════════════════════ */
    function renderAttrs(ctx){
        var $wrap = $('#'+ctx+'AttrsWrap');
        $wrap.empty();
 
        varState[ctx].forEach(function(attr, ai){
            var isChild = (ai > 0);
 
            $wrap.append(
                '<div class="var-attr-row" data-ctx="'+ctx+'" data-ai="'+ai+'">' +
                  '<div class="var-attr-top">' +
                    '<input type="text" class="var-attr-name-input form-control" placeholder="Variation name (e.g. Size, Color…)"' +
                      ' data-ctx="'+ctx+'" data-ai="'+ai+'" value="'+escHtml(attr.name)+'"/>' +
                    '<button type="button" class="var-remove-btn" data-ctx="'+ctx+'" data-ai="'+ai+'"><i class="bi bi-trash"></i></button>' +
                  '</div>' +
                  (isChild
                    ? '<div class="var-cross-section" id="crossSection-'+ctx+'-'+ai+'">'+buildCrossGrid(ctx, ai, attr)+'</div>'
                    : '<div class="var-free-values-wrap" id="freeValuesWrap-'+ctx+'-'+ai+'">'+buildFreeValues(ctx, ai, attr)+'</div>'
                  ) +
                '</div>'
            );
        });
 
        updateGenerateBtn(ctx);
        if(generated[ctx]) renderVarTable(ctx, comboRows[ctx]);
    }
 
    /* ════ Free-text value chips for parent attribute ════ */
    function buildFreeValues(ctx, ai, attr){
        var html = '<div class="var-values-row" id="freeChips-'+ctx+'-'+ai+'">';
        attr.values.forEach(function(v, vi){
            html += '<span class="var-tag">'+escHtml(v)+
                      '<button type="button" class="var-tag-remove" data-ctx="'+ctx+'" data-ai="'+ai+'" data-vi="'+vi+'"><i class="bi bi-x"></i></button>'+
                    '</span>';
        });
        html += '<input type="text" class="var-value-input" placeholder="Type value, press Enter…" data-ctx="'+ctx+'" data-ai="'+ai+'"/>'+
                '</div>';
        return html;
    }
 
    /* ════ Cross-link grid with TABS (one active parent at a time) ════ */
    function buildCrossGrid(ctx, ai, attr){
        var parent = varState[ctx][0];
        if(!attr.name)
            return '<span class="var-no-preset">Type a variation name above</span>';
        if(!parent || !parent.name || !parent.values.length)
            return '<span class="var-no-preset">First add values for "'+escHtml(parent ? parent.name||'the first variation' : 'the first variation')+'" above</span>';
 
        /* default active tab */
        if(!activeParent[ctx] || parent.values.indexOf(activeParent[ctx])===-1){
            activeParent[ctx] = parent.values[0];
        }
 
        var links = crossLinks[ctx];
        var pVal  = activeParent[ctx];
        var selectedForActive = links[pVal] || [];
 
        /* Tab row */
        var html = '<div class="var-tabs-row">';
        parent.values.forEach(function(v){
            var isActive = (v === pVal);
            var hasItems = (links[v] && links[v].length > 0);
            html += '<button type="button" class="var-tab-btn'+(isActive?' active':'')+'" data-ctx="'+ctx+'" data-ai="'+ai+'" data-pval="'+escHtml(v)+'">' +
                      escHtml(v) +
                      (hasItems ? '<span class="var-tab-count">'+links[v].length+'</span>' : '') +
                    '</button>';
        });
        html += '</div>';
 
        /* Active tab chip panel */
        html += '<div class="var-cross-panel">';
 
        if(attr.values && attr.values.length > 0){
            /* Show existing values as toggleable chips */
            attr.values.forEach(function(v){
                var sel = selectedForActive.indexOf(v) !== -1;
                html += '<span class="var-preset-chip var-cross-chip'+(sel?' selected':'')+'"' +
                          ' data-ctx="'+ctx+'" data-ai="'+ai+'" data-pval="'+escHtml(pVal)+'" data-val="'+escHtml(v)+'">' +
                          escHtml(v)+
                        '</span>';
            });
        }
 
        /* Free text input to add new child values */
        html += '<input type="text" class="var-value-input var-child-value-input" placeholder="Type value, press Enter…"' +
                  ' data-ctx="'+ctx+'" data-ai="'+ai+'"/>'+
                '</div>';
 
        return html;
    }
 
    /* Rebuild only the cross-grid without touching parent row */
    function refreshCrossGrid(ctx){
        varState[ctx].forEach(function(attr, ai){
            if(ai===0) return;
            var $s = $('#crossSection-'+ctx+'-'+ai);
            if($s.length) $s.html(buildCrossGrid(ctx, ai, attr));
        });
        updateGenerateBtn(ctx);
    }
 
    /* ════════════════════════════════════
       GENERATE BUTTON
    ════════════════════════════════════ */
    function updateGenerateBtn(ctx){
        var hasAny = false;
        if(varState[ctx].length === 1){
            hasAny = varState[ctx][0].values.length > 0;
        } else if(varState[ctx].length >= 2){
            hasAny = varState[ctx][0].values.some(function(pv){
                return (crossLinks[ctx][pv]||[]).length > 0;
            });
        }
        $('#'+ctx+'GenerateWrap').toggle(hasAny);
    }
 
    /* ════════════════════════════════════
       BUILD COMBOS
    ════════════════════════════════════ */
    function buildCombos(ctx){
        var attrs = varState[ctx];
        if(!attrs.length) return [];
 
        if(attrs.length === 1){
            return attrs[0].values.map(function(v){
                return [{attr: attrs[0].name, val: v}];
            });
        }
 
        var parent = attrs[0];
        var child  = attrs[1];
        var combos = [];
        parent.values.forEach(function(pv){
            (crossLinks[ctx][pv]||[]).forEach(function(cv){
                combos.push([{attr:parent.name,val:pv},{attr:child.name,val:cv}]);
            });
        });
        return combos;
    }
 
    /* ════════════════════════════════════
       RENDER VARIATION TABLE
    ════════════════════════════════════ */
    function renderVarTable(ctx, rows){
        var attrs = varState[ctx].filter(function(a){ return a.name; });
        if(!rows.length){ $('#'+ctx+'CombosWrap').hide(); return; }
 
        var headHtml = '<tr>';
        attrs.forEach(function(a){ headHtml += '<th>'+escHtml(a.name)+'</th>'; });
        headHtml += '<th>Image</th><th>Price (£)</th><th>Stock</th><th>SKU</th><th>Actions</th></tr>';
        $('#'+ctx+'ComboHead').html(headHtml);
 
        var bodyHtml = '';
        rows.forEach(function(row, ri){
            var comboCells = row.combo.map(function(c){
                return '<td><span class="var-combo-badge">'+escHtml(c.val)+'</span></td>';
            }).join('');
 
            var imgCell = row.img
                ? '<td class="var-img-cell"><div class="var-img-slot has-img">'+
                    '<img src="'+row.img+'" alt="var"/>'+
                    '<label class="var-img-replace-btn"><i class="bi bi-pencil-fill"></i>'+
                      '<input type="file" accept="image/*" class="var-img-input" data-ctx="'+ctx+'" data-ri="'+ri+'"/></label>'+
                  '</div></td>'
                : '<td class="var-img-cell"><label class="var-img-slot">'+
                    '<i class="bi bi-image var-img-icon"></i>'+
                    '<input type="file" accept="image/*" class="var-img-input" data-ctx="'+ctx+'" data-ri="'+ri+'"/>'+
                  '</label></td>';
 
            if(row._editing){
                var editCells = row.combo.map(function(c, ci){
                    return '<td><input type="text" class="var-combo-edit-input form-control form-control-sm" data-ctx="'+ctx+'" data-ri="'+ri+'" data-ci="'+ci+'" value="'+escHtml(c.val)+'"/></td>';
                }).join('');
 
                bodyHtml += '<tr data-ri="'+ri+'" class="var-row-editing">'+
                    editCells + imgCell +
                    '<td><input type="text"   class="var-price"     value="'+escHtml(row.price||'')+'"  placeholder="30.99"/></td>'+
                    '<td><input type="number" class="var-stock"     value="'+escHtml(row.stock||'')+'"  placeholder="0" min="0"/></td>'+
                    '<td><input type="text"   class="var-sku-field" value="'+escHtml(row.sku||'')+'"    placeholder="SKU-'+(ri+1)+'"/></td>'+
                    '<td class="var-action-cell">'+
                      '<button type="button" class="var-save-row-btn" data-ctx="'+ctx+'" data-ri="'+ri+'"><i class="bi bi-check-lg"></i></button>'+
                      '<button type="button" class="var-del-row-btn"  data-ctx="'+ctx+'" data-ri="'+ri+'"><i class="bi bi-trash"></i></button>'+
                    '</td></tr>';
            } else {
                bodyHtml += '<tr data-ri="'+ri+'">'+
                    comboCells + imgCell +
                    '<td class="var-val-cell">'+(row.price?'£'+escHtml(row.price):'<span class="var-empty">—</span>')+'</td>'+
                    '<td class="var-val-cell">'+(row.stock!==''&&row.stock!==undefined?escHtml(row.stock):'<span class="var-empty">—</span>')+'</td>'+
                    '<td class="var-val-cell">'+(row.sku?escHtml(row.sku):'<span class="var-empty">—</span>')+'</td>'+
                    '<td class="var-action-cell">'+
                      '<button type="button" class="var-edit-row-btn" data-ctx="'+ctx+'" data-ri="'+ri+'"><i class="bi bi-pencil"></i></button>'+
                      '<button type="button" class="var-del-row-btn"  data-ctx="'+ctx+'" data-ri="'+ri+'"><i class="bi bi-trash"></i></button>'+
                    '</td></tr>';
            }
        });
 
        $('#'+ctx+'ComboBody').html(bodyHtml);
        $('#'+ctx+'CombosWrap').show();
    }
 
    /* ════════════════════════════════════
       INJECT GENERATE BUTTON
    ════════════════════════════════════ */
    function injectGenerateBtn(ctx){
        if(!$('#'+ctx+'GenerateBtn').length){
            $('<div class="var-generate-wrap" id="'+ctx+'GenerateWrap" style="display:none">'+
                '<button type="button" class="var-generate-btn" id="'+ctx+'GenerateBtn" data-ctx="'+ctx+'">'+
                  '<i class="bi bi-lightning-charge-fill"></i> Generate Variations'+
                '</button></div>'
            ).insertBefore($('#'+ctx+'CombosWrap'));
        }
    }
    injectGenerateBtn('up');
    injectGenerateBtn('ed');
 
    /* ════════════════════════════════════
       EVENTS
    ════════════════════════════════════ */
 
    /* Add attribute */
    $('#upAddAttrBtn').on('click', function(){
        if(varState.up.length >= 2) return;
        varState.up.push({name:'',values:[]});
        generated.up=false; comboRows.up=[]; $('#upCombosWrap').hide();
        renderAttrs('up');
    });
    $('#edAddAttrBtn').on('click', function(){
        if(varState.ed.length >= 2) return;
        varState.ed.push({name:'',values:[]});
        generated.ed=false; comboRows.ed=[]; $('#edCombosWrap').hide();
        renderAttrs('ed');
    });
 
    /* Remove attribute */
    $(document).on('click', '.var-remove-btn', function(){
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai'));
        varState[ctx].splice(ai,1);
        crossLinks[ctx]={}; activeParent[ctx]=null;
        generated[ctx]=false; comboRows[ctx]=[];
        $('#'+ctx+'CombosWrap').hide();
        renderAttrs(ctx);
    });
 
    /* Attribute name typed */
    $(document).on('input', '.var-attr-name-input', function(){
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai'));
        varState[ctx][ai].name = $(this).val().trim();
        /* if child attr name changes, just rebuild combos label */
        if(ai===0){
            /* parent name changed — refresh child cross-grids */
            refreshCrossGrid(ctx);
        }
        updateGenerateBtn(ctx);
    });
 
    /* Parent free-text: add value via Enter */
    $(document).on('keydown', '.var-value-input:not(.var-child-value-input)', function(e){
        if(e.key!=='Enter') return;
        e.preventDefault();
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai'));
        var val=$(this).val().trim();
        if(!val) return;
        if(varState[ctx][ai].values.indexOf(val)===-1){
            varState[ctx][ai].values.push(val);
            /* auto-set active parent to new value if first */
            if(ai===0 && !activeParent[ctx]) activeParent[ctx]=val;
        }
        $(this).val('');
        /* re-render only the chips wrap, not whole attr row */
        $('#freeValuesWrap-'+ctx+'-'+ai).html(buildFreeValues(ctx, ai, varState[ctx][ai]));
        refreshCrossGrid(ctx);
    });
 
    /* Remove parent tag */
    $(document).on('click', '.var-tag-remove', function(){
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai')), vi=parseInt($(this).data('vi'));
        var removed = varState[ctx][ai].values[vi];
        varState[ctx][ai].values.splice(vi,1);
        if(ai===0){
            delete crossLinks[ctx][removed];
            if(activeParent[ctx]===removed){
                activeParent[ctx] = varState[ctx][0].values[0]||null;
            }
        }
        generated[ctx]=false;
        $('#freeValuesWrap-'+ctx+'-'+ai).html(buildFreeValues(ctx, ai, varState[ctx][ai]));
        refreshCrossGrid(ctx);
    });
 
    /* Tab button click — switch active parent */
    $(document).on('click', '.var-tab-btn', function(){
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai'));
        var pval=$(this).data('pval')+'';
        activeParent[ctx] = pval;
        /* re-render only this cross-section */
        var $s = $('#crossSection-'+ctx+'-'+ai);
        if($s.length) $s.html(buildCrossGrid(ctx, ai, varState[ctx][ai]));
    });
 
    /* Child free-text: add value via Enter (adds to child attr values AND selects for active parent) */
    $(document).on('keydown', '.var-child-value-input', function(e){
        if(e.key!=='Enter') return;
        e.preventDefault();
        var ctx=$(this).data('ctx'), ai=parseInt($(this).data('ai'));
        var val=$(this).val().trim();
        if(!val) return;
 
        var childAttr = varState[ctx][ai];
        /* add to child attr values list if new */
        if(childAttr.values.indexOf(val)===-1) childAttr.values.push(val);
 
        /* also auto-select for current active parent */
        var pVal = activeParent[ctx];
        if(pVal){
            if(!crossLinks[ctx][pVal]) crossLinks[ctx][pVal]=[];
            if(crossLinks[ctx][pVal].indexOf(val)===-1) crossLinks[ctx][pVal].push(val);
        }
 
        $(this).val('');
        refreshCrossGrid(ctx);
    });
 
    /* Cross chip toggle (click existing child value chip) */
    $(document).on('click', '.var-cross-chip', function(){
        var ctx=$(this).data('ctx');
        var pVal=$(this).data('pval')+'';
        var val=$(this).data('val')+'';
 
        if(!crossLinks[ctx][pVal]) crossLinks[ctx][pVal]=[];
        var idx=crossLinks[ctx][pVal].indexOf(val);
        if(idx===-1){ crossLinks[ctx][pVal].push(val); $(this).addClass('selected'); }
        else         { crossLinks[ctx][pVal].splice(idx,1); $(this).removeClass('selected'); }
 
        generated[ctx]=false;
        /* update tab count badge */
        var $tab = $('.var-tab-btn[data-ctx="'+ctx+'"][data-pval="'+val+'"]');
        refreshCrossGrid(ctx);
        updateGenerateBtn(ctx);
    });
 
    /* GENERATE */
    $(document).on('click', '.var-generate-btn', function(){
        var ctx=$(this).data('ctx');
        var combos=buildCombos(ctx);
        if(!combos.length) return;
 
        var existing={};
        comboRows[ctx].forEach(function(row){
            existing[row.combo.map(function(c){return c.attr+':'+c.val;}).join('|')]=row;
        });
 
        comboRows[ctx]=combos.map(function(combo){
            var key=combo.map(function(c){return c.attr+':'+c.val;}).join('|');
            var prev=existing[key]||{};
            return {combo:combo,price:prev.price||'',stock:prev.stock!==undefined?prev.stock:'',sku:prev.sku||'',img:prev.img||'',_editing:false};
        });
 
        generated[ctx]=true;
        renderVarTable(ctx,comboRows[ctx]);
    });
 
    /* Edit row */
    $(document).on('click','.var-edit-row-btn',function(){
        var ctx=$(this).data('ctx'),ri=parseInt($(this).data('ri'));
        comboRows[ctx][ri]._editing=true;
        renderVarTable(ctx,comboRows[ctx]);
    });
 
    /* Save row */
    $(document).on('click','.var-save-row-btn',function(){
        var ctx=$(this).data('ctx'),ri=parseInt($(this).data('ri'));
        var $tr=$('#'+ctx+'ComboBody tr[data-ri="'+ri+'"]');
        $tr.find('.var-combo-edit-input').each(function(){
            comboRows[ctx][ri].combo[parseInt($(this).data('ci'))].val=$(this).val();
        });
        comboRows[ctx][ri].price=$tr.find('.var-price').val().trim();
        comboRows[ctx][ri].stock=$tr.find('.var-stock').val().trim();
        comboRows[ctx][ri].sku=$tr.find('.var-sku-field').val().trim();
        comboRows[ctx][ri]._editing=false;
        renderVarTable(ctx,comboRows[ctx]);
    });
 
    /* Delete row */
    $(document).on('click','.var-del-row-btn',function(){
        var ctx=$(this).data('ctx'),ri=parseInt($(this).data('ri'));
        comboRows[ctx].splice(ri,1);
        renderVarTable(ctx,comboRows[ctx]);
    });
 
    /* Image upload */
    $(document).on('change','.var-img-input',function(){
        var file=this.files[0]; if(!file) return;
        var ctx=$(this).data('ctx'),ri=parseInt($(this).data('ri'));
        var reader=new FileReader();
        reader.onload=function(e){ comboRows[ctx][ri].img=e.target.result; renderVarTable(ctx,comboRows[ctx]); };
        reader.readAsDataURL(file);
    });
 
    /* ════════════════════════════════════
       VIEW / EDIT INTEGRATION
    ════════════════════════════════════ */
    window.renderViewVariations=function(attrs){
        if(!attrs||!attrs.length){$('#vw-variations-wrap').hide();return;}
        var html='';
        attrs.forEach(function(a){
            if(!a.values.length) return;
            html+='<div class="var-view-attr"><span class="var-view-attr-name">'+escHtml(a.name)+'</span><div class="var-view-tags">'+
                a.values.map(function(v){return '<span class="var-view-tag">'+escHtml(v)+'</span>';}).join('')+
                '</div></div>';
        });
        $('#vw-variations').html(html);
        $('#vw-variations-wrap').show();
    };
 
    window.loadEditVariations=function(){
        varState.ed=JSON.parse(JSON.stringify(demoVariations));
        crossLinks.ed=JSON.parse(JSON.stringify(demoCrossLinks));
        activeParent.ed=demoVariations[0].values[0]||null;
        comboRows.ed=[]; generated.ed=false;
        renderAttrs('ed');
    };
 
    $(document).on('click','.view-row-btn',function(){
        setTimeout(function(){renderViewVariations(demoVariations);},50);
    });
    $('#goEditFromViewBtn').on('click',function(){
        setTimeout(function(){loadEditVariations();},50);
    });
 
    var _orig=window.resetUploadForm||function(){};
    window.resetUploadForm=function(){
        _orig();
        varState.up=[]; crossLinks.up={}; comboRows.up=[];
        generated.up=false; activeParent.up=null;
        renderAttrs('up'); $('#upCombosWrap').hide();
    };
 
    $('#goUploadBtn').on('click',function(){
        setTimeout(function(){
            if(varState.up.length===0){
                varState.up.push({name:'',values:[]});
                renderAttrs('up');
            }
        },50);
    });
 
    window.getVariationData=function(ctx){
        return {attributes:varState[ctx],crossLinks:crossLinks[ctx],
            combinations:comboRows[ctx].map(function(r){
                return {combo:r.combo,price:r.price,stock:r.stock,sku:r.sku,img:r.img};
            })};
    };
 
}(jQuery));
</script>

</body>

</html>
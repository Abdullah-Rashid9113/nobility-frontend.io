<?php
$page_title = "Payout Management | Nobility Admin ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<body>

    <?php include('partials/sidebar.php'); ?>

    <div id="main-wrapper">

        <?php include('partials/header.php'); ?>

        <div id="page-content" class="dashboardPage AdminPayoutManagement">

            <div class="dashboard-wrap">

                <div id="vm-list" class="prof-section">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">
                            Payout Management 
                        </h2>
                        <div class="d-flex gap-2">
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
                                    <th>Order ID</th>
                                    <th>Shop Name</th>
                                    <th>User Name</th>
                                    <th>Vendor Name</th>
                                    <th>Total Amount</th>
                                    <th>Order Date</th>
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

            </div>
        </div>
    </div>

    <!-- Modals (same as before) -->
    <?php include('partials/scripts.php'); ?>

    <script>
        $(function() {

            /* Data for Payout Management (Second Image jaisa) */
            var payoutData = [
                { sno: '01', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'paid' },
                { sno: '02', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'unpaid' },
                { sno: '03', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'paid' },
                { sno: '04', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'unpaid' },
                { sno: '05', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'paid' },
                { sno: '06', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'unpaid' },
                { sno: '07', orderId: '#123456', shop: 'silhouette modesty', user: 'Tom Albert', vendor: 'Tom Albert', amount: '£49.99', date: '17/11/2025', status: 'paid' },
            ];

            var vmPage = 1, vmPer = 8;

            function showView(id) {
                $('#vm-list').hide();
                $(id).show();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            /* Render Table - Second Image Style */
            function renderVmTable() {
                var start = (vmPage - 1) * vmPer;
                var rows = payoutData.slice(start, start + vmPer);
                var html = '';

                rows.forEach(function(v) {
                    var statusClass = v.status === 'paid' ? 'paid' : 'unpaid';
                    var statusText = v.status === 'paid' ? 'paid' : 'unpaid';

                    html += `<tr>
                        <td>${v.sno}</td>
                        <td>${v.orderId}</td>
                        <td>${v.shop}</td>
                        <td>${v.user}</td>
                        <td>${v.vendor}</td>
                        <td>${v.amount}</td>
                        <td>${v.date}</td>
                        <td><span class="pm-status-badge ${statusClass}">${statusText}</span></td>
                        <td><button class="pm-view-btn paynow-btn" style="color:#ec4899; font-weight:500;">paynow</button></td>
                    </tr>`;
                });

                $('#vmTableBody').html(html);
                $('#vmEntryInfo').text(`Showing ${start + 1} to ${Math.min(start + vmPer, payoutData.length)} of ${payoutData.length} entries`);
                
                renderPagination('#vmPagination', vmPage, Math.ceil(payoutData.length / vmPer), function(p) {
                    vmPage = p;
                    renderVmTable();
                });
            }

            function renderPagination(sel, cur, total, onPage) {
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) {
                    html += `<button class="pm-page-btn ${i === cur ? 'active' : ''}" data-page="${i}">${i}</button>`;
                }
                if (total > 5) html += '<span class="pm-page-sep">|</span>';
                html += '<button class="pm-page-btn" data-action="next">Next</button>';

                var $p = $(sel).html(html);
                $p.find('[data-page]').on('click', function() { onPage(parseInt($(this).data('page'))); });
                $p.find('[data-action="prev"]').on('click', function() { if (cur > 1) onPage(cur - 1); });
                $p.find('[data-action="next"]').on('click', function() { if (cur < total) onPage(cur + 1); });
            }

            $('#vmPerPage').on('change', function() {
                vmPer = parseInt($(this).val());
                vmPage = 1;
                renderVmTable();
            });

            /* INIT */
            renderVmTable();
        });
    </script>

</body>
</html>
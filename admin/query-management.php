<?php
$page_title = "Query Management | Nobility Admin ";
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

        <div id="page-content" class="dashboardPage AdminQueryManagement">

            <div class="dashboard-wrap">

                <div id="qm-list" class="prof-section">

                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Query Management</h2>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="pm-show-label">Showing:</span>
                        <div class="pm-select-wrap">
                            <select id="qmPerPage" class="pm-select">
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
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Subject</th>
                                    <th>User Type</th>
                                    <th>Received On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="qmTableBody"></tbody>
                        </table>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                        <span class="pm-show-label" id="qmEntryInfo"></span>
                        <div class="pm-pagination" id="qmPagination"></div>
                    </div>

                </div>


                <!-- ═══ VIEW 2: QUERY DETAIL ═══ -->
                <div id="qm-detail" class="prof-section" style="display:none">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="prof-heading mb-0">
                            <button class="back-btn" id="qmDetailBack"><i class="bi bi-arrow-left"></i></button>
                            Query Detail
                        </h2>
                        <button class="pm-filter-btn"><i class="bi bi-sliders2"></i></button>
                    </div>

                    <div class="om-card">
                        <div class="pm-view-info-list" style="max-width:680px">
                            <div class="pm-view-row"><span class="pm-view-label" style="font-weight:700">First Name:</span><span class="pm-view-val" id="qd-name"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="font-weight:700">Email Address:</span><span class="pm-view-val" id="qd-email"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="font-weight:700">Subject:</span><span class="pm-view-val" id="qd-subject"></span></div>
                            <div class="pm-view-row"><span class="pm-view-label" style="font-weight:700">Date:</span><span class="pm-view-val" id="qd-date"></span></div>
                            <div class="pm-view-row" style="border-bottom:none"><span class="pm-view-label" style="font-weight:700">User Type:</span><span class="pm-view-val" id="qd-type"></span></div>
                        </div>
                        <div class="mt-3">
                            <p class="pm-view-label" style="font-weight:700;">Message:</p>
                            <p id="qd-message" style="color:#4a5068;line-height:1.7;max-width:660px"></p>
                        </div>
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

            var queries = [{
                    id: 1,
                    sno: '01',
                    name: 'Tom Albert',
                    email: 'tomalbert@gmail.com',
                    subject: 'Timeless Classic Abayas',
                    type: 'User',
                    date: '12/12/2025'
                },
                {
                    id: 2,
                    sno: '02',
                    name: 'Lucie Mike',
                    email: 'luciemike@gmail.com',
                    subject: 'Elegant Everyday Abayas',
                    type: 'Vendor',
                    date: '12/12/2025'
                },
                {
                    id: 3,
                    sno: '03',
                    name: 'Charlie Andrew',
                    email: 'charlieandrew@gmail.com',
                    subject: 'Classic Modesty Redefined',
                    type: 'User',
                    date: '12/12/2025'
                },
                {
                    id: 4,
                    sno: '04',
                    name: 'Adriana James',
                    email: 'adrianajames@gmail.com',
                    subject: 'Simplicity Meets Grace',
                    type: 'User',
                    date: '12/12/2025'
                },
                {
                    id: 5,
                    sno: '05',
                    name: 'Allice Monk',
                    email: 'allicemonk@gmail.com',
                    subject: 'Effortless Timeless Style',
                    type: 'Vendor',
                    date: '12/12/2025'
                },
                {
                    id: 6,
                    sno: '06',
                    name: 'Cindy Jane',
                    email: 'cindyjane@gmail.com',
                    subject: 'Refined Abaya Collection',
                    type: 'Vendor',
                    date: '12/12/2025'
                },
                {
                    id: 7,
                    sno: '07',
                    name: 'Belle Jimmy',
                    email: 'bellejimmy@gmail.com',
                    subject: 'Modesty In Style',
                    type: 'User',
                    date: '12/12/2025'
                },
                {
                    id: 8,
                    sno: '08',
                    name: 'David Smith',
                    email: 'davidsmith@gmail.com',
                    subject: 'Classic Beauty Collection',
                    type: 'User',
                    date: '12/12/2025'
                },
            ];

            var demoMessage = "Hello! I Understand That Technical Issues Can Be Frustrating, And I'm Here To Help You Resolve Them As Quickly And Smoothly As Possible. Could You Please Describe The Specific Problem You're Experiencing In Detail? With This Information, I'll Be Able To Assist You More Effectively And Work Toward A Solution That Addresses....";

            var currentPage = 1,
                perPage = 8;

            /* ════ VIEW SWITCHER ════ */
            function showView(id) {
                $('#qm-list,#qm-detail').hide();
                $(id).show();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
            $('#qmDetailBack').on('click', function() {
                showView('#qm-list');
            });

            /* ════ RENDER TABLE ════ */
            function renderTable() {
                var start = (currentPage - 1) * perPage,
                    rows = queries.slice(start, start + perPage),
                    html = '';
                rows.forEach(function(q) {
                    html += '<tr>' +
                        '<td>' + q.sno + '</td>' +
                        '<td>' + q.name + '</td>' +
                        '<td>' + q.email + '</td>' +
                        '<td>' + q.subject + '</td>' +
                        '<td>' + q.type + '</td>' +
                        '<td>' + q.date + '</td>' +
                        '<td><div class="pm-action-wrap">' +
                        '<button class="pm-dots-btn">⋮</button>' +
                        '<button class="pm-view-btn qm-view-btn" data-id="' + q.id + '"><i class="bi bi-eye"></i> View</button>' +
                        '</div></td>' +
                        '</tr>';
                });
                $('#qmTableBody').html(html);
                $('#qmEntryInfo').text('Showing ' + (start + 1) + ' to ' + Math.min(start + perPage, queries.length) + ' of ' + queries.length + ' entries');
                renderPagination();
            }

            function renderPagination() {
                var total = Math.ceil(queries.length / perPage);
                var html = '<button class="pm-page-btn" data-action="prev">Previous</button>';
                for (var i = 1; i <= Math.min(total, 5); i++) html += '<button class="pm-page-btn' + (i === currentPage ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
                if (total > 5) html += '<span class="pm-page-sep">|</span>';
                html += '<button class="pm-page-btn" data-action="next">Next</button>';
                var $p = $('#qmPagination').html(html);
                $p.find('[data-page]').on('click', function() {
                    currentPage = parseInt($(this).data('page'));
                    renderTable();
                });
                $p.find('[data-action="prev"]').on('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        renderTable();
                    }
                });
                $p.find('[data-action="next"]').on('click', function() {
                    if (currentPage < total) {
                        currentPage++;
                        renderTable();
                    }
                });
            }

            $('#qmPerPage').on('change', function() {
                perPage = parseInt($(this).val());
                currentPage = 1;
                renderTable();
            });

            /* ════ VIEW DETAIL ════ */
            $(document).on('click', '.qm-view-btn', function() {
                var id = parseInt($(this).data('id'));
                var q = queries.find(function(x) {
                    return x.id === id;
                });
                if (!q) return;
                $('#qd-name').text(q.name);
                $('#qd-email').text(q.email);
                $('#qd-subject').text(q.subject.toLowerCase());
                $('#qd-date').text(q.date);
                $('#qd-type').text(q.type);
                $('#qd-message').text(demoMessage);
                showView('#qm-detail');
            });

            /* INIT */
            renderTable();
        });
    </script>


</body>

</html>
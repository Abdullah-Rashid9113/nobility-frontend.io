<?php
$page_title = "Notifications | Nobility Admin ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

include('partials/head.php');
?>

<body>

    <?php include('partials/sidebar.php'); ?>

    <div id="main-wrapper">

        <?php include('partials/header.php'); ?>

        <div id="page-content" class="dashboardPage AdminNotifications">

            <div class="dashboard-wrap">

                <div id="vm-list" class="prof-section">
                    <div class="d-flex align-items-center justify-content-between mb-5 flex-wrap gap-2">
                        <h2 class="prof-heading mb-0">Notifications</h2>
                    </div>

                    <div class="pm-table-wrap form-container">
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
                        <div id="notificationsList" class="notificationsList"></div>
                        <div class="d-flex align-items-center justify-content-between mt-5 flex-wrap gap-2">
                            <span class="pm-show-label" id="vmEntryInfo"></span>
                            <div class="pm-pagination" id="vmPagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('partials/scripts.php'); ?>

    <script>
        $(function() {

            /* Notifications Data */
            var notifications = [{
                    id: 1,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: true,
                    bgColor: true // pink background for first one
                },
                {
                    id: 2,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 3,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 4,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 5,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 6,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 7,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                },
                {
                    id: 8,
                    message: "Reminder: Time for a Break! It's okay to take some time for yourself. Step away for a few minutes to relax or do something you enjoy. 😊",
                    time: "2:00 PM",
                    date: "01/01/2025",
                    isRead: false
                }
            ];

            var vmPage = 1;
            var vmPer = 8;

            function renderNotifications() {
                var start = (vmPage - 1) * vmPer;
                var rows = notifications.slice(start, start + vmPer);
                var html = '';

                rows.forEach(function(noti) {
                    var bgClass = noti.bgColor ? 'notification-pink' : '';
                    var markText = noti.isRead ? 'Mark As Read' : 'Mark As Unread';

                    html += `
                        <div class="notification-item ${bgClass}">
                            <div style="display:flex; justify-content:space-between; align-items:center;">
                                <div class="Message" style="flex:1;">
                                    <p style="margin:0 0 8px 0; line-height:1.5; color:#666666;">${noti.message}</p>
                                    <div style="display:flex; gap:12px; font-size:13px; color:#6b7280;">
                                        <span><img src="/Nobility/assets/icons/Timming.svg" alt="time" width="13" height="13"> ${noti.time}</span>
                                        <span><img src="/Nobility/assets/icons/Date.svg" alt="date" width="13" height="13"> ${noti.date}</span>
                                    </div>
                                </div>
                                <button class="mark-read-btn" data-id="${noti.id}" 
                                        style="background:none; border:none; color:${noti.isRead ? '#666666' : '#666666'}; font-weight:500; font-size:14px; cursor:pointer;">
                                    ${markText}
                                </button>
                            </div>
                        </div>`;
                });

                $('#notificationsList').html(html);
                $('#vmEntryInfo').text(`Showing 1 to ${Math.min(start + vmPer, notifications.length)} of ${notifications.length} entries`);

                renderPagination('#vmPagination', vmPage, Math.ceil(notifications.length / vmPer), function(p) {
                    vmPage = p;
                    renderNotifications();
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

            $('#vmPerPage').on('change', function() {
                vmPer = parseInt($(this).val());
                vmPage = 1;
                renderNotifications();
            });

            /* Mark as Read / Unread */
            $(document).on('click', '.mark-read-btn', function() {
                var id = $(this).data('id');
                // Yahan real functionality add kar sakte hain baad mein
                alert('Notification status changed!');
                renderNotifications(); // refresh
            });

            /* INIT */
            renderNotifications();
        });
    </script>

</body>

</html>
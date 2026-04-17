<?php
$page_title = "Vendor Dashboard | Nobility ";
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

        <div id="page-content" class="dashboardPage VendorDashboard">
            <div class="dashboard-wrap">

                <div class="stats-row">

                    <div class="stat-card">
                        <div class="stat-top">
                            <span class="stat-label">Total Sales</span>
                        </div>
                        <div class="stat-value">1,243</div>
                        <div class="stat-wave">
                            <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="wg2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                        <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                    </linearGradient>
                                </defs>
                                <path d="M0 30 C50 50 100 10 150 35 C200 55 250 15 300 30 L300 80 L0 80 Z" fill="url(#wg2)" />
                            </svg>
                        </div>
                        <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/sales.svg" alt="stat icon">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-top">
                            <span class="stat-label">Active Orders</span>
                        </div>
                        <div class="stat-value">56</div>
                        <div class="stat-wave">
                            <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="wg2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                        <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                    </linearGradient>
                                </defs>
                                <path d="M0 30 C50 50 100 10 150 35 C200 55 250 15 300 30 L300 80 L0 80 Z" fill="url(#wg2)" />
                            </svg>
                        </div>
                        <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/orders.svg" alt="stat icon">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-top">
                            <span class="stat-label">Pending Shipments</span>
                        </div>
                        <div class="stat-value">12</div>
                        <div class="stat-wave">
                            <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="wg2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                        <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                    </linearGradient>
                                </defs>
                                <path d="M0 30 C50 50 100 10 150 35 C200 55 250 15 300 30 L300 80 L0 80 Z" fill="url(#wg2)" />
                            </svg>
                        </div>
                        <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/shipments.svg" alt="stat icon">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-top">
                            <span class="stat-label">Earnings</span>
                        </div>
                        <div class="stat-value">£</div>
                        <div class="stat-wave">
                            <svg viewBox="0 0 300 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="wg2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.18" />
                                        <stop offset="100%" stop-color="#ff6ec7" stop-opacity="0.04" />
                                    </linearGradient>
                                </defs>
                                <path d="M0 30 C50 50 100 10 150 35 C200 55 250 15 300 30 L300 80 L0 80 Z" fill="url(#wg2)" />
                            </svg>
                        </div>
                        <div class="stat-icon">
                            <img src="<?php echo $page_url; ?>/assets/icons/earning.svg" alt="stat icon">
                        </div>
                    </div>

                </div>

                <div class="bottom-row">

                    <!-- Charts column -->
                    <div class="charts-col">

                        <!-- Line Chart -->
                        <div class="chart-card">
                            <div class="chart-card-header">
                                <span class="chart-title">Total Earning</span>
                                <div class="chart-filter-wrap">
                                    <select class="chart-filter" id="lineYearFilter">
                                        <option value="yearly">Yearly</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="chart-body">
                                <canvas id="earningChart"></canvas>
                            </div>
                            <div class="chart-x-label">Months</div>
                        </div>

                        <!-- Bar Chart -->
                        <div class="chart-card">
                            <div class="chart-card-header">
                                <span class="chart-title">Total Orders</span>
                                <div class="chart-filter-wrap">
                                    <select class="chart-filter" id="barYearFilter">
                                        <option value="yearly">Yearly</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="chart-body">
                                <canvas id="ordersChart"></canvas>
                            </div>
                            <div class="chart-x-label">Months</div>
                        </div>

                    </div><!-- /charts-col -->

                    <!-- Activity Feed -->
                    <div class="feed-card">
                        <div class="feed-header">
                            <span class="chart-title">Total Earning</span>
                            <button class="view-all-btn">View All</button>
                        </div>
                        <div class="feed-list">

                            <div class="feed-item">
                                <div class="feed-icon order">
                                    <img src="<?php echo $page_url; ?>/assets/icons/new-order.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">New Order <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon payout">
                                    <img src="<?php echo $page_url; ?>/assets/icons/payout-process.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Payout Process <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon order">
                                    <img src="<?php echo $page_url; ?>/assets/icons/new-order.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">New Order <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon payout">
                                    <img src="<?php echo $page_url; ?>/assets/icons/payout-process.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Payout Process <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon order">
                                    <img src="<?php echo $page_url; ?>/assets/icons/new-order.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">New Order <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon payout">
                                    <img src="<?php echo $page_url; ?>/assets/icons/payout-process.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Payout Process <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon order">
                                    <img src="<?php echo $page_url; ?>/assets/icons/new-order.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">New Order <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon payout">
                                    <img src="<?php echo $page_url; ?>/assets/icons/payout-process.svg" alt="icon">
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Payout Process <span class="feed-time">3 Years Ago</span></div>
                                    <div class="feed-desc"><a href="#">Lorem Ipsum Has Been The Industry's <strong>SMART WATCH</strong></a> <span class="feed-amount negative">-$299</span></div>
                                </div>
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

    <script>
        $(function() {

            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

            var earningData = {
                yearly: [380, 320, 410, 290, 390, 350, 130, 260, 490, 430, 560, 490],
                2025: [200, 280, 350, 300, 420, 390, 200, 310, 450, 400, 500, 470],
                2024: [150, 200, 280, 250, 300, 320, 180, 260, 380, 350, 430, 400],
                2023: [100, 160, 220, 190, 260, 280, 150, 210, 310, 290, 370, 340],
            };

            var ordersData = {
                yearly: [180, 210, 250, 275, 300, 325, 370, 390, 400, 440, 490, 590],
                2025: [150, 190, 220, 240, 270, 295, 340, 360, 370, 410, 460, 540],
                2024: [120, 160, 190, 210, 240, 265, 300, 320, 340, 380, 420, 490],
                2023: [90, 130, 160, 180, 210, 235, 270, 290, 310, 350, 390, 450],
            };

            /* ── shared chart defaults ── */
            Chart.defaults.font.family = "poppins";
            Chart.defaults.font.size = 11;
            Chart.defaults.color = '#333333';

            function gridColor() {
                return document.body.classList.contains('dark-mode') ?
                    'rgba(255,255,255,0.05)' :
                    'rgba(0,0,0,0.06)';
            }

            function textColor() {
                return document.body.classList.contains('dark-mode') ? '#8a90a2' : '#333333';
            }

            /* ── Line Chart ── */
            var lineCtx = document.getElementById('earningChart').getContext('2d');

            var lineGrad = lineCtx.createLinearGradient(0, 0, 0, 220);
            lineGrad.addColorStop(0, 'rgba(233,30,140,0.18)');
            lineGrad.addColorStop(1, 'rgba(255,110,199,0.01)');

            var earningChart = new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Total Earning',
                        data: earningData.yearly,
                        borderColor: '#e91e8c',
                        borderWidth: 2.5,
                        pointRadius: 0,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: '#e91e8c',
                        tension: 0.45,
                        fill: true,
                        backgroundColor: lineGrad,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,

                    interaction: {
                        mode: 'index',
                        intersect: false
                    },

                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: true,
                            intersect: false,
                            mode: 'index',
                            backgroundColor: '#1a1d2e',
                            titleColor: '#fff',
                            bodyColor: '#ffffff',
                            padding: 10,
                            callbacks: {
                                label: ctx => '  £' + ctx.parsed.y
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                color: gridColor(),
                                drawBorder: false
                            },
                            ticks: {
                                maxRotation: 0
                            }
                        },
                        y: {
                            beginAtZero: true,
                            max: 650,
                            ticks: {
                                stepSize: 50
                            },
                            grid: {
                                color: gridColor(),
                                drawBorder: false
                            },
                            title: {
                                display: true,
                                text: 'Total Earning',
                                color: '#333333',
                                font: {
                                    size: 12,
                                    weight: '600'
                                }
                            }
                        }
                    }
                }
            });

            $('#lineYearFilter').on('change', function() {
                earningChart.data.datasets[0].data = earningData[$(this).val()];
                earningChart.update();
            });

            /* ── Bar Chart ── */
            var barCtx = document.getElementById('ordersChart').getContext('2d');

            var barGrad = barCtx.createLinearGradient(0, 0, 0, 220);
            barGrad.addColorStop(0, '#e91e8c');
            barGrad.addColorStop(1, 'rgba(255,110,199,0.35)');

            var ordersChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Total Orders',
                        data: ordersData.yearly,
                        backgroundColor: barGrad,
                        borderRadius: {
                            topLeft: 20,
                            topRight: 20,
                            bottomLeft: 0,
                            bottomRight: 0
                        },
                        borderSkipped: 'bottom',
                        barPercentage: 0.55,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: true,
                            intersect: false,
                            mode: 'index',
                            backgroundColor: '#1a1d2e',
                            titleColor: '#fff',
                            bodyColor: '#ffffff',
                            padding: 10,
                            callbacks: {
                                label: ctx => '  £' + ctx.parsed.y
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxRotation: 0
                            }
                        },
                        y: {
                            beginAtZero: true,
                            max: 650,
                            ticks: {
                                stepSize: 50
                            },
                            grid: {
                                color: gridColor(),
                                drawBorder: false
                            },
                            title: {
                                display: true,
                                text: 'Total Orders',
                                color: '#333333',
                                font: {
                                    size: 13,
                                    weight: '600'
                                }
                            }
                        }
                    }
                }
            });

            $('#barYearFilter').on('change', function() {
                ordersChart.data.datasets[0].data = ordersData[$(this).val()];
                ordersChart.update();
            });

            $('#themeSwitch').on('change', function() {
                setTimeout(function() {
                    [earningChart, ordersChart].forEach(function(ch) {
                        ch.options.scales.x.ticks.color = textColor();
                        ch.options.scales.y.ticks.color = textColor();
                        ch.options.scales.y.title.color = textColor();
                        ch.update();
                    });
                }, 50);
            });

        });
    </script>

</body>

</html>
<?php
$page_title = "Reports & Analytics | Nobility Admin ";
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

        <div id="page-content" class="dashboardPage AdminAnalytics">


            <div class="dashboard-wrap">

                <h2 class="prof-heading mb-0">Reports &amp; Analytics</h2>

                <!-- ══ ROW 1: 4 STAT CARDS ══ -->
                <div class="adm-stats-row">

                    <div class="adm-stat-card">
                        <div class="adm-sc-label" style="color:#e91e8c">Total Sales</div>
                        <div class="adm-sc-value mt-1">£18,200</div>
                    </div>

                    <div class="adm-stat-card">
                        <div class="adm-sc-label" style="color:#e91e8c">Total Orders</div>
                        <div class="adm-sc-value mt-1">1,240</div>
                    </div>

                    <div class="adm-stat-card">
                        <div class="adm-sc-label" style="color:#e91e8c">Revenue</div>
                        <div class="adm-sc-value mt-1">£23,500</div>
                    </div>

                    <div class="adm-stat-card">
                        <div class="adm-sc-label" style="color:#e91e8c">Conversion Rate</div>
                        <div class="adm-sc-value mt-1">2.15%</div>
                    </div>

                </div>

                <!-- ══ ROW 2: SALES + ORDERS CHARTS ══ -->
                <div class="adm-mid-row">

                    <!-- Sales Bar Chart -->
                    <div class="adm-card">
                        <div class="adm-card-title mb-3">Sales</div>
                        <div style="height:220px"><canvas id="raSalesChart"></canvas></div>
                        <!-- Legend -->
                        <div class="adm-legend-row mt-3">
                            <span class="adm-legend"><span style="width:10px;height:10px;border-radius:50%;background:#1a1d2e;display:inline-block"></span> Online Sales</span>
                            <span class="adm-legend"><span style="width:10px;height:10px;border-radius:50%;background:#e91e8c;display:inline-block"></span> Offline Sales</span>
                        </div>
                    </div>

                    <!-- Orders Line Chart -->
                    <div class="adm-card">
                        <div class="adm-card-title mb-3">Orders</div>
                        <div style="height:220px"><canvas id="raOrdersChart"></canvas></div>
                        <!-- Legend -->
                        <div class="adm-legend-row mt-3">
                            <span class="adm-legend"><span class="adm-legend-dot" style="background:#f59e0b"></span> Old Orders</span>
                            <span class="adm-legend"><span class="adm-legend-dot" style="background:#e91e8c"></span> New Orders</span>
                            <span class="adm-legend"><span class="adm-legend-dot" style="background:#3b82f6"></span> Unique Orders</span>
                        </div>
                    </div>

                </div>

                <!-- ══ ROW 3: FILTER BAR ══ -->
                <div class="adm-card" style="padding:14px 18px">
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <div class="pm-select-wrap" style="flex:1;min-width:140px">
                            <select class="pm-select w-100" style="width:100%">
                                <option>Date Range</option>
                                <option>Last 7 Days</option>
                                <option>Last 30 Days</option>
                                <option>Last 3 Months</option>
                                <option>This Year</option>
                            </select>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <div class="pm-select-wrap" style="flex:1;min-width:140px">
                            <select class="pm-select w-100">
                                <option>Categories</option>
                                <option>Men</option>
                                <option>Women</option>
                                <option>Kids</option>
                                <option>Electronics</option>
                            </select>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <div class="pm-select-wrap" style="flex:1;min-width:140px">
                            <select class="pm-select w-100">
                                <option>Channel</option>
                                <option>Online</option>
                                <option>Offline</option>
                                <option>Both</option>
                            </select>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <button class="pm-filter-btn" style="flex-shrink:0"><i class="bi bi-sliders2"></i></button>
                    </div>
                </div>

                <!-- ══ ROW 4: MONTHLY REVENUE + CONVERSION RATE ══ -->
                <div class="adm-mid-row">

                    <!-- Monthly Revenue -->
                    <div class="adm-card" style="overflow:hidden">
                        <div class="adm-sc-label" style="color:#e91e8c">Monthly Revenue</div>
                        <div class="adm-sc-value mt-1 mb-3">£7,900</div>
                        <div style="height:160px;margin:-8px -20px -20px"><canvas id="raRevenueChart"></canvas></div>
                    </div>

                    <!-- Conversion Rate -->
                    <div class="adm-card" style="overflow:hidden">
                        <div class="adm-sc-label" style="color:#e91e8c">Conversion Rate</div>
                        <div class="adm-sc-value mt-1 mb-3">1.67%</div>
                        <div style="height:160px;margin:-8px -20px -20px"><canvas id="raConversionChart"></canvas></div>
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

            Chart.defaults.font.family = "'Nunito',sans-serif";
            Chart.defaults.font.size = 11;
            Chart.defaults.color = '#8a90a2';

            function gridClr() {
                return document.body.classList.contains('dark-mode') ? 'rgba(255,255,255,.05)' : 'rgba(0,0,0,.06)';
            }

            var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

            /* ── Sales Grouped Bar ── */
            new Chart(document.getElementById('raSalesChart'), {
                type: 'bar',
                data: {
                    labels: days,
                    datasets: [{
                            label: 'Online Sales',
                            data: [11000, 13000, 8000, 9500, 11000, 16000, 20000],
                            backgroundColor: '#1a1d2e',
                            borderRadius: {
                                topLeft: 4,
                                topRight: 4
                            },
                            borderSkipped: 'bottom',
                            barPercentage: .42,
                            categoryPercentage: .7
                        },
                        {
                            label: 'Offline Sales',
                            data: [10000, 12000, 22000, 4000, 10000, 14000, 10000],
                            backgroundColor: '#e91e8c',
                            borderRadius: {
                                topLeft: 4,
                                topRight: 4
                            },
                            borderSkipped: 'bottom',
                            barPercentage: .42,
                            categoryPercentage: .7
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1a1d2e',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 10,
                            callbacks: {
                                label: ctx => '  £' + ctx.parsed.y.toLocaleString()
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                maxRotation: 0
                            }
                        },
                        y: {
                            beginAtZero: true,
                            max: 25000,
                            ticks: {
                                stepSize: 5000,
                                callback: v => v / 1000 + 'k'
                            },
                            grid: {
                                color: gridClr(),
                                drawBorder: false
                            }
                        }
                    }
                }
            });

            /* ── Orders Multi-Line ── */
            var oCtx = document.getElementById('raOrdersChart').getContext('2d');
            /* pink tooltip dot at Jul */
            new Chart(oCtx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                            label: 'Old Orders',
                            data: [290, 270, 260, 250, 240, 220, 200, 220, 250, 260, 240, 200],
                            borderColor: '#f59e0b',
                            borderWidth: 2,
                            pointRadius: 0,
                            pointHoverRadius: 5,
                            tension: .45,
                            fill: false
                        },
                        {
                            label: 'New Orders',
                            data: [260, 250, 230, 220, 210, 200, 310, 280, 260, 240, 210, 180],
                            borderColor: '#e91e8c',
                            borderWidth: 2,
                            pointRadius: (ctx) => ctx.dataIndex === 6 ? 5 : 0,
                            pointBackgroundColor: '#e91e8c',
                            tension: .45,
                            fill: false
                        },
                        {
                            label: 'Unique Orders',
                            data: [220, 210, 200, 195, 185, 195, 230, 200, 190, 185, 175, 160],
                            borderColor: '#3b82f6',
                            borderWidth: 2,
                            pointRadius: 0,
                            pointHoverRadius: 5,
                            tension: .45,
                            fill: false
                        }
                    ]
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
                            backgroundColor: '#1a1d2e',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 10
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                maxRotation: 0
                            }
                        },
                        y: {
                            beginAtZero: false,
                            min: 0,
                            max: 400,
                            ticks: {
                                stepSize: 100
                            },
                            grid: {
                                color: gridClr(),
                                drawBorder: false
                            }
                        }
                    }
                }
            });

            /* ── Monthly Revenue mini line ── */
            function miniLine(id, data) {
                var ctx = document.getElementById(id).getContext('2d');
                var g = ctx.createLinearGradient(0, 0, 0, 110);
                g.addColorStop(0, 'rgba(233,30,140,.18)');
                g.addColorStop(1, 'rgba(233,30,140,.01)');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.map((_, i) => i),
                        datasets: [{
                            data: data,
                            borderColor: '#e91e8c',
                            borderWidth: 2.5,
                            pointRadius: 0,
                            tension: .5,
                            fill: true,
                            backgroundColor: g
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
                                enabled: false
                            }
                        },
                        scales: {
                            x: {
                                display: false
                            },
                            y: {
                                display: false,
                                beginAtZero: false
                            }
                        }
                    }
                });
            }

            miniLine('raRevenueChart', [4000, 3800, 5200, 4600, 6000, 5400, 7900, 7200, 6800, 7500, 7900, 7600]);
            miniLine('raConversionChart', [1.2, 1.1, 1.5, 1.3, 1.8, 1.6, 1.67, 2.1, 1.9, 2.2, 1.8, 1.67]);

            /* Theme toggle */
            $('#themeSwitch').on('change', function() {
                setTimeout(function() {
                    Chart.instances && Object.values(Chart.instances).forEach(function(ch) {
                        if (ch.options.scales && ch.options.scales.y && ch.options.scales.y.grid)
                            ch.options.scales.y.grid.color = gridClr();
                        ch.update();
                    });
                }, 50);
            });

        });
    </script>

</body>

</html>
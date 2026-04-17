<?php
$page_title = "Admin Dashboard | Nobility ";
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

    <div id="page-content" class="dashboardPage AdminDashboard">

      <div class="dashboard-wrap">

        <!-- ══ ROW 1: 4 STAT CARDS ══ -->
        <div class="adm-stats-row">

          <div class="adm-stat-card">
            <div class="adm-sc-top">
              <span class="adm-sc-label">Total Sales</span>
              <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
            </div>
            <div class="adm-sc-sub">Last 7 days</div>
            <div class="adm-sc-main-row">
              <span class="adm-sc-value">£350K</span>
              <span class="adm-sc-tag teal">Sales</span>
              <span class="adm-sc-change up"><i class="bi bi-arrow-up-short"></i>10.4%</span>
            </div>
            <div class="adm-sc-prev">Previous 7days <strong class="adm-sc-prev-val">(£235)</strong></div>
            <div class="adm-sc-footer">
              <button class="adm-details-btn">Details</button>
              <div class="adm-mini-bars"><canvas id="salesMiniCanvas" height="48"></canvas></div>
            </div>
          </div>

          <div class="adm-stat-card">
            <div class="adm-sc-top">
              <span class="adm-sc-label">Total Users</span>
              <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
            </div>
            <div class="adm-sc-main-row mt-2">
              <span class="adm-sc-value">1,243</span>
              <span class="adm-sc-tag orange">Sales</span>
            </div>
            <div class="adm-sc-footer mt-3">
              <button class="adm-details-btn">Details</button>
              <div class="adm-mini-bars"><canvas id="usersMiniCanvas" height="48"></canvas></div>
            </div>
          </div>

          <div class="adm-stat-card">
            <div class="adm-sc-top">
              <span class="adm-sc-label">Total Vendors</span>
              <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
            </div>
            <div class="adm-sc-main-row mt-2">
              <span class="adm-sc-value">951</span>
              <span class="adm-sc-tag blue">Vendors</span>
            </div>
            <div class="adm-sc-footer mt-3">
              <button class="adm-details-btn">Details</button>
              <div class="adm-mini-bars"><canvas id="vendorsMiniCanvas" height="48"></canvas></div>
            </div>
          </div>

          <div class="adm-stat-card">
            <div class="adm-sc-top">
              <span class="adm-sc-label">Active Orders</span>
              <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
            </div>
            <div class="adm-sc-main-row mt-2">
              <span class="adm-sc-value">£350K</span>
              <span class="adm-sc-tag gray">Orders</span>
              <span class="adm-sc-change up"><i class="bi bi-arrow-up-short"></i>10.4%</span>
            </div>
            <div class="adm-sc-footer mt-3">
              <button class="adm-details-btn">Details</button>
              <div class="adm-cart-icon"><i class="bi bi-cart3"></i></div>
            </div>
          </div>

        </div>

        <!-- ══ ROW 2: BOTTOM GRID ══ -->
        <div class="adm-bottom-grid">

          <!-- LEFT: Donut -->
          <div class="adm-card adm-donut-card">
            <div class="adm-card-header">
              <span class="adm-card-title">Total Earnings</span>
              <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
            </div>
            <div class="adm-donut-wrap">
              <canvas id="earningsDonut"></canvas>
              <div class="adm-donut-center">75%</div>
            </div>
            <div class="adm-donut-stats">
              <div class="adm-ds-row">
                <div>
                  <div class="adm-ds-label"><span class="adm-dot pink"></span> Revenue</div>
                  <div class="adm-ds-val">£37,802</div>
                </div>
                <div class="adm-ds-change up"><i class="bi bi-graph-up-arrow"></i> 0.56%</div>
              </div>
              <div class="adm-ds-row mt-2">
                <div>
                  <div class="adm-ds-label"><span class="adm-dot lgray"></span> Profit</div>
                  <div class="adm-ds-val">£28,305</div>
                </div>
                <div class="adm-ds-change up"><i class="bi bi-graph-up-arrow"></i> 0.56%</div>
              </div>
            </div>
          </div>

          <!-- RIGHT col -->
          <div class="adm-right-col">

            <div class="adm-mid-row">

              <!-- Pending Approvals -->
              <div class="adm-card">
                <div class="adm-card-header">
                  <span class="adm-card-title">Pending Approvals</span>
                  <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
                </div>
                <div class="adm-sc-sub mb-3">Last 7 days</div>
                <div class="adm-approvals-grid">
                  <div>
                    <div class="adm-ap-label">Pending</div>
                    <div class="adm-ap-val">509 <span class="adm-ap-sub">user 204</span></div>
                  </div>
                  <div class="adm-ap-divider"></div>
                  <div>
                    <div class="adm-ap-label">Canceled</div>
                    <div class="adm-ap-val">94 <span class="adm-sc-change down"><i class="bi bi-arrow-down-short"></i>14.4%</span></div>
                  </div>
                </div>
                <button class="adm-details-btn mt-3">Details</button>
              </div>

              <!-- Sales Target -->
              <div class="adm-card">
                <div class="adm-card-header">
                  <span class="adm-card-title">Sales Target</span>
                  <button class="adm-dots-btn"><i class="bi bi-three-dots-vertical"></i></button>
                </div>
                <div class="adm-target-meta">
                  <div>
                    <div class="adm-tm-label">In Progress</div>
                    <div class="adm-tm-val">£ 211,411</div>
                  </div>
                  <div class="text-end">
                    <div class="adm-tm-label">Sales Target</div>
                    <div class="adm-tm-val">£ 500,000</div>
                  </div>
                </div>
                <div class="chartWrap"><canvas id="targetBarChart"></canvas></div>
              </div>

            </div>

            <!-- Sales Year Chart -->
            <div class="adm-card">
              <div class="adm-card-header">
                <div>
                  <div class="adm-card-title">Your Sales this year</div>
                  <div class="adm-legend-row">
                    <span class="adm-legend"><span class="adm-legend-dot pink-solid"></span> Average Sale Value</span>
                    <span class="adm-legend"><span class="adm-legend-dot yellow-dash"></span> Average item persale</span>
                  </div>
                </div>
                <button class="adm-showall-btn">Show All <i class="bi bi-arrow-up-right"></i></button>
              </div>
              <div style="height:420px;margin-top:12px"><canvas id="salesYearChart"></canvas></div>
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
      Chart.defaults.font.family = "'Nunito',sans-serif";
      Chart.defaults.font.size = 11;
      Chart.defaults.color = '#8a90a2';

      function gridClr() {
        return document.body.classList.contains('dark-mode') ? 'rgba(255,255,255,.05)' : 'rgba(0,0,0,.06)';
      }

      /* Mini bars */
      function miniBar(id, data, color) {
        var c = document.getElementById(id);
        if (!c) return;
        new Chart(c, {
          type: 'bar',
          data: {
            labels: data.map((_, i) => i),
            datasets: [{
              data: data,
              backgroundColor: color,
              borderRadius: 3,
              borderSkipped: 'none',
              barPercentage: .8
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
                beginAtZero: true
              }
            }
          }
        });
      }
      miniBar('salesMiniCanvas', [20, 35, 28, 42, 38, 50, 45, 60, 55, 48], 'rgba(20,184,166,.6)');
      miniBar('usersMiniCanvas', [15, 25, 20, 35, 30, 45, 40, 50, 35, 28], 'rgba(245,158,11,.6)');
      miniBar('vendorsMiniCanvas', [10, 18, 22, 28, 24, 32, 38, 42, 30, 25], 'rgba(59,130,246,.6)');

      /* Donut */
      new Chart(document.getElementById('earningsDonut'), {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [75, 25],
            backgroundColor: ['#e91e8c', '#e8eaf0'],
            borderWidth: 0,
            borderRadius: [0, 0],
            hoverOffset: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '80%',
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              enabled: false
            }
          }
        }
      });

      /* Target bar */
      var tCtx = document.getElementById('targetBarChart').getContext('2d');
      var tGrad = tCtx.createLinearGradient(0, 0, 0, 100);
      tGrad.addColorStop(0, '#e91e8c');
      tGrad.addColorStop(1, 'rgba(255,110,199,.25)');
      new Chart(tCtx, {
        type: 'bar',
        data: {
          labels: ['', '', '', '', '', '', '', '', '', ''],
          datasets: [{
            data: [80, 50, 65, 90, 70, 110, 85, 120, 100, 140],
            backgroundColor: tGrad,
            borderRadius: {
              topLeft: 6,
              topRight: 6
            },
            borderSkipped: 'bottom',
            barPercentage: .7
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
              beginAtZero: true
            }
          }
        }
      });

      /* Sales year */
      var sCtx = document.getElementById('salesYearChart').getContext('2d');
      var sGrad = sCtx.createLinearGradient(0, 0, 0, 220);
      sGrad.addColorStop(0, 'rgba(233,30,140,.15)');
      sGrad.addColorStop(1, 'rgba(233,30,140,.01)');

      var salesChart = new Chart(sCtx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
          datasets: [{
              label: 'Average Sale Value',
              data: [120, 180, 150, 200, 170, 220, 260, 210, 240, 280, 310, 350],
              borderColor: '#e91e8c',
              borderWidth: 2.5,
              pointRadius: 0,
              pointHoverRadius: 5,
              tension: .45,
              fill: true,
              backgroundColor: sGrad
            },
            {
              label: 'Average item persale',
              data: [80, 100, 140, 120, 160, 180, 150, 190, 170, 220, 260, 300],
              borderColor: '#f59e0b',
              borderWidth: 2,
              borderDash: [6, 4],
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
              padding: 10,
              callbacks: {
                label: ctx => '  £ ' + ctx.parsed.y.toLocaleString()
              }
            }
          },
          scales: {
            x: {
              grid: {
                color: gridClr(),
                drawBorder: false
              },
              ticks: {
                maxRotation: 0
              }
            },
            y: {
              display: false,
              beginAtZero: true
            }
          }
        }
      });

      $('#themeSwitch').on('change', function() {
        setTimeout(function() {
          salesChart.options.scales.x.grid.color = gridClr();
          salesChart.update();
        }, 50);
      });
    });
  </script>

</body>

</html>
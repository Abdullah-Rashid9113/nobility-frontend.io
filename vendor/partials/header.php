<header id="header">
    <!-- Hamburger -->
    <button id="sidebarToggle" title="Toggle Sidebar">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Search -->
    <div class="header-search">
        <i class="bi bi-search search-icon"></i>
        <input type="text" placeholder="Search Here…" id="searchInput" />
    </div>

    <!-- Right actions -->
    <div class="header-actions">

        <!-- Theme Toggle Switch -->
        <div class="theme-toggle">
            <label class="switchs" id="themeSwitchLabel">
                <input type="checkbox" id="themeSwitch">
                <span class="slider"></span>
            </label>
        </div>

        <!-- Language -->
        <select class="lang-select" title="Language">
            <option>EN</option>
        </select>

        <!-- Notifications -->
        <div style="position:relative">
            <button class="hdr-btn" id="notifBtn" title="Notifications">
                <i class="bi bi-bell"></i>
                <span class="badge-dot">3</span>
            </button>
            <!-- Notification Dropdown -->
            <div class="notif-dropdown" id="notifDropdown">
                <div class="notif-header">
                    Notifications
                    <span>Mark all read</span>
                </div>
                <div class="notif-item">
                    <div class="notif-icon"><i class="bi bi-bag-check"></i></div>
                    <div class="notif-text">
                        <div class="title">New Order Received</div>
                        <div class="desc">Smart Watch · 3 mins ago</div>
                    </div>
                </div>
                <div class="notif-item">
                    <div class="notif-icon"><i class="bi bi-cash-stack"></i></div>
                    <div class="notif-text">
                        <div class="title">Payout Processed</div>
                        <div class="desc">£299 transferred · 1 hr ago</div>
                    </div>
                </div>
                <div class="notif-item">
                    <div class="notif-icon"><i class="bi bi-truck"></i></div>
                    <div class="notif-text">
                        <div class="title">Shipment Dispatched</div>
                        <div class="desc">Order #1045 · 2 hrs ago</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User profile -->
        <div class="hdr-user" id="profileBtn" style="position:relative">
            <div class="status active">

            </div>
            <img src="https://i.pravatar.cc/80?img=47" alt="User" />
            <div class="user-info">
                <div class="name">Company Name</div>
                <div class="role">Vendor</div>
            </div>
            <i class="bi bi-chevron-down chevron"></i>

            <!-- Profile dropdown -->
            <div class="profile-dropdown" id="profileDropdown">
                <div class="profile-dropdown-item" onclick="window.location.href='<?php echo $page_url; ?>/vendor/profile'">
                    <i class="bi bi-person"></i> My Profile
                </div>
                <div class="profile-dropdown-item">
                    <i class="bi bi-shop"></i> My Store
                </div>
                <div class="profile-dropdown-item">
                    <i class="bi bi-gear"></i> Settings
                </div>
                <div class="pd-divider"></div>
                <div class="profile-dropdown-item danger logoutLink">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </div>
            </div>
        </div>

    </div>
</header>
<aside id="sidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
        <div class="brand-icon">
            <a href="/admin/dashboard">
                <img src="<?php echo $page_url; ?>/assets/images/logo.svg" alt="Nobility Logo" class="logo">
            </a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        <div class="nav-label">Menu</div>

        <a class="nav-item-link <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/dashboard">
            <i class="bi bi-grid-1x2"></i>
            <span>Dashboard</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'user-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/user-management">
            <i class="bi bi-person-fill-gear"></i>
            <span>User Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'vendor-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/vendor-management">
            <i class="bi bi-person-rolodex"></i>
            <span>Vendor Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'master-catalog') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/master-catalog">
            <i class="bi bi-file-earmark-richtext"></i>
            <span>Master Catalog</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'view-shops') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/view-shops">
            <i class="bi bi-shop"></i>
            <span>View Shops</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'commission-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/commission-management">
           <i class="bi bi-percent"></i>
            <span>Commission Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'payout-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/payout-management">
            <i class="bi bi-cash-coin"></i>
            <span>Payout Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'query-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/query-management">
            <i class="bi bi-database-gear"></i>
            <span>Query Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'analytics') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/admin/analytics">
            <i class="bi bi-clipboard-data-fill"></i>
            <span>Reports & Analytics</span>
        </a>

        <div class="nav-label mt-3">General</div>

        <a class="nav-item-link" href="#">
            <i class="bi bi-gear"></i>
            <span>Settings</span>
        </a>
        <a class="nav-item-link" href="#">
            <i class="bi bi-question-circle"></i>
            <span>Help</span>
        </a>
        <a class="nav-item-link logoutLink" href="#" >
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </nav>
</aside>
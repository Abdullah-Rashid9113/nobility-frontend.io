<aside id="sidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
        <div class="brand-icon">
            <a href="/vendor/dashboard">
                <img src="<?php echo $page_url; ?>/assets/images/logo.svg" alt="Nobility Logo" class="logo">
            </a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        <div class="nav-label">Menu</div>

        <a class="nav-item-link <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/dashboard">
            <i class="bi bi-grid-1x2"></i>
            <span>Dashboard</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'product-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/product-management">
            <i class="bi bi-box-seam"></i>
            <span>Product Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'order-management') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/order-management">
            <i class="bi bi-receipt"></i>
            <span>Order Management</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'payment-tracking') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/payment-tracking">
            <i class="bi bi-credit-card-2-front"></i>
            <span>Payment Tracking</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'manage-bank') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/manage-bank">
            <i class="bi bi-bank2"></i>
            <span>Manage Bank Account</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'chats') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/chats">
            <i class="bi bi-chat-dots"></i>
            <span>My Chats</span>
        </a>
        <a class="nav-item-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>" href="<?php echo $page_url; ?>/vendor/contact">
            <i class="bi bi-headset"></i>
            <span>Contact Us</span>
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
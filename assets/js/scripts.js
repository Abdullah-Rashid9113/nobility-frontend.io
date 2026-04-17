document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll("img, svg").forEach(el => {
        el.setAttribute("draggable", "false");
        el.draggable = false;
    });

    document.addEventListener("dragstart", function (e) {
        e.preventDefault();
    });

});

$(function () {

    // ── Sidebar toggle (desktop collapse / mobile open) ──
    $('#sidebarToggle').on('click', function () {
        const $sb = $('#sidebar');
        if ($(window).width() <= 768) {
            $sb.toggleClass('mobile-open');
        } else {
            $sb.toggleClass('collapsed');
            // persist
            localStorage.setItem('sb-collapsed', $sb.hasClass('collapsed'));
        }
    });

    // Restore collapsed state
    if (localStorage.getItem('sb-collapsed') === 'true') {
        $('#sidebar').addClass('collapsed');
    }

    // Close mobile sidebar on outside click
    $(document).on('click', function (e) {
        if ($(window).width() <= 768) {
            if (!$(e.target).closest('#sidebar, #sidebarToggle').length) {
                $('#sidebar').removeClass('mobile-open');
            }
        }
    });

    $('#themeSwitch').on('change', function () {
        if ($(this).is(':checked')) {
            $('body').addClass('dark-mode');
            localStorage.setItem('theme', 'dark');
        } else {
            $('body').removeClass('dark-mode');
            localStorage.setItem('theme', 'light');
        }
    });

    // Restore theme on page load
    if (localStorage.getItem('theme') === 'dark') {
        $('body').addClass('dark-mode');
        $('#themeSwitch').prop('checked', true);
    } else {
        // Optional: ensure light mode default
        $('#themeSwitch').prop('checked', false);
    }

    // ── Notifications dropdown ──
    $('#notifBtn').on('click', function (e) {
        e.stopPropagation();
        $('#notifDropdown').toggleClass('show');
        $('#profileDropdown').removeClass('show');
    });

    // ── Profile dropdown ──
    $('#profileBtn').on('click', function (e) {
        e.stopPropagation();
        $('#profileDropdown').toggleClass('show');
        $('#notifDropdown').removeClass('show');
    });

    // Close dropdowns on outside click
    $(document).on('click', function () {
        $('#notifDropdown, #profileDropdown').removeClass('show');
    });

    // ── Search clear on Esc ──
    $('#searchInput').on('keydown', function (e) {
        if (e.key === 'Escape') $(this).val('').blur();
    });

});

// Logout Modal
document.addEventListener("DOMContentLoaded", function () {
    const logoutLinks = document.querySelectorAll('.logoutLink');
    const overlay = document.getElementById('logoutOverlay');
    const closeBtn = document.getElementById('logoutCloseBtn');
    const noBtn = document.getElementById('logoutNoBtn');
    const yesBtn = document.getElementById('logoutYesBtn');

    // Function to open modal
    function openConfirmModal() {
        overlay.style.display = 'flex'; 
    }

    function closeConfirmModal() {
        overlay.style.display = 'none';
    }

    function performLogout() {
        window.location.href = '../vendor/?logout=true'; 
    }

    // Event listeners
    logoutLinks.forEach(function (logoutLink) {
        logoutLink.addEventListener('click', function (event) {
            event.preventDefault();  
            openConfirmModal();
        });
    });

    closeBtn.addEventListener('click', closeConfirmModal);
    noBtn.addEventListener('click', closeConfirmModal);
    yesBtn.addEventListener('click', function () {
        performLogout();
        closeConfirmModal();    
    });

    overlay.addEventListener('click', function (event) {
        if (event.target === overlay) {
            closeConfirmModal();
        }
    });
});
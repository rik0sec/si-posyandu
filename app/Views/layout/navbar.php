<!-- Navbar -->
<nav class="navbar-custom">

    <div class="left-navbar">

        <button class="btn-menu" id="toggleSidebar">
            <i class="bi bi-list"></i>
        </button>

        <div class="page-title">

            <h4><?= isset($title) ? $title : 'Dashboard'; ?></h4>

            <small>
                Selamat Datang di Sistem Informasi Posyandu
            </small>

        </div>

    </div>

   <div class="right-navbar">
    <div class="profile-dropdown" id="profileDropdown">
        <div class="profile" id="profileToggle">
            <div class="profile-avatar-icon">
            <i class="bi bi-person-fill"></i>
            </div>
            <div class="profile-info">
                <h6>Administrator</h6>
                <small>Admin Posyandu</small>
            </div>
            <i class="bi bi-chevron-down profile-caret"></i>
        </div>

        <div class="profile-menu" id="profileMenu">
            <a href="<?= base_url('logout'); ?>" class="profile-menu-item logout-item">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>
        </div>
    </div>
</div>

</nav>
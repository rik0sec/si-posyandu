<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-header">
        <div class="logo">
            <img src="<?= base_url('public/assets/img/logo-posyandu1.png'); ?>" alt="Logo">
        </div>
        <div class="logo-text">
            <h5>SI Posyandu</h5>
            <small>Anggrek Mekar</small>
        </div>
    </div>

    <!-- Menu -->
    <ul class="sidebar-menu">
        <li class="menu-title">MENU UTAMA</li>
        <li>
            <a href="<?= base_url('dashboard'); ?>"
               class="<?= (uri_string() == 'dashboard') ? 'active' : ''; ?>">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-title">MASTER DATA</li>
        <li>
            <a href="<?= base_url('balita'); ?>"
               class="<?= (uri_string() == 'balita') ? 'active' : ''; ?>">
                <i class="bi bi-person-heart"></i>
                <span>Data Balita</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('petugas'); ?>"
               class="<?= (uri_string() == 'petugas') ? 'active' : ''; ?>">
                <i class="bi bi-person-badge-fill"></i>
                <span>Data Petugas</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('imunisasi'); ?>"
               class="<?= (uri_string() == 'imunisasi') ? 'active' : ''; ?>">
                <i class="bi bi-shield-plus"></i>
                <span>Data Imunisasi</span>
            </a>
        </li>

        <li class="menu-title">TRANSAKSI</li>
        <li>
            <a href="<?= base_url('penimbangan'); ?>"
               class="<?= (uri_string() == 'penimbangan') ? 'active' : ''; ?>">
                <i class="bi bi-clipboard2-pulse-fill"></i>
                <span>Penimbangan</span>
            </a>
        </li>

        <li class="menu-title">LAPORAN</li>
        <li>
            <a href="<?= base_url('laporan'); ?>"
               class="<?= (uri_string() == 'laporan') ? 'active' : ''; ?>">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
</div>
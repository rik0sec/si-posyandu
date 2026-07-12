<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content p-4">
<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
<div>
<h4 class="mb-1">Selamat datang kembali, Admin 👋</h4>
<small class="text-muted"><?= ucfirst(strftime('%A, %d %B %Y', time())) ?? date('l, d F Y') ?></small>
</div>
</div>

<div class="row g-4">
<div class="col-lg-3">
<div class="stat-card bg-green">
<h6>Balita</h6>
<h2><?= $jumlah_balita ?></h2>
<i class="bi bi-person-heart"></i>
</div>
</div>
<div class="col-lg-3">
<div class="stat-card bg-blue">
<h6>Petugas</h6>
<h2><?= $jumlah_petugas ?></h2>
<i class="bi bi-person-badge-fill"></i>
</div>
</div>
<div class="col-lg-3">
<div class="stat-card bg-purple">
<h6>Imunisasi</h6>
<h2><?= $jumlah_imunisasi ?></h2>
<i class="bi bi-shield-plus"></i>
</div>
</div>
<div class="col-lg-3">
<div class="stat-card bg-orange">
<h6>Penimbangan</h6>
<h2><?= $jumlah_penimbangan ?></h2>
<i class="bi bi-clipboard2-pulse-fill"></i>
</div>
</div>
</div>

<div class="row g-4 mt-1">
<div class="col-lg-7">
<div class="dashboard-card h-100">
<div class="d-flex justify-content-between align-items-center mb-3">
<h5 class="mb-0"><b>Tren Rata-rata Penimbangan</b></h5>
<span class="badge bg-light text-dark border">6 Bulan Terakhir</span>
</div>
<?php if(!empty($chart_penimbangan['labels'])): ?>
<canvas id="chartPenimbangan" height="130"></canvas>
<?php else: ?>
<div class="text-center text-muted py-5">
<i class="bi bi-bar-chart-line" style="font-size:40px;"></i>
<p class="mt-2 mb-0">Belum cukup data untuk menampilkan grafik.</p>
</div>
<?php endif; ?>
</div>
</div>

<div class="col-lg-5">
<div class="dashboard-card h-100">
<h5 class="mb-3"><b>Penimbangan Terbaru</b></h5>
<div class="table-responsive">
<table class="table table-striped align-middle" id="table1">
<thead>
<tr>
<th>Balita</th>
<th>Tanggal</th>
<th>BB</th>
<th>TB</th>
</tr>
</thead>
<tbody>
<?php if(!empty($penimbangan_terbaru)): ?>
<?php foreach($penimbangan_terbaru as $p): ?>
<tr>
<td><?= esc($p->nama_balita ?? '-') ?></td>
<td><?= esc(date('d M Y', strtotime($p->tanggal))) ?></td>
<td><?= esc($p->berat_badan) ?> kg</td>
<td><?= esc($p->tinggi_badan) ?> cm</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr><td colspan="4" class="text-center">Belum ada data.</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php if(!empty($chart_penimbangan['labels'])): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('chartPenimbangan');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode($chart_penimbangan['labels']) ?>,
            datasets: [
                {
                    label: 'Rata-rata Berat Badan (kg)',
                    data: <?= json_encode($chart_penimbangan['bb']) ?>,
                    borderColor: '#4F46E5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    tension: 0.35,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: '#4F46E5',
                    yAxisID: 'y',
                },
                {
                    label: 'Rata-rata Tinggi Badan (cm)',
                    data: <?= json_encode($chart_penimbangan['tb']) ?>,
                    borderColor: '#F59E0B',
                    backgroundColor: 'rgba(245, 158, 11, 0.1)',
                    tension: 0.35,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: '#F59E0B',
                    yAxisID: 'y1',
                }
            ]
        },
        options: {
            responsive: true,
            interaction: { mode: 'index', intersect: false },
            plugins: {
                legend: { position: 'bottom' }
            },
            scales: {
                y: {
                    type: 'linear',
                    position: 'left',
                    title: { display: true, text: 'Berat (kg)' }
                },
                y1: {
                    type: 'linear',
                    position: 'right',
                    grid: { drawOnChartArea: false },
                    title: { display: true, text: 'Tinggi (cm)' }
                }
            }
        }
    });
});
</script>
<?php endif; ?>

<?= $this->include('layout/footer'); ?>
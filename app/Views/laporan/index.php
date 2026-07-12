<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>

<div class="main-content">
<?= $this->include('layout/navbar'); ?>

<div class="content">
<div class="container-fluid">

<div class="mb-3">
    <a href="<?= base_url('laporan/cetak') ?>" target="_blank"
       class="btn btn-danger">
       <i class="bi bi-printer"></i> Cetak Laporan
    </a>
</div>
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Laporan Penimbangan Balita</h4>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped" id="datatable">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Balita</th>
                    <th>Petugas</th>
                    <th>Imunisasi</th>
                    <th>Tanggal</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
            <?php $no=1; foreach($laporan as $l): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($l['nama_balita']) ?></td>
                    <td><?= esc($l['nama_petugas']) ?></td>
                    <td><?= esc($l['nama_imunisasi']) ?></td>
                    <td><?= esc($l['tanggal']) ?></td>
                    <td><?= esc($l['berat_badan']) ?> Kg</td>
                    <td><?= esc($l['tinggi_badan']) ?> Cm</td>
                    <td><?= esc($l['status_gizi']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
    $('#datatable').DataTable({
        responsive:true
    });
});
</script>

<?= $this->include('layout/footer'); ?>
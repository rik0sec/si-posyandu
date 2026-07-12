<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-success text-white"><h4 class="mb-0">Tambah Penimbangan</h4></div>
<div class="card-body">
<form method="post">
<?= csrf_field() ?>
<?= csrf_field() ?>
<div class="row">
<div class="col-md-6 mb-3"><label>Balita</label>
<select name="id_balita" class="form-control" required>
<option value="">-- Pilih Balita --</option>
<?php foreach($balita as $b): ?><option value="<?= $b->id_balita ?>"><?= esc($b->nama_balita) ?></option><?php endforeach; ?>
</select></div>
<div class="col-md-6 mb-3"><label>Petugas</label>
<select name="id_petugas" class="form-control" required>
<option value="">-- Pilih Petugas --</option>
<?php foreach($petugas as $p): ?><option value="<?= $p['id_petugas'] ?>">
<?= esc($p['nama_petugas']) ?></option><?php endforeach; ?>
</select></div>
<div class="col-md-6 mb-3"><label>Imunisasi</label>
<select name="id_imunisasi" class="form-control">
<option value="">-- Tidak Ada --</option>
<?php foreach($imunisasi as $i): ?><option value="<?= $i['id_imunisasi'] ?>"><?= esc($i['nama_imunisasi']) ?></option><?php endforeach; ?>
</select></div>
<div class="col-md-6 mb-3"><label>Tanggal</label><input type="date" name="tanggal" class="form-control" required></div>
<div class="col-md-4 mb-3"><label>Umur (Bulan)</label><input type="number" name="umur_bulan" class="form-control"></div>
<div class="col-md-4 mb-3"><label>Berat Badan (Kg)</label><input type="number" step="0.01" name="berat_badan" class="form-control"></div>
<div class="col-md-4 mb-3"><label>Tinggi Badan (Cm)</label><input type="number" step="0.01" name="tinggi_badan" class="form-control"></div>
<div class="col-md-6 mb-3"><label>Lingkar Kepala (Cm)</label><input type="number" step="0.01" name="lingkar_kepala" class="form-control"></div>
<div class="col-md-6 mb-3"><label>Status Gizi</label>
<select name="status_gizi" class="form-control">
<option>Baik</option><option>Kurang</option><option>Buruk</option><option>Lebih</option>
</select></div>
<div class="col-12 mb-3"><label>Catatan</label><textarea name="catatan" rows="3" class="form-control"></textarea></div>
<div class="col-12">
<button class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
<a href="<?= base_url('penimbangan') ?>" class="btn btn-secondary">Kembali</a>
</div>
</div>
</form>
</div></div>
</div></div>
</div></div>
<?= $this->include('layout/footer'); ?>

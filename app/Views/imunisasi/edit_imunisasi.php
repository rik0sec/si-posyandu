<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-warning"><h4 class="mb-0">Edit Imunisasi</h4></div>
<div class="card-body">
<form method="post">
<div class="mb-3"><label>Nama Imunisasi</label><input type="text" name="nama_imunisasi" class="form-control" value="<?= esc($imunisasi['nama_imunisasi']) ?>" required></div>
<div class="mb-3"><label>Keterangan</label><textarea name="keterangan" class="form-control" rows="4"><?= esc($imunisasi['keterangan']) ?></textarea></div>
<button class="btn btn-warning"><i class="bi bi-pencil"></i> Update</button>
<a href="<?= base_url('imunisasi') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div></div>
</div></div>
</div></div>
<?= $this->include('layout/footer'); ?>

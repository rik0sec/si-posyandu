<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-success text-white"><h4 class="mb-0"><i class="bi bi-person-plus-fill"></i> Tambah Petugas</h4></div>
<div class="card-body">
<form method="post">
<?= csrf_field() ?>
<?= csrf_field() ?>
<div class="row">
<div class="col-md-6 mb-3"><label>Nama Petugas</label><input type="text" name="nama_petugas" class="form-control" required></div>
<div class="col-md-6 mb-3"><label>Jabatan</label><input type="text" name="jabatan" class="form-control" required></div>
<div class="col-md-6 mb-3"><label>No HP</label><input type="text" name="no_hp" class="form-control"></div>
<div class="col-md-6 mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" rows="3"></textarea></div>
</div>
<button class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
<a href="<?= base_url('petugas') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div></div>
</div></div>
</div></div>
<?= $this->include('layout/footer'); ?>

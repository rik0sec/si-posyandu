<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-warning"><h4 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Petugas</h4></div>
<div class="card-body">
<form method="post">
<?= csrf_field() ?>
<div class="row">
<div class="col-md-6 mb-3"><label>Nama Petugas</label><input type="text" name="nama_petugas" class="form-control" value="<?= esc($petugas['nama_petugas']) ?>" required></div>
<div class="col-md-6 mb-3"><label>Jabatan</label><input type="text" name="jabatan" class="form-control" value="<?= esc($petugas['jabatan']) ?>" required></div>
<div class="col-md-6 mb-3"><label>No HP</label><input type="text" name="no_hp" class="form-control" value="<?= esc($petugas['no_hp']) ?>"></div>
<div class="col-md-6 mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" rows="3"><?= esc($petugas['alamat']) ?></textarea></div>
</div>
<button class="btn btn-warning"><i class="bi bi-pencil"></i> Update</button>
<a href="<?= base_url('petugas') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div></div>
</div></div>
</div></div>
<?= $this->include('layout/footer'); ?>

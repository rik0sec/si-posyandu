<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content">
<div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-success text-white">
<h4 class="mb-0"><i class="bi bi-person-plus-fill"></i> Tambah Data Balita</h4>
</div>
<div class="card-body">
<form method="post">
<?= csrf_field() ?>
<?= csrf_field() ?>
<div class="row">
<div class="col-md-6 mb-3">
<label>NIK</label>
<input type="text" name="nik" class="form-control" required>
</div>
<div class="col-md-6 mb-3">
<label>Nama Balita</label>
<input type="text" name="nama_balita" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Jenis Kelamin</label>
<select name="jenis_kelamin" class="form-select" required>
<option value="">-- Pilih --</option>
<option value="L">Laki-laki</option>
<option value="P">Perempuan</option>
</select>
</div>
<div class="col-md-6 mb-3">
<label>Tanggal Lahir</label>
<input type="date" name="tanggal_lahir" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Nama Ibu</label>
<input type="text" name="nama_ibu" class="form-control" required>
</div>
<div class="col-md-6 mb-3">
<label>Nama Ayah</label>
<input type="text" name="nama_ayah" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Alamat</label>
<textarea name="alamat" rows="3" class="form-control" required></textarea>
</div>
<div class="col-md-6 mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control">
</div>
</div>
<button class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
<a href="<?= base_url('balita') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?= $this->include('layout/footer'); ?>

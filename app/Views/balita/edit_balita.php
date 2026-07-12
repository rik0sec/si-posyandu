<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content">
<div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-warning">
<h4 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Data Balita</h4>
</div>
<div class="card-body">
<form method="post">
<?= csrf_field() ?>
<?= csrf_field() ?>
<div class="row">
<div class="col-md-6 mb-3">
<label>NIK</label>
<input type="text" name="nik" class="form-control" value="<?= esc($balita->nik) ?>" required>
</div>
<div class="col-md-6 mb-3">
<label>Nama Balita</label>
<input type="text" name="nama_balita" class="form-control" value="<?= esc($balita->nama_balita) ?>" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Jenis Kelamin</label>
<select name="jenis_kelamin" class="form-select" required>
<option value="L" <?= $balita->jenis_kelamin=="L" ? "selected" : "" ?>>Laki-laki</option>
<option value="P" <?= $balita->jenis_kelamin=="P" ? "selected" : "" ?>>Perempuan</option>
</select>
</div>
<div class="col-md-6 mb-3">
<label>Tanggal Lahir</label>
<input type="date" name="tanggal_lahir" class="form-control" value="<?= esc($balita->tanggal_lahir) ?>" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Nama Ibu</label>
<input type="text" name="nama_ibu" class="form-control" value="<?= esc($balita->nama_ibu) ?>" required>
</div>
<div class="col-md-6 mb-3">
<label>Nama Ayah</label>
<input type="text" name="nama_ayah" class="form-control" value="<?= esc($balita->nama_ayah) ?>" required>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label>Alamat</label>
<textarea name="alamat" rows="3" class="form-control" required><?= esc($balita->alamat) ?></textarea>
</div>
<div class="col-md-6 mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" value="<?= esc($balita->no_hp) ?>">
</div>
</div>
<button class="btn btn-warning"><i class="bi bi-pencil"></i> Update</button>
<a href="<?= base_url('balita') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?= $this->include('layout/footer'); ?>

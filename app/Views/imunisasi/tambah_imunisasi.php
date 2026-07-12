<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="card shadow border-0">
<div class="card-header bg-success text-white"><h4 class="mb-0">Tambah Imunisasi</h4></div>
<div class="card-body">
<form action="<?= base_url('imunisasi/tambah') ?>" method="post">
    <?= csrf_field() ?> 
    
    <div class="mb-3">
        <label>Nama Imunisasi</label>
        <input type="text" name="nama_imunisasi" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-success">
    <i class="bi bi-save"></i> Simpan
</button>
    <a href="<?= base_url('imunisasi') ?>" class="btn btn-secondary">Kembali</a>
</form>
</div></div>
</div></div>
</div></div>
<?= $this->include('layout/footer'); ?>

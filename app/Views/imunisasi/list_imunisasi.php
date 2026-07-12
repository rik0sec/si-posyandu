<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="d-flex justify-content-between mb-4">
<h3><i class="bi bi-shield-plus"></i> Data Imunisasi</h3>
<a href="<?= base_url('imunisasi/tambah') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Imunisasi</a>
</div>
<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show"><?= session()->getFlashdata('success') ?><button class="btn-close" data-bs-dismiss="alert"></button></div>
<?php endif; ?>
<div class="card shadow">
<div class="card-header bg-primary text-white">Data Imunisasi</div>
<div class="card-body">
<table class="table table-bordered table-striped" id="datatable">
<thead><tr><th>No</th><th>Nama Imunisasi</th><th>Keterangan</th><th>Aksi</th></tr></thead>
<tbody>
<?php $no=1; foreach($imunisasi as $i): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= esc($i['nama_imunisasi']) ?></td>
<td><?= esc($i['keterangan']) ?></td>
<td>
<a href="<?= base_url('imunisasi/edit/'.$i['id_imunisasi']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
<a onclick="return confirm('Hapus data?')" href="<?= base_url('imunisasi/delete/'.$i['id_imunisasi']) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div></div>
</div></div>
</div></div>
<script>$(document).ready(function(){ $('#datatable').DataTable({responsive:true}); });</script>
<?= $this->include('layout/footer'); ?>

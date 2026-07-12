<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">
<div class="d-flex justify-content-between mb-4">
<h3><i class="bi bi-person-badge-fill"></i> Data Petugas</h3>
<a href="<?= base_url('petugas/tambah') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Petugas</a>
</div>
<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show"><?= session()->getFlashdata('success') ?><button class="btn-close" data-bs-dismiss="alert"></button></div>
<?php endif; ?>
<div class="card shadow">
<div class="card-header bg-primary text-white">Data Petugas</div>
<div class="card-body">
<table class="table table-bordered table-striped" id="datatable">
<thead><tr><th>No</th><th>Nama Petugas</th><th>Jabatan</th><th>No HP</th><th>Alamat</th><th>Aksi</th></tr></thead>
<tbody>
<?php $no=1; foreach($petugas as $row): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= esc($row['nama_petugas']) ?></td>
<td><?= esc($row['jabatan']) ?></td>
<td><?= esc($row['no_hp']) ?></td>
<td><?= esc($row['alamat']) ?></td>
<td>
<a href="<?= base_url('petugas/edit/'.$row['id_petugas']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
<a onclick="return confirm('Yakin hapus?')" href="<?= base_url('petugas/delete/'.$row['id_petugas']) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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

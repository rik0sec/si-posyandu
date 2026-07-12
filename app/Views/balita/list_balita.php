<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content">
<div class="container-fluid">
<div class="row mb-3">
<div class="col-md-6"><h3><i class="fas fa-baby"></i> Data Balita</h3></div>
<div class="col-md-6 text-end">
<a href="<?= base_url('balita/tambah'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Balita</a>
</div>
</div>
<?php if(session()->getFlashdata('success')) : ?>
<div class="alert alert-success alert-dismissible fade show">
<?= session()->getFlashdata('success'); ?>
<button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>
<div class="card shadow">
<div class="card-header bg-primary text-white">Data Balita</div>
<div class="card-body">
<table class="table table-bordered table-striped" id="datatable">
<thead><tr>
<th>No</th><th>NIK</th><th>Nama Balita</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Nama Ibu</th><th>No HP</th><th>Aksi</th>
</tr></thead>
<tbody>
<?php $no=1; foreach($balita as $b): ?>
<tr>
<td><?= $no++; ?></td>
<td><?= esc($b->nik); ?></td>
<td><?= esc($b->nama_balita); ?></td>
<td><?= esc($b->jenis_kelamin); ?></td>
<td><?= date('d-m-Y', strtotime($b->tanggal_lahir)); ?></td>
<td><?= esc($b->nama_ibu); ?></td>
<td><?= esc($b->no_hp); ?></td>
<td>
<a href="<?= base_url('balita/edit/'.$b->id_balita); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
<a href="<?= base_url('balita/delete/'.$b->id_balita); ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
</td>
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
<script>$(document).ready(function(){ $('#datatable').DataTable({responsive:true}); });</script>
<?= $this->include('layout/footer'); ?>

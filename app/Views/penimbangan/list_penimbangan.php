<?= $this->include('layout/header'); ?>
<div class="wrapper">
<?= $this->include('layout/sidebar'); ?>
<div class="main-content">
<?= $this->include('layout/navbar'); ?>
<div class="content"><div class="container-fluid">

<div class="d-flex justify-content-between mb-4">
<h3><i class="bi bi-clipboard2-pulse-fill"></i> Data Penimbangan</h3>
<a href="<?= base_url('penimbangan/tambah') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Penimbangan</a>
</div>

<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show"><?= session()->getFlashdata('success') ?><button class="btn-close" data-bs-dismiss="alert"></button></div>
<?php endif; ?>

<div class="card shadow">
<div class="card-header bg-primary text-white">Data Penimbangan</div>
<div class="card-body">
<table class="table table-bordered table-striped" id="datatable">
<thead><tr><th>No</th><th>Balita</th><th>Petugas</th><th>Imunisasi</th><th>Tanggal</th><th>BB</th><th>TB</th><th>Status</th><th>Aksi</th></tr></thead>
<tbody>
<?php $no=1; foreach($penimbangan as $row): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= esc($row->nama_balita) ?></td>
<td><?= esc($row->nama_petugas) ?></td>
<td><?= esc($row->nama_imunisasi ?? '-') ?></td>
<td><?= esc($row->tanggal) ?></td>
<td><?= esc($row->berat_badan) ?> Kg</td>
<td><?= esc($row->tinggi_badan) ?> Cm</td>
<td><?php
$badge="success";
if($row->status_gizi=="Kurang") $badge="warning";
if($row->status_gizi=="Buruk") $badge="danger";
if($row->status_gizi=="Lebih") $badge="primary";
?><span class="badge bg-<?= $badge ?>"><?= esc($row->status_gizi) ?></span></td>
<td>
<a href="<?= base_url('penimbangan/edit/'.$row->id_penimbangan) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
<a onclick="return confirm('Hapus?')" href="<?= base_url('penimbangan/delete/'.$row->id_penimbangan) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
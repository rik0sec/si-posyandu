<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Cetak Laporan Penimbangan - Posyandu Anggrek Mekar</title>
<style>
    * { box-sizing: border-box; }
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
        padding: 40px 50px;
        color: #1a1a1a;
        background: #f4f5f7;
    }
    .page {
        background: #fff;
        max-width: 950px;
        margin: 0 auto;
        padding: 45px 55px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        border-radius: 6px;
    }

    /* ==== Toolbar (hilang saat print) ==== */
    .toolbar {
        max-width: 950px;
        margin: 0 auto 20px auto;
        display: flex;
        gap: 10px;
    }
    .btn {
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: 0.15s;
    }
    .btn-print { background: #2563eb; color: #fff; }
    .btn-print:hover { background: #1d4ed8; }
    .btn-back { background: #e5e7eb; color: #374151; }
    .btn-back:hover { background: #d1d5db; }

    /* ==== Kop Surat ==== */
    .kop {
        display: flex;
        align-items: center;
        gap: 18px;
        border-bottom: 3px solid #2563eb;
        padding-bottom: 18px;
        margin-bottom: 4px;
    }
    .kop .logo {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: #2563eb;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 20px;
        flex-shrink: 0;
    }
    .kop h1 {
        margin: 0;
        font-size: 20px;
        letter-spacing: 0.5px;
        color: #111827;
    }
    .kop p {
        margin: 2px 0 0 0;
        font-size: 13px;
        color: #6b7280;
    }

    .judul-laporan {
        text-align: center;
        margin: 22px 0 4px 0;
    }
    .judul-laporan h2 {
        margin: 0;
        font-size: 17px;
        text-decoration: underline;
        text-underline-offset: 4px;
        letter-spacing: 0.5px;
    }

    .meta-info {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        color: #374151;
        margin: 22px 0 14px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        margin-top: 6px;
    }
    thead th {
        background: #111827;
        color: #fff;
        padding: 10px 8px;
        text-align: left;
        font-weight: 600;
    }
    tbody td {
        padding: 9px 8px;
        border-bottom: 1px solid #e5e7eb;
    }
    tbody tr:nth-child(even) { background: #f9fafb; }

    .status {
        display: inline-block;
        padding: 3px 10px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 700;
    }
    .status-baik { background: #defcdc; color: #0d6a1e; }
    .status-lebih { background: #c3ddfe; color: #0e3877; }
    .status-buruk { background: #fee2e2; color: #991b1b; }
    .status-kurang { background: #f4f2c1; color: #716c14; }

    .footer-tanda-tangan {
        display: flex;
        justify-content: space-between;
        margin-top: 70px;
        font-size: 13px;
        text-align: center;
    }
    .footer-tanda-tangan .kolom { width: 240px; }
    .footer-tanda-tangan .garis {
        margin-top: 70px;
        border-top: 1px solid #374151;
        padding-top: 4px;
    }

    .footer-note {
        margin-top: 40px;
        font-size: 11px;
        color: #9ca3af;
        text-align: center;
        border-top: 1px dashed #e5e7eb;
        padding-top: 10px;
    }

    @media print {
        body { background: #fff; padding: 0; }
        .toolbar { display: none; }
        .page { box-shadow: none; padding: 0; }
    }
</style>
</head>
<body>

    <div class="toolbar no-print">
        <a href="<?= base_url('laporan') ?>" class="btn btn-back">&#8592; Kembali</a>
        <button class="btn btn-print" onclick="window.print()">&#128424; Cetak Sekarang</button>
    </div>

    <div class="page">
        <div class="kop">
            <div class="logo">PA</div>
            <div>
                <h1>POSYANDU ANGGREK MEKAR</h1>
                <p>Jl.Kotabumi Tengah &nbsp;|&nbsp; Telp. 0878-1593-5843</p>
            </div>
        </div>

        <div class="judul-laporan">
            <h2>LAPORAN PENIMBANGAN BALITA</h2>
        </div>

        <div class="meta-info">
            <span>Tanggal Cetak: <strong><?= date('d-m-Y') ?></strong></span>
            <span>Total Data: <strong><?= count($laporan) ?> Balita</strong></span>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Balita</th>
                    <th>Petugas</th>
                    <th>Imunisasi</th>
                    <th>Tanggal</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($laporan as $l): ?>
                <?php
                    $statusClass = 'status-baik';
                    if (strtolower($l['status_gizi']) === 'lebih') $statusClass = 'status-lebih';
                    if (strtolower($l['status_gizi']) === 'buruk') $statusClass = 'status-buruk';
                    if (strtolower($l['status_gizi']) === 'kurang') $statusClass = 'status-kurang';
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $l['nama_balita'] ?></td>
                    <td><?= $l['nama_petugas'] ?></td>
                    <td><?= $l['nama_imunisasi'] ?></td>
                    <td><?= $l['tanggal'] ?></td>
                    <td><?= $l['berat_badan'] ?> Kg</td>
                    <td><?= $l['tinggi_badan'] ?> Cm</td>
                    <td><span class="status <?= $statusClass ?>"><?= $l['status_gizi'] ?></span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="footer-tanda-tangan">
            <div class="kolom">
                <div>Mengetahui,</div>
                <div>Admin Posyandu</div>
                <div class="garis"><?= isset($nama_admin) ? $nama_admin : 'Administrator' ?></div>
            </div>
            <div class="kolom">
                <div>Petugas</div>
                <div>&nbsp;</div>
                <div class="garis">(...........................)</div>
            </div>
        </div>

        <div class="footer-note">
            Dokumen ini dicetak otomatis oleh Sistem Informasi Posyandu Anggrek Mekar
        </div>
    </div>

</body>
</html>
<?php

namespace App\Controllers;

use App\Models\M_penimbangan;

class Laporan extends BaseController
{
    protected $mPenimbangan;

    public function __construct()
    {
        $this->mPenimbangan = new M_penimbangan();
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan Penimbangan',
            'laporan' => $this->mPenimbangan->laporan()
        ];

        return view('laporan/index', $data);
    }

    public function cetak()
{
    $data = [
        'laporan' => $this->mPenimbangan->laporan()
    ];

    return view('laporan/cetak', $data);
}
}
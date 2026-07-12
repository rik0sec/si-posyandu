<?php

namespace App\Controllers;

use App\Models\M_penimbangan;
use App\Models\M_balita;
use App\Models\M_petugas;
use App\Models\M_imunisasi;

class Penimbangan extends BaseController
{
    protected $mpenimbangan;
    protected $mbalita;
    protected $mpetugas;
    protected $mimunisasi;

    public function __construct()
    {
        $this->mpenimbangan = new M_penimbangan();
        $this->mbalita = new M_balita();
        $this->mpetugas = new M_petugas();
        $this->mimunisasi = new M_imunisasi();
    }

    public function index()
    {
        $data['penimbangan'] = $this->mpenimbangan->list_all();

        return view('penimbangan/list_penimbangan', $data);
    }

    public function tambah()
    {
        if ($_POST) {

            $dataPost = [
                "id_balita" => $this->request->getVar("id_balita"),
                "id_petugas" => $this->request->getVar("id_petugas"),
                "id_imunisasi" => $this->request->getVar("id_imunisasi"),
                "tanggal" => $this->request->getVar("tanggal"),
                "umur_bulan" => $this->request->getVar("umur_bulan"),
                "berat_badan" => $this->request->getVar("berat_badan"),
                "tinggi_badan" => $this->request->getVar("tinggi_badan"),
                "lingkar_kepala" => $this->request->getVar("lingkar_kepala"),
                "status_gizi" => $this->request->getVar("status_gizi"),
                "catatan" => $this->request->getVar("catatan")
            ];

            $this->mpenimbangan->add($dataPost);

            return redirect()->to(base_url('penimbangan'));
        }

        $data['balita'] = $this->mbalita->list_all();
        $data['petugas'] = $this->mpetugas->list_all();
        $data['imunisasi'] = $this->mimunisasi->list_all();

        return view('penimbangan/tambah_penimbangan', $data);
    }

    public function edit($id)
    {
        if ($_POST) {

            $this->mpenimbangan->updateData(
                $id,
                $this->request->getVar("id_balita"),
                $this->request->getVar("id_petugas"),
                $this->request->getVar("id_imunisasi"),
                $this->request->getVar("tanggal"),
                $this->request->getVar("umur_bulan"),
                $this->request->getVar("berat_badan"),
                $this->request->getVar("tinggi_badan"),
                $this->request->getVar("lingkar_kepala"),
                $this->request->getVar("status_gizi"),
                $this->request->getVar("catatan")
            );

            return redirect()->to(base_url('penimbangan'));
        }

        $data['penimbangan'] = $this->mpenimbangan->getData($id);

        $data['balita'] = $this->mbalita->list_all();
        $data['petugas'] = $this->mpetugas->list_all();
        $data['imunisasi'] = $this->mimunisasi->list_all();

        return view('penimbangan/edit_penimbangan', $data);
    }

    public function delete($id)
    {
        $this->mpenimbangan->deleteData($id);

        return redirect()->to(base_url('penimbangan'));
    }
}
<?php

namespace App\Controllers;

use App\Models\M_imunisasi;

class Imunisasi extends BaseController
{
    protected $mImunisasi;

    public function __construct()
    {
        $this->mImunisasi = new M_imunisasi();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Imunisasi',
            'imunisasi' => $this->mImunisasi->list_all()
        ];

        return view('imunisasi/list_imunisasi',$data);
    }

   public function tambah()
{
    if (!empty($_POST)) {

        $data = [
            'nama_imunisasi' => $this->request->getPost('nama_imunisasi'),
            'keterangan'     => $this->request->getPost('keterangan')
        ];

        $this->mImunisasi->insert($data);

        session()->setFlashdata('success', 'Data imunisasi berhasil ditambahkan.');

        return redirect()->to(base_url('imunisasi'));
    }

    return view('imunisasi/tambah_imunisasi');
}

    public function edit($id)
{
    if(strtolower($this->request->getMethod()) == 'post'){
        $this->mImunisasi->update($id,[
            'nama_imunisasi'=>$this->request->getPost('nama_imunisasi'),
            'keterangan'=>$this->request->getPost('keterangan')
        ]);
        session()->setFlashdata('success', 'Data imunisasi berhasil diupdate.');
        return redirect()->to(base_url('imunisasi'));
    }
    $data['imunisasi']=$this->mImunisasi->find($id);
    return view('imunisasi/edit_imunisasi',$data);
}

    public function delete($id)
    {
        $this->mImunisasi->delete($id);

        return redirect()->to(base_url('imunisasi'));
    }
}
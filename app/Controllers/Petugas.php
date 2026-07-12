<?php
namespace App\Controllers;
use App\Models\M_petugas;

class Petugas extends BaseController
{
    protected $petugasModel;

    public function __construct()
    {
        $this->petugasModel = new M_petugas();
    }

    public function index()
    {
        $data = ['title' => 'Data Petugas', 'petugas' => $this->petugasModel->list_all()];
        return view('petugas/list_petugas', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Petugas';
        if ($this->request->getMethod() == 'POST') {
            $post = $this->request->getPost();
            $this->petugasModel->add([
                'nama_petugas' => $post['nama_petugas'],
                'jabatan'      => $post['jabatan'],
                'no_hp'        => $post['no_hp'],
                'alamat'       => $post['alamat'],
            ]);
            session()->setFlashdata('success', 'Data petugas berhasil ditambahkan.');
            return redirect()->to(base_url('petugas'));
        }
        return view('petugas/tambah_petugas', $data);
    }

    public function edit($id)
    {
        $data['title']   = 'Edit Petugas';
        $data['petugas'] = $this->petugasModel->getData($id);
        if ($this->request->getMethod() == 'POST') {
            $post = $this->request->getPost();
            $this->petugasModel->updateData($id, [
                'nama_petugas' => $post['nama_petugas'],
                'jabatan'      => $post['jabatan'],
                'no_hp'        => $post['no_hp'],
                'alamat'       => $post['alamat'],
            ]);
            session()->setFlashdata('success', 'Data petugas berhasil diupdate.');
            return redirect()->to(base_url('petugas'));
        }
        return view('petugas/edit_petugas', $data);
    }

    public function delete($id)
    {
        $this->petugasModel->deleteData($id);
        session()->setFlashdata('success', 'Data petugas berhasil dihapus.');
        return redirect()->to(base_url('petugas'));
    }
}

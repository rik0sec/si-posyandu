<?php
namespace App\Controllers;
use App\Models\M_balita;

class Balita extends BaseController
{
    protected $balitaModel;

    public function __construct()
    {
        $this->balitaModel = new M_balita();
    }

    public function index()
    {
        $data = [
            'title'  => 'Data Balita',
            'balita' => $this->balitaModel->list_all(),
        ];
        return view('balita/list_balita', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Balita';
        if ($this->request->getMethod() == 'POST') {
            $post = $this->request->getPost();
            $d = [
                'nik'           => $post['nik'],
                'nama_balita'   => $post['nama_balita'],
                'jenis_kelamin' => $post['jenis_kelamin'],
                'tanggal_lahir' => $post['tanggal_lahir'],
                'nama_ibu'      => $post['nama_ibu'],
                'nama_ayah'     => $post['nama_ayah'],
                'alamat'        => $post['alamat'],
                'no_hp'         => $post['no_hp'],
            ];
            $result = $this->balitaModel->add($d);
            if ($result == 'success') {
                session()->setFlashdata('success', 'Data balita berhasil ditambahkan.');
            } else {
                session()->setFlashdata('error', 'Gagal menambahkan data.');
            }
            return redirect()->to(base_url('balita'));
        }
        return view('balita/tambah_balita', $data);
    }

    public function edit($id)
    {
        $data['title']  = 'Edit Balita';
        $data['balita'] = $this->balitaModel->getData($id);
        if ($this->request->getMethod() == 'POST') {
            $post = $this->request->getPost();
            $result = $this->balitaModel->updateData(
                $id,
                $post['nik'],
                $post['nama_balita'],
                $post['jenis_kelamin'],
                $post['tanggal_lahir'],
                $post['nama_ibu'],
                $post['nama_ayah'],
                $post['alamat'],
                $post['no_hp']
            );
            if ($result == 'success') {
                session()->setFlashdata('success', 'Data balita berhasil diupdate.');
            } else {
                session()->setFlashdata('error', 'Gagal mengupdate data.');
            }
            return redirect()->to(base_url('balita'));
        }
        return view('balita/edit_balita', $data);
    }

    public function delete($id)
    {
        $result = $this->balitaModel->deleteData($id);
        if ($result == 'success') {
            session()->setFlashdata('success', 'Data balita berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data.');
        }
        return redirect()->to(base_url('balita'));
    }

    public function detail($id)
    {
        $data['title']  = 'Detail Balita';
        $data['balita'] = $this->balitaModel->getData($id);
        return view('balita/detail_balita', $data);
    }
}

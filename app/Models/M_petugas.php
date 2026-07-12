<?php
namespace App\Models;
use CodeIgniter\Model;
class M_petugas extends Model
{
    protected $table      = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $allowedFields = ['nama_petugas','jabatan','no_hp','alamat'];

    public function list_all()
    {
        return $this->orderBy('nama_petugas','ASC')->findAll();
    }
    public function add($data)       { return $this->insert($data); }
    public function getData($id)     { return $this->find($id); }
    public function updateData($id,$data) { return $this->update($id,$data); }
    public function deleteData($id)  { return $this->delete($id); }
}

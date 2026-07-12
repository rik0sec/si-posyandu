<?php
namespace App\Models;
use CodeIgniter\Model;

class M_imunisasi extends Model
{
    protected $table = 'imunisasi';
    protected $primaryKey = 'id_imunisasi';

    protected $useTimestamps = false;

    protected $allowedFields = [
        'nama_imunisasi',
        'keterangan'
    ];

    public function list_all()
    {
        return $this->orderBy('nama_imunisasi', 'ASC')->findAll();
    }
}
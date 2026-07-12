<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $returnType = 'array';

    protected $allowedFields = [
        'username',
        'password',
        'nama_lengkap',
        'role'
    ];

    public function findByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
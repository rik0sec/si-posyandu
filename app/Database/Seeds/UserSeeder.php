<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'    => 'admin',
                'password'    => password_hash('admin123', PASSWORD_DEFAULT),
                'nama_lengkap'=> 'Administrator',
                'role'        => 'admin',
            ],
            [
                'username'    => 'petugas1',
                'password'    => password_hash('petugas123', PASSWORD_DEFAULT),
                'nama_lengkap'=> 'Petugas Posyandu 1',
                'role'        => 'petugas',
            ],
            [
                'username'    => 'petugas2',
                'password'    => password_hash('petugas123', PASSWORD_DEFAULT),
                'nama_lengkap'=> 'Petugas Posyandu 2',
                'role'        => 'petugas',
            ],
            [
                'username'    => 'petugas3',
                'password'    => password_hash('petugas123', PASSWORD_DEFAULT),
                'nama_lengkap'=> 'Petugas Posyandu 3',
                'role'        => 'petugas',
            ],
            [
                'username'    => 'petugas4',
                'password'    => password_hash('petugas123', PASSWORD_DEFAULT),
                'nama_lengkap'=> 'Petugas Posyandu 4',
                'role'        => 'petugas',
            ],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_petugas' => 'Siti Aisyah',
                'jabatan'      => 'Kepala Posyandu',
                'no_hp'        => '081234567801',
                'alamat'       => 'Jl. Merdeka No. 1, Jakarta',
            ],
            [
                'nama_petugas' => 'Rina Wulandari',
                'jabatan'      => 'Bidan',
                'no_hp'        => '081234567802',
                'alamat'       => 'Jl. Sudirman No. 2, Jakarta',
            ],
            [
                'nama_petugas' => 'Dewi Safitri',
                'jabatan'      => 'Perawat',
                'no_hp'        => '081234567803',
                'alamat'       => 'Jl. Gatot Subroto No. 3, Jakarta',
            ],
            [
                'nama_petugas' => 'Fitri Handayani',
                'jabatan'      => 'Kader',
                'no_hp'        => '081234567804',
                'alamat'       => 'Jl. Diponegoro No. 4, Jakarta',
            ],
            [
                'nama_petugas' => 'Nina Marina',
                'jabatan'      => 'Kader',
                'no_hp'        => '081234567805',
                'alamat'       => 'Jl. Thamrin No. 5, Jakarta',
            ],
        ];

        $this->db->table('petugas')->insertBatch($data);
    }
}
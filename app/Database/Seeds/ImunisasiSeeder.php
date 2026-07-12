<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ImunisasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_imunisasi' => 'HB',
                'keterangan'      => 'Hepatitis B',
            ],
            [
                'nama_imunisasi' => 'BCG',
                'keterangan'      => 'Bacillus Calmette-Guérin',
            ],
            [
                'nama_imunisasi' => 'Polio',
                'keterangan'      => 'Imunisasi Polio',
            ],
            [
                'nama_imunisasi' => 'DTP',
                'keterangan'      => 'Difteri, Tetanus, Pertussis',
            ],
            [
                'nama_imunisasi' => 'Campak',
                'keterangan'      => 'Mata Campak',
            ],
            [
                'nama_imunisasi' => 'MMR',
                'keterangan'      => 'Measles, Mumps, Rubella',
            ],
            [
                'nama_imunisasi' => 'Dengue',
                'keterangan'      => 'Demam Berdarah Dengue',
            ],
            [
                'nama_imunisasi' => 'Japanese Encephalitis',
                'keterangan'      => 'Encephalitis Jepang',
            ],
        ];

        $this->db->table('imunisasi')->insertBatch($data);
    }
}
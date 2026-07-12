<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BalitaSeeder extends Seeder
{
    public function run()
    {
        $namaBalita = [
            'Andi', 'Budi', 'Citra', 'Dewi', 'Eka',
            'Fajar', 'Gita', 'Hendra', 'Indah', 'Jaka',
            'Kiki', 'Lina', 'Mira', 'Nanda', 'Oliv',
            'Putu', 'Qori', 'Rani', 'Siti', 'Toni',
            'Umar', 'Vera', 'Wawan', 'Xena', 'Yani', 'Zaki'
        ];
        
        $namaIbu = ['Ibu Ana', 'Ibu Bella', 'Ibu Cinta', 'Ibu Dila', 'Ibu Ela', 'Ibu Fani', 'Ibu Gina', 'Ibu Hani', 'Ibu Ira', 'Ibu Jini'];
        $namaAyah = ['Bapak Ahmad', 'Bapak Bachtiar', 'Bapak Charles', 'Bapak Deni', 'Bapak Erwin', 'Bapak Ferry', 'Bapak Gus', 'Bapak Hendra', 'Bapak Iqbal', 'Bapak Jaya'];

        $data = [];
        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'nik'          => '320101' . str_pad($i, 6, '0', STR_PAD_LEFT),
                'nama_balita'  => $namaBalita[$i-1],
                'jenis_kelamin'=> $i % 2 == 0 ? 'L' : 'P',
                'tanggal_lahir'=> date('Y-m-d', strtotime('-' . rand(6, 60) . ' months')),
                'nama_ibu'     => $namaIbu[($i-1) % 10],
                'nama_ayah'    => $namaAyah[($i-1) % 10],
                'alamat'       => 'Jl. Contoh No. ' . $i . ', Jakarta',
                'no_hp'        => '0812' . rand(10000000, 99999999),
            ];
        }

        $this->db->table('balita')->insertBatch($data);
    }
}
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenimbanganSeeder extends Seeder
{
    public function run()
    {
        $statusGizi = ['normal', 'normal', 'normal', 'kurang', 'lebih'];
        
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'id_balita'     => rand(1, 20),
                'id_petugas'    => rand(1, 5),
                'id_imunisasi'  => rand(1, 8),
                'tanggal'       => date('Y-m-d', strtotime('-' . rand(1, 30) . ' days')),
                'umur_bulan'    => rand(6, 60),
                'berat_badan'   => rand(6, 25) . '.' . rand(0, 9),
                'tinggi_badan'  => rand(60, 120) . '.' . rand(0, 9),
                'lingkar_kepala' => rand(40, 55) . '.' . rand(0, 9),
                'status_gizi'   => $statusGizi[rand(0, 4)],
                'catatan'       => 'Catatan pemeriksaan ' . $i,
            ];
        }

        $this->db->table('penimbangan')->insertBatch($data);
    }
}
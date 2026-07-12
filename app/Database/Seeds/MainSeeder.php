<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\Database\Seeds\UserSeeder');
        $this->call('App\Database\Seeds\PetugasSeeder');
        $this->call('App\Database\Seeds\ImunisasiSeeder');
        $this->call('App\Database\Seeds\BalitaSeeder');
        $this->call('App\Database\Seeds\PenimbanganSeeder');
    }
}
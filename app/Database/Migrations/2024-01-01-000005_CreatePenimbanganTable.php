<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;

class CreatePenimbanganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penimbangan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_balita' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_petugas' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_imunisasi' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'umur_bulan' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'berat_badan' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'tinggi_badan' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'lingkar_kepala' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'status_gizi' => [
                'type'       => 'ENUM',
                'constraint' => ['normal', 'kurang', 'lebih', 'stunting'],
                'default'    => 'normal',
            ],
            'catatan' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_penimbangan', true);
        $this->forge->addForeignKey('id_balita', 'balita', 'id_balita', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_petugas', 'petugas', 'id_petugas', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_imunisasi', 'imunisasi', 'id_imunisasi', 'CASCADE', 'CASCADE');
        $this->forge->createTable('penimbangan');
    }

    public function down()
    {
        $this->forge->dropTable('penimbangan');
    }
}
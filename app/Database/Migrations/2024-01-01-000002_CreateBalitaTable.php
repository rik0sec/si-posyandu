<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;

class CreateBalitaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_balita' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nama_balita' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
            ],
            'nama_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->addKey('id_balita', true);
        $this->forge->addUniqueKey('nik');
        $this->forge->createTable('balita');
    }

    public function down()
    {
        $this->forge->dropTable('balita');
    }
}
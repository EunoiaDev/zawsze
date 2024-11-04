<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aktiva extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akun' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'grup_akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
            ],
            'kode_akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'nama_akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'grup_laporan' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
            ],
            'saldo_awal_debet' => [
                'type'       => 'DECIMAL',
                'constraint' => 15,
                2,
            ],
            'saldo_awal_kredit' => [
                'type'       => 'DECIMAL',
                'constraint' => 15,
                2,
            ],
            'grup_arus_kas' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
            ],


        ]);
        $this->forge->addKey('id_akun', true);
        $this->forge->createTable('akunaktiva');
    }

    public function down()
    {
        $this->forge->dropTable('akunaktiva');
    }
}

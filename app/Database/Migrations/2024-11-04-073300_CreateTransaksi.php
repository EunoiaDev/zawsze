<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_bundle' => [
                'type'       => 'VARCHAR',
                'constraint' => 4,
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null' => true,
            ],
            'deskripsi' => [
                'type'       => 'TEXT',

            ],
            'debit' => [
                'type'       => 'FLOAT',
                'constraint' => 12,

            ],
            'kredit' => [
                'type'       => 'FLOAT',
                'constraint' => 12,

            ],
            'PIC' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],


            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('tbl_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_transaksi');
    }
}

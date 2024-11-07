<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilai' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'            => false, // Ensure this column cannot be NULL
            ],
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'            => false, // Ensure this column cannot be NULL
            ],
            'kode_akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
                'null'        => false, // Ensure this column cannot be NULL
            ],
            'nama_akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'        => false, // Ensure this column cannot be NULL
            ],
            'debit' => [
                'type'       => 'FLOAT',
                'constraint' => '12,2',
                'null'        => true, // Allow this column to be NULL
            ],
            'kredit' => [
                'type'       => 'FLOAT',
                'constraint' => '12,2',
                'null'        => true, // Allow this column to be NULL
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'        => true, // Allow this column to be NULL
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true, // Allow NULL for datetime fields
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true, // Allow NULL for datetime fields
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true, // Allow NULL for datetime fields
            ],
        ]);

        $this->forge->addKey('id_nilai', true);
        $this->forge->addForeignKey('id_transaksi', 'tbl_transaksi', 'id_transaksi');
        $this->forge->createTable('tbl_nilai');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tbl_nilai', 'tbl_nilai_id_transaksi_foreign');
        $this->forge->dropTable('tbl_nilai');
    }
}

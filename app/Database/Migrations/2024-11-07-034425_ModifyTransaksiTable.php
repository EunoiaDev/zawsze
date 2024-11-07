<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyTransaksiTable extends Migration
{
    public function up()
    {
        // Mengubah struktur tabel tbl_transaksi
        $this->forge->dropColumn('tbl_transaksi', 'kwitansi'); // Hapus kolom yang tidak diperlukan
        $this->forge->dropColumn('tbl_transaksi', 'ketjurnal'); // Hapus kolom yang tidak diperlukan

        $this->forge->addColumn('tbl_transaksi', [
            'no_bundle' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
                'null'       => true,
            ],
            'debit' => [
                'type'       => 'DOUBLE',
                'null'       => true,
            ],
            'kredit' => [
                'type'       => 'DOUBLE',
                'null'       => true,
            ],
            'PIC' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
        ]);
    }

    public function down()
    {
        // Mengembalikan ke struktur tabel sebelumnya jika dilakukan rollback
        $this->forge->dropColumn('tbl_transaksi', 'no_bundle');
        $this->forge->dropColumn('tbl_transaksi', 'debit');
        $this->forge->dropColumn('tbl_transaksi', 'kredit');
        $this->forge->dropColumn('tbl_transaksi', 'PIC');

        // Mengembalikan kolom yang dihapus jika di-rollback
        $this->forge->addColumn('tbl_transaksi', [
            'kwitansi' => [
                'type'       => 'VARCHAR',
                'constraint' => 4,
            ],
            'ketjurnal' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateTblNilaiAddForeignKey extends Migration
{
    public function up()
    {
        // Menambahkan foreign key pada kolom kode_akun di tbl_nilai
        $this->forge->addForeignKey('kode_akun', 'akunaktiva', 'kode_akun', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Menghapus foreign key
        $this->forge->dropForeignKey('tbl_nilai', 'tbl_nilai_kode_akun_foreign');
    }
}

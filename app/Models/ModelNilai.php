<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    protected $table = 'tbl_nilai';
    protected $primaryKey = 'id'; // ganti dengan primary key yang sesuai
    protected $allowedFields = ['id_transaksi', 'kode_akun', 'nama_akun', 'debit', 'kredit', 'keterangan'];
}

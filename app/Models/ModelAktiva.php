<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAktiva extends Model
{
    protected $table = 'akunaktiva'; // Nama tabel
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key di tabel
    protected $allowedFields = ['kode_akun', 'nama_akun']; // Kolom yang boleh diakses
}

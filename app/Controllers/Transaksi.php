<?php

namespace App\Controllers;

use App\Models\ModelTransaksi;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Transaksi extends ResourceController
{
    protected $db;
    protected $objTransaksi;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->objTransaksi = new ModelTransaksi();
    }

    // methods lainnya
}

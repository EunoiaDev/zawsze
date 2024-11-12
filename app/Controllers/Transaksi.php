<?php

namespace App\Controllers;

use App\Models\ModelAktiva;
use App\Models\ModelTransaksi;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Transaksi extends ResourceController
{
    protected $db;
    protected $objTransaksi;

    function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->objTransaksi = new ModelTransaksi();
    }

    public function index()
    {
        $data['dttransaksi'] = $this->objTransaksi->findAll();
        return view('transaksi/index', $data);
    }

    public function new()
    {
        // Tampilkan form input transaksi baru
        return view('transaksi/new');
    }

    public function create()
    {
        $data1 = [
            'no_bundle' => $this->request->getVar('no_bundle'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'debit' => $this->request->getVar('debit'),
            'kredit' => $this->request->getVar('kredit'),
            'pic' => $this->request->getVar('PIC'),
        ];

        $this->db->table('tbl_transaksi')->insert($data1);

        $id_transaksi = $this->objTransaksi->InsertID();
        $kode_akun = $this->request->getVar('kode_akun');
        $nama_akun = $this->request->getVar('nama_akun');
        $debit = $this->request->getVar('debit');
        $keterangan = $this->request->getVar('keterangan');

        return redirect()->to(site_url('transaksi'))->with('Success', 'Data Berhasil Disimpan');
    }

    public function akunaktiva()
    {
        $aktiva = new ModelAktiva();
        $result = $aktiva->findAll();
        return $this->response->setJSON($result);
    }
}

// public function show($id = null)
// {
//     //
// }

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
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['dttransaksi'] = $this->objTransaksi->findAll();
        return view('transaksi/index', $data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view('transaksi/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data1 = [
            //ini untuk data tbl_transaksi    
            'no_bundle' => $this->request->getVar('no_bundle'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'debit' => $this->request->getVar('debit'),
            'kredit' => $this->request->getVar('kredit'),
            'pic' => $this->request->getVar('PIC'),
        ];
        // simpan data ke tbl_transaksi
        $this->db->table('tbl_transaksi')->insert($data1);

        // kita ambil dari id_transaksi
        $id_transaksi = $this->objTransaksi->InsertID();
        $kode_akun = $this->request->getVar('kode_akun');
        $nama_akun = $this->request->getVar('nama_akun');
        $debit = $this->request->getVar('debit');
        $keterangan = $this->request->getVar('keterangan');



        return redirect()->to(site_url('transaksi'))->with('Success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }

    public function akunaktiva()
    {
        $aktiva = model(ModelAktiva::class);
        $result = $aktiva->findAll();
        return $this->response->setJSON($result);
    }
}

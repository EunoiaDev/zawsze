<?php

namespace App\Controllers;

class Aktiva extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect(); //mengenalkan koneksi ke database
        $builder = $this->db->table('akunaktiva');
        $query = $builder->get();

        $query = $this->db->query("SELECT * FROM akunaktiva");
        $data["dtaktiva"] = $query->getResult();

        return view('aktiva/index', $data);
        // dd($query->getResult());
        // dd($query);

    }

    public function new()
    {
        return view('aktiva/new');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $data = [
            'kode_akun' => $this->request->getVar('kode_akun'),
            'nama_akun' => $this->request->getVar('nama_akun'),
            'grup_akun' => $this->request->getVar('grup_akun'),
            'grup_laporan' => $this->request->getVar('grup_akun'),
            'saldo_awal_debet' => $this->request->getVar('saldo_awal_debet'),
            'saldo_awal_kredit' => $this->request->getVar('saldo_awal_kredit'),
        ];
        $this->db->table('akunaktiva')->insert($data);
        return redirect()->to(site_url('aktiva'))->with('success', 'Data berhasil disimpan');
    }

    public function edit($id = null)
    {

        if ($id != null) {
            $query = $this->db->table('akunaktiva')->getWhere(['id_akun' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dtaktiva'] = $query->getRow();
                return view('aktiva/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = [
            'kode_akun' => $this->request->getVar('kode_akun'),
            'nama_akun' => $this->request->getVar('nama_akun'),
            'grup_akun' => $this->request->getVar('grup_akun'),
            'grup_laporan' => $this->request->getVar('grup_laporan'),
            'saldo_awal_debet' => $this->request->getVar('saldo_awal_debet'),
            'saldo_awal_kredit' => $this->request->getVar('saldo_awal_kredit'),

        ];
        $this->db->table('akunaktiva')->where(['id_akun' => $id])->update($data);
        return redirect()->to(site_url('aktiva'))->with('success', 'Data berhasil di update');
    }
    public function destroy($id)
    {
        $this->db->table('akunaktiva')->where(["id_akun" => $id])->delete();
        return redirect()->to(site_url('aktiva'))->with('success', 'Data berhasil di hapus');
    }
}

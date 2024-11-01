<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAktiva extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_akun' => '1-000',
                'nama_akun' => 'ASET',
                'grup_akun' => '',
                'grup_laporan' => '',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-100',
                'nama_akun' => 'ASET LANCAR',
                'grup_akun' => 'AS1',
                'grup_laporan' => '',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-110',
                'nama_akun' => 'Kas',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '323388509',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-120',
                'nama_akun' => 'Bank Mandiri a/c 108-00-0980218-3 IDR',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '758449972',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-121',
                'nama_akun' => 'Bank Mandiri a/c 108-00-1075937-2 USD',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '20919512',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-122',
                'nama_akun' => 'Bank BNI a/c 0388630134',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '4063820',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-123',
                'nama_akun' => 'Bank BRI a/c 00001079-01-000742-30-1 IDR',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '655548755',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-140',
                'nama_akun' => 'Piutang Usaha',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '184795461976',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-150',
                'nama_akun' => 'Piutang Lain-lain',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-160',
                'nama_akun' => 'Uang Muka Pajak PPh Psl 23',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-161',
                'nama_akun' => 'Uang Muka Pajak PPh Psl 25',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-170',
                'nama_akun' => 'Sewa Dibayar Dimuka',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-180',
                'nama_akun' => 'Uang Muka Pembelian',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-190',
                'nama_akun' => 'PPN Masukkan',
                'grup_akun' => 'AS1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-210',
                'nama_akun' => 'Tanah',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-220',
                'nama_akun' => 'Bangunan',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-230',
                'nama_akun' => 'Kendaraan',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '417287022618',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-240',
                'nama_akun' => 'Peralatan Kantor',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '690065372',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-270',
                'nama_akun' => 'Akum. Penyusutan Bangunan',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-280',
                'nama_akun' => 'Akum. Penyusutan Kendaraan',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '(299906617210)',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-290',
                'nama_akun' => 'Akum. Penyusutan Peralatan Kantor',
                'grup_akun' => 'AS2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '(690065372)',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '1-310',
                'nama_akun' => 'Bangunan Dalam Proses',
                'grup_akun' => 'AS3',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '2-110',
                'nama_akun' => 'Hutang Usaha',
                'grup_akun' => 'KW1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '58327926540'
            ],
            [
                'kode_akun' => '2-111',
                'nama_akun' => 'PPN Keluaran',
                'grup_akun' => 'KW1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '3388425911'
            ],
            [
                'kode_akun' => '2-112',
                'nama_akun' => 'Hutang PPh Pasal 21',
                'grup_akun' => 'KW1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '6708720'
            ],
            [
                'kode_akun' => '2-113',
                'nama_akun' => 'Hutang PPh Pasal 23',
                'grup_akun' => 'KW1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '622472'
            ],
            [
                'kode_akun' => '2-114',
                'nama_akun' => 'Hutang PPh Pasal 25/29',
                'grup_akun' => 'KW1',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '111896326'
            ],
            [
                'kode_akun' => '2-210',
                'nama_akun' => 'Hutang Jangka Panjang',
                'grup_akun' => 'KW2',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '3-100',
                'nama_akun' => 'Modal Saham',
                'grup_akun' => 'EKU',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '11000000000'
            ],
            [
                'kode_akun' => '3-200',
                'nama_akun' => 'Laba Ditahan',
                'grup_akun' => 'EKU',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => '231102657984'
            ],
            [
                'kode_akun' => '3-300',
                'nama_akun' => 'Laba Bersih',
                'grup_akun' => 'EKU',
                'grup_laporan' => 'NRC',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '4-100',
                'nama_akun' => 'Pendapatan Jasa Konstruksi',
                'grup_akun' => 'PEN',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '4-200',
                'nama_akun' => 'Pendapatan Jasa Sewa Kendaraan',
                'grup_akun' => 'PEN',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-100',
                'nama_akun' => 'Beban Material',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-200',
                'nama_akun' => 'Beban Pemeliharaan/Part & Service Heavy Equipment',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-300',
                'nama_akun' => 'Beban Pemeliharaan/Tyre & Tube',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-400',
                'nama_akun' => 'Beban Pemeliharaan/Grease & Pelumas',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-500',
                'nama_akun' => 'Beban BBM',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-600',
                'nama_akun' => 'Beban Tenaga Kerja',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '5-700',
                'nama_akun' => 'Beban Overhead Proyek',
                'grup_akun' => 'HPP',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-001',
                'nama_akun' => 'Beban RT Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-002',
                'nama_akun' => 'Beban Gaji Karyawan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-003',
                'nama_akun' => 'Beban Seragam Karyawan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-004',
                'nama_akun' => 'Beban Kesehatan & Obat - Obatan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-005',
                'nama_akun' => 'Beban Asuransi',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-006',
                'nama_akun' => 'Beban Alat Tulis Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-007',
                'nama_akun' => 'Beban Fotocopy, Cetak, Foto, Jilid',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-008',
                'nama_akun' => 'Beban Listrik, Telpon, Internet dan Air Minum',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-009',
                'nama_akun' => 'Beban Perjalanan Dinas',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-010',
                'nama_akun' => 'Beban Pos & Kurir: Pengiriman Dokumen/Barang',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-011',
                'nama_akun' => 'Beban Pajak',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-012',
                'nama_akun' => 'Beban Sewa Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-013',
                'nama_akun' => 'Beban BBM/Pelumas/S.Part Kendaraan Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-014',
                'nama_akun' => 'Beban Pajak, STNK, KIR Kendaraan Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-015',
                'nama_akun' => 'Beban Pelatihan dan Pendidikan Karyawan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-016',
                'nama_akun' => 'Beban Legalitas / Perizinan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-017',
                'nama_akun' => 'Beban Jasa Konsultan/Tenaga Ahli',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-018',
                'nama_akun' => 'Beban Perlengkapan',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-019',
                'nama_akun' => 'Beban Penyusutan Kendaraan Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-020',
                'nama_akun' => 'Beban Penyusutan Inventaris Kantor',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '6-021',
                'nama_akun' => 'Beban Usaha Lainnya',
                'grup_akun' => 'USH',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '7-100',
                'nama_akun' => 'Pendapatan Lain-lain Diluar Usaha',
                'grup_akun' => 'LLN',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '7-200',
                'nama_akun' => 'Beban Lain-lain Diluar Usaha',
                'grup_akun' => 'LLN',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ],
            [
                'kode_akun' => '7-201',
                'nama_akun' => 'Beban Pajak Pendapatan Bank',
                'grup_akun' => 'LLN',
                'grup_laporan' => 'LR',
                'saldo_awal_debet' => '',
                'saldo_awal_kredit' => ''
            ]





        ];
        $this->db->table('akunaktiva')->insertBatch($data);
    }
}

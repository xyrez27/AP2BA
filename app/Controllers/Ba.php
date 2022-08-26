<?php

namespace App\Controllers;

use App\Models\KaryawanAP2Model;
use App\Models\KaryawanAPSModel;
use App\Models\JabatanAP2Model;
use App\Models\JabatanAPSModel;
use App\Models\JudulBAModel;
use App\Models\JenisKomputerModel;
use App\Models\BaPemeriksaanModel;
use App\Models\BaPembayaranModel;
use CodeIgniter\HTTP\Request;

class Ba extends BaseController
{
    protected $KaryawanAP2Model;

    public function __construct()
    {
        $this->KaryawanAP2Model = new KaryawanAP2Model();
        $this->KaryawanAPSModel = new KaryawanAPSModel();
        $this->JabatanAP2Model = new JabatanAP2Model();
        $this->JabatanAPSModel = new JabatanAPSModel();
        $this->JudulBAModel = new JudulBAModel();
        $this->JenisKomputerModel = new JenisKomputerModel();
        $this->BaPemeriksaanModel = new BaPemeriksaanModel();
        $this->BaPembayaranModel = new BaPembayaranModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Index | BA Angkasa Pura II'
        ];

        return view('ba/index', $data);
    }

    public function sewaPC()
    {
        $data = [
            'title' => 'Sewa PC | BA Angkasa Pura II',
            'karyawan_ap2' => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps' => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2' => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps' => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba' => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer()
        ];

        return view('ba/sewaPC', $data);
    }

    public function sewaPrinter()
    {
        $data = [
            'title' => 'Sewa Printer | BA Angkasa Pura II'
        ];

        return view('ba/sewaPrinter', $data);
    }

    public function tagihanListrik()
    {
        $data = [
            'title' => 'Tagihan Listrik | BA Angkasa Pura II'
        ];

        return view('ba/tagihanListrik', $data);
    }

    public function BaPembayaran()
    {
        $data = [
            'title' => 'BA Pembayaran | BA Angkasa Pura II',
            'karyawan_ap2' => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps' => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2' => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps' => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba' => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer()
        ];

        // $this->BaPemeriksaanModel->save([
        //     'judul_ba' => $this->request->getVar('judul_ba'),
        //     'no_pemeriksaan' => $this->request->getVar('no_pemeriksaan'),
        //     'tanggal_ba' => $this->request->getVar('tanggal_ba'),
        //     'no_ma' => $this->request->getVar('no_ma'),
        //     'rka_tahun' => $this->request->getVar('rka_tahun'),
        //     'lampiran' => $this->request->getVar('lampiran'),
        //     'karyawanap2_1' => $this->request->getVar('karyawanap2_1'),
        //     'jabatanap2_1' => $this->request->getVar('jabatanap2_1'),
        //     'karyawanap2_2' => $this->request->getVar('karyawanap2_2'),
        //     'jabatanap2_2' => $this->request->getVar('jabatanap2_2'),
        //     'karyawanap2_3' => $this->request->getVar('karyawanap2_3'),
        //     'jabatanap2_3' => $this->request->getVar('jabatanap2_3'),
        //     'karyawanaps_1' => $this->request->getVar('karyawanaps_1'),
        //     'jabatanaps_1' => $this->request->getVar('jabatanaps_1'),
        //     'karyawanaps_2' => $this->request->getVar('karyawanaps_2'),
        //     'jabatanaps_2' => $this->request->getVar('jabatanaps_2'),
        //     'no_psm' => $this->request->getVar('no_psm'),
        //     'tanggal_psm' => $this->request->getVar('tanggal_psm'),
        //     'no_bao' => $this->request->getVar('no_bao'),
        //     'tanggal_bao' => $this->request->getVar('tanggal_bao'),
        //     'tanggal_pp_from' => $this->request->getVar('tanggal_pp_from'),
        //     'tanggal_pp_to' => $this->request->getVar('tanggal_pp_to'),
        //     'jenis_komputer1' => $this->request->getVar('jenis_komputer1'),
        //     'unit_komputer1' => $this->request->getVar('unit_komputer1'),
        //     'jenis_komputer2' => $this->request->getVar('jenis_komputer2'),
        //     'unit_komputer2' => $this->request->getVar('unit_komputer2'),
        //     'jenis_komputer3' => $this->request->getVar('jenis_komputer3'),
        //     'unit_komputer3' => $this->request->getVar('unit_komputer3')
        // ]);

        // session()->setFlashdata('pesan', 'Data BA Pembayaran berhasil disimpan.');

        return view('form/sewapc/ba_pembayaran', $data);
    }


    public function save_form_pemeriksaan()
    {
        $data = [
            'title' => 'Save | BA Angkasa Pura II',
            'karyawan_ap2' => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps' => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2' => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps' => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba' => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer()
        ];

        // $this->BaPemeriksaanModel->save([
        //     'judul_ba' => $this->request->getVar('judul_ba'),
        //     'no_pemeriksaan' => $this->request->getVar('no_pemeriksaan'),
        //     'tanggal_ba' => $this->request->getVar('tanggal_ba'),
        //     'no_ma' => $this->request->getVar('no_ma'),
        //     'rka_tahun' => $this->request->getVar('rka_tahun'),
        //     'lampiran' => $this->request->getVar('lampiran'),
        //     'karyawanap2_1' => $this->request->getVar('karyawanap2_1'),
        //     'jabatanap2_1' => $this->request->getVar('jabatanap2_1'),
        //     'karyawanap2_2' => $this->request->getVar('karyawanap2_2'),
        //     'jabatanap2_2' => $this->request->getVar('jabatanap2_2'),
        //     'karyawanap2_3' => $this->request->getVar('karyawanap2_3'),
        //     'jabatanap2_3' => $this->request->getVar('jabatanap2_3'),
        //     'karyawanaps_1' => $this->request->getVar('karyawanaps_1'),
        //     'jabatanaps_1' => $this->request->getVar('jabatanaps_1'),
        //     'karyawanaps_2' => $this->request->getVar('karyawanaps_2'),
        //     'jabatanaps_2' => $this->request->getVar('jabatanaps_2'),
        //     'no_psm' => $this->request->getVar('no_psm'),
        //     'tanggal_psm' => $this->request->getVar('tanggal_psm'),
        //     'no_bao' => $this->request->getVar('no_bao'),
        //     'tanggal_bao' => $this->request->getVar('tanggal_bao'),
        //     'tanggal_pp_from' => $this->request->getVar('tanggal_pp_from'),
        //     'tanggal_pp_to' => $this->request->getVar('tanggal_pp_to'),
        //     'jenis_komputer1' => $this->request->getVar('jenis_komputer1'),
        //     'unit_komputer1' => $this->request->getVar('unit_komputer1'),
        //     'jenis_komputer2' => $this->request->getVar('jenis_komputer2'),
        //     'unit_komputer2' => $this->request->getVar('unit_komputer2'),
        //     'jenis_komputer3' => $this->request->getVar('jenis_komputer3'),
        //     'unit_komputer3' => $this->request->getVar('unit_komputer3')
        // ]);

        $karyawan = [$this->request->getVar()];
        dd($karyawan);


        session()->setFlashdata('pesan', 'Data BA Pemeriksaan berhasil disimpan.');
        // dd($this->request->getVar());

        return view('form/sewapc/ba_pembayaran', $data);
    }

    public function save_form_pembayaran()
    {
        $data = [
            'title' => 'Save | BA Angkasa Pura II',
            'karyawan_ap2' => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps' => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2' => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps' => $this->JabatanAPSModel->getJabatanAPS(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer()
        ];

        $this->BaPembayaranModel->save([
            'karyawanap2_1' => $this->request->getVar('karyawanap2_1'),
            'jabatanap2_1' => $this->request->getVar('jabatanap2_1'),
            'karyawanaps_1' => $this->request->getVar('karyawanaps_1'),
            'jabatanaps_1' => $this->request->getVar('jabatanaps_1'),
            'no_ppn' => $this->request->getVar('no_ppn'),
            'tanggal_ppn' => $this->request->getVar('tanggal_ppn'),
            'harga_satuan1' => $this->request->getVar('harga_satuan1'),
            'harga_satuan2' => $this->request->getVar('harga_satuan2'),
            'harga_satuan3' => $this->request->getVar('harga_satuan3'),
            'tahap_ke' => $this->request->getVar('tahap_ke'),
        ]);

        session()->setFlashdata('pesan', 'Data BA Pembayaran berhasil disimpan.');
        // dd($this->request->getVar());

        return view('form/sewapc/ba_pembayaran', $data);
    }
}

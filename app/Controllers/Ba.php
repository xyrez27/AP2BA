<?php

namespace App\Controllers;

require_once ROOTPATH . 'vendor/autoload.php';

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

        return view('form/sewapc/ba_pembayaran', $data);
    }


    public function save_form_pemeriksaan()
    {
        $karyawanap2 = implode(', ', $this->request->getVar('karyawanap2[]'));
        $jabatanap2 = implode(', ', $this->request->getVar('jabatanap2[]'));
        $karyawanaps = implode(', ', $this->request->getVar('karyawanaps[]'));
        $jabatanaps = implode(', ', $this->request->getVar('jabatanaps[]'));
        $jenis_komputer = implode(', ', $this->request->getVar('jenis_komputer[]'));
        $unit_komputer = implode(', ', $this->request->getVar('unit_komputer[]'));

        $this->BaPemeriksaanModel->save([
            'judul_ba' => $this->request->getVar('judul_ba'),
            'no_pemeriksaan' => $this->request->getVar('no_pemeriksaan'),
            'tanggal_ba' => $this->request->getVar('tanggal_ba'),
            'no_ma' => $this->request->getVar('no_ma'),
            'rka_tahun' => $this->request->getVar('rka_tahun'),
            'lampiran' => $this->request->getVar('lampiran'),
            'karyawanap2' => $karyawanap2,
            'jabatanap2' => $jabatanap2,
            'karyawanaps' => $karyawanaps,
            'jabatanaps' => $jabatanaps,
            'no_psm' => $this->request->getVar('no_psm'),
            'tanggal_psm' => $this->request->getVar('tanggal_psm'),
            'no_bao' => $this->request->getVar('no_bao'),
            'tanggal_bao' => $this->request->getVar('tanggal_bao'),
            'tanggal_pp_from' => $this->request->getVar('tanggal_pp_from'),
            'tanggal_pp_to' => $this->request->getVar('tanggal_pp_to'),
            'jenis_komputer' => $jenis_komputer,
            'unit_komputer' => $unit_komputer,
        ]);

        session()->setFlashdata('pesan', 'Data BA Pemeriksaan berhasil disimpan.');

        return redirect()->to('/ba/BaPembayaran');
    }

    public function save_form_pembayaran()
    {
        $karyawanap2 = implode(', ', $this->request->getVar('karyawanap2[]'));
        $jabatanap2 = implode(', ', $this->request->getVar('jabatanap2[]'));
        $karyawanaps = implode(', ', $this->request->getVar('karyawanaps[]'));
        $jabatanaps = implode(', ', $this->request->getVar('jabatanaps[]'));
        $harga_satuan = implode(', ', $this->request->getVar('harga_satuan[]'));

        $this->BaPembayaranModel->save([
            'karyawanap2' => $karyawanap2,
            'jabatanap2' => $jabatanap2,
            'karyawanaps' => $karyawanaps,
            'jabatanaps' => $jabatanaps,
            'no_ppn' => $this->request->getVar('no_ppn'),
            'tanggal_ppn' => $this->request->getVar('tanggal_ppn'),
            'harga_satuan' => $harga_satuan,
            'tahap_ke' => $this->request->getVar('tahap_ke'),
        ]);

        session()->setFlashdata('pesan', 'Data BA Pembayaran berhasil disimpan.');

        return redirect()->to('/ba/phpword');
    }

    public function phpword()
    {
        $data = [
            'title' => 'Sewa PC | BA Angkasa Pura II',
            'ba_pemeriksaan' => $this->BaPemeriksaanModel->getBaPemeriksaan(),
            'ba_pembayaran' => $this->BaPembayaranModel->getBaPembayaran(),
        ];

        $template_pemeriksaan = dirname(__FILE__) . '/template_pemeriksaan.docx';
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($template_pemeriksaan);

        $templateProcessor->setValues([
            'judul_ba' => 'SEWA PC ALBANI KAUTSAR'
        ]);

        $pathToSave = 'result_pemeriksaan.docx';
        $templateProcessor->saveAs($pathToSave);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=result_pemeriksaan.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        readfile($pathToSave);
    }
}

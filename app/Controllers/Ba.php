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
use App\Models\SewaPCModel;
use Dompdf\Dompdf;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Ba extends BaseController
{
    protected $KaryawanAP2Model;

    public function __construct()
    {
        $this->KaryawanAP2Model   = new KaryawanAP2Model();
        $this->KaryawanAPSModel   = new KaryawanAPSModel();
        $this->JabatanAP2Model    = new JabatanAP2Model();
        $this->JabatanAPSModel    = new JabatanAPSModel();
        $this->JudulBAModel       = new JudulBAModel();
        $this->JenisKomputerModel = new JenisKomputerModel();
        $this->BaPemeriksaanModel = new BaPemeriksaanModel();
        $this->BaPembayaranModel  = new BaPembayaranModel();
        $this->SewaPCModel        = new SewaPCModel();
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
            'title'          => 'Sewa PC | BA Angkasa Pura II',
            'karyawan_ap2'   => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps'   => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2'    => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps'    => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba'       => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer(),
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('ba/sewaPC', $data);
    }


    public function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");

        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " Belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " Puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " Ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " Ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " Juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " Milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " Triliun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        dd($temp);
        return $temp;
    }

    public function sewaPrinter()
    {
        $data = [
            'title' => 'Sewa Printer | BA Angkasa Pura II',
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('ba/sewaPrinter', $data);
    }

    public function tagihanListrik()
    {
        $data = [
            'title' => 'Tagihan Listrik | BA Angkasa Pura II',
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('ba/tagihanListrik', $data);
    }

    public function BaPembayaran($id)
    {
        $data = [
            'id_pemeriksaan' => $id,
            'title'          => 'BA Pembayaran | BA Angkasa Pura II',
            'karyawan_ap2'   => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps'   => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2'    => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps'    => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba'       => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer(),
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('form/sewapc/ba_pembayaran', $data);
    }


    public function save_form_pemeriksaan()
    {
        $karyawanap2    = implode(', ', $this->request->getVar('karyawanap2[]'));
        $jabatanap2     = implode(', ', $this->request->getVar('jabatanap2[]'));
        $karyawanaps    = implode(', ', $this->request->getVar('karyawanaps[]'));
        $jabatanaps     = implode(', ', $this->request->getVar('jabatanaps[]'));
        $jenis_komputer = implode(', ', $this->request->getVar('jenis_komputer[]'));
        $unit_komputer  = implode(', ', $this->request->getVar('unit_komputer[]'));

        $jumlah_unit = 0;
        foreach ($this->request->getVar('unit_komputer[]') as $key) {
            $strtoint = (int)$key;
            $jumlah_unit += $strtoint;
        }

        $this->BaPemeriksaanModel->save([
            'judul_ba'        => $this->request->getVar('judul_ba'),
            'no_pemeriksaan'  => $this->request->getVar('no_pemeriksaan'),
            'tanggal_ba'      => $this->request->getVar('tanggal_ba'),
            'no_ma'           => $this->request->getVar('no_ma'),
            'rka_tahun'       => $this->request->getVar('rka_tahun'),
            'lampiran'        => $this->request->getVar('lampiran'),
            'karyawanap2'     => $karyawanap2,
            'jabatanap2'      => $jabatanap2,
            'karyawanaps'     => $karyawanaps,
            'jabatanaps'      => $jabatanaps,
            'no_psm'          => $this->request->getVar('no_psm'),
            'tanggal_psm'     => $this->request->getVar('tanggal_psm'),
            'no_bao'          => $this->request->getVar('no_bao'),
            'tanggal_bao'     => $this->request->getVar('tanggal_bao'),
            'tanggal_pp_from' => $this->request->getVar('tanggal_pp_from'),
            'tanggal_pp_to'   => $this->request->getVar('tanggal_pp_to'),
            'jenis_komputer'  => $jenis_komputer,
            'unit_komputer'   => $unit_komputer,
            'jumlah_unit'     => $jumlah_unit
        ]);

        $getID = $this->BaPemeriksaanModel->getInsertID();

        $this->SewaPCModel->save([
            'id_pemeriksaan' => $getID
        ]);

        session()->setFlashdata('pesan', 'Data BA Pemeriksaan berhasil disimpan.');

        return redirect()->to(base_url('ba/baPembayaran/' . $getID));
    }

    public function save_form_pembayaran($id)
    {
        $karyawanap2  = implode(', ', $this->request->getVar('karyawanap2_pb[]'));
        $jabatanap2   = implode(', ', $this->request->getVar('jabatanap2_pb[]'));
        $karyawanaps  = implode(', ', $this->request->getVar('karyawanaps_pb[]'));
        $jabatanaps   = implode(', ', $this->request->getVar('jabatanaps_pb[]'));
        $harga_satuan = implode(', ', $this->request->getVar('harga_satuan[]'));

        $ba_pemeriksaan = $this->BaPemeriksaanModel->getBaPemeriksaan($id);

        $unit_komputer = explode(", ", $ba_pemeriksaan['unit_komputer']);

        $i = 0;
        $total = [];
        $jumlah_sebelum_pajak = 0;
        foreach ($unit_komputer as $key) {
            $strtoint = (int)$key * (int)$harga_satuan[$i];
            $total[$i++] = $strtoint;
            $jumlah_sebelum_pajak += $strtoint;
        }

        $ppn = round($jumlah_sebelum_pajak * 0.11);
        $jumlah_setelah_pajak = $jumlah_sebelum_pajak + $ppn;

        $this->BaPembayaranModel->save([
            'karyawanap2_pb' => $karyawanap2,
            'jabatanap2_pb'  => $jabatanap2,
            'karyawanaps_pb' => $karyawanaps,
            'jabatanaps_pb'  => $jabatanaps,
            'no_ppn'         => $this->request->getVar('no_ppn'),
            'tanggal_ppn'    => $this->request->getVar('tanggal_ppn'),
            'harga_satuan'   => $harga_satuan,
            'jumlah_sebelum_pajak' => $jumlah_sebelum_pajak,
            'jumlah_setelah_pajak' => $jumlah_setelah_pajak,
            'tahap_ke'       => $this->request->getVar('tahap_ke'),
            'exclude_ppn'    => $this->request->getVar('exclude_ppn')
        ]);

        $getID = $this->BaPembayaranModel->getInsertID();
        $selectLastid = $this->SewaPCModel->lastID();

        $saveid = [
            'id_pembayaran' => $getID
        ];

        $this->SewaPCModel->update($selectLastid[0], $saveid);

        session()->setFlashdata('pesan', 'Data BA Pembayaran berhasil disimpan.');

        return redirect()->to(base_url('/pages/dashboard'));
    }

    public function edit_pemeriksaan($id)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();

        $data = [
            'title'          => 'Sewa PC | BA Angkasa Pura II',
            'karyawan_ap2'   => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps'   => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2'    => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps'    => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba'       => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer(),
            'karyawanap2'    => explode(",", $sewapc[$id]['karyawanap2']),
            'jabatanap2'     => explode(",", $sewapc[$id]['jabatanap2']),
            'karyawanaps'    => explode(",", $sewapc[$id]['karyawanaps']),
            'jabatanaps'     => explode(",", $sewapc[$id]['jabatanaps']),
            'jeniskomputer'  => explode(",", $sewapc[$id]['jenis_komputer']),
            'unitkomputer'   => explode(",", $sewapc[$id]['unit_komputer']),
            'sewapc'         => $sewapc[$id],
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('/form/sewapc/edit_pemeriksaan', $data);
    }

    public function edit_pembayaran($id)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();

        $data = [
            'title'          => 'Sewa PC | BA Angkasa Pura II',
            'karyawan_ap2'   => $this->KaryawanAP2Model->getKaryawanAP2(),
            'karyawan_aps'   => $this->KaryawanAPSModel->getKaryawanAPS(),
            'jabatan_ap2'    => $this->JabatanAP2Model->getJabatanAP2(),
            'jabatan_aps'    => $this->JabatanAPSModel->getJabatanAPS(),
            'judul_ba'       => $this->JudulBAModel->getJudulBA(),
            'jenis_komputer' => $this->JenisKomputerModel->getJenisKomputer(),
            'karyawanap2_pb' => explode(",", $sewapc[$id]['karyawanap2_pb']),
            'jabatanap2_pb'  => explode(",", $sewapc[$id]['jabatanap2_pb']),
            'karyawanaps_pb' => explode(",", $sewapc[$id]['karyawanaps_pb']),
            'jabatanaps_pb'  => explode(",", $sewapc[$id]['jabatanaps_pb']),
            'jeniskomputer'  => explode(",", $sewapc[$id]['jenis_komputer']),
            'unitkomputer'   => explode(",", $sewapc[$id]['unit_komputer']),
            'hargasatuan'    => explode(",", $sewapc[$id]['harga_satuan']),
            'sewapc'         => $sewapc[$id],
            'validation'     => \Config\Services::validation() //belum dipakai
        ];

        return view('/form/sewapc/edit_pembayaran', $data);
    }

    public function update_pemeriksaan($id)
    {
        $karyawanap2    = implode(', ', $this->request->getVar('karyawanap2[]'));
        $jabatanap2     = implode(', ', $this->request->getVar('jabatanap2[]'));
        $karyawanaps    = implode(', ', $this->request->getVar('karyawanaps[]'));
        $jabatanaps     = implode(', ', $this->request->getVar('jabatanaps[]'));
        $jenis_komputer = implode(', ', $this->request->getVar('jenis_komputer[]'));
        $unit_komputer  = implode(', ', $this->request->getVar('unit_komputer[]'));

        $jumlah_unit = 0;
        foreach ($this->request->getVar('unit_komputer[]') as $key) {
            $strtoint = (int)$key;
            $jumlah_unit += $strtoint;
        }

        $this->BaPemeriksaanModel->save([
            'id_ba'           => $id,
            'judul_ba'        => $this->request->getVar('judul_ba'),
            'no_pemeriksaan'  => $this->request->getVar('no_pemeriksaan'),
            'tanggal_ba'      => $this->request->getVar('tanggal_ba'),
            'no_ma'           => $this->request->getVar('no_ma'),
            'rka_tahun'       => $this->request->getVar('rka_tahun'),
            'lampiran'        => $this->request->getVar('lampiran'),
            'karyawanap2'     => $karyawanap2,
            'jabatanap2'      => $jabatanap2,
            'karyawanaps'     => $karyawanaps,
            'jabatanaps'      => $jabatanaps,
            'no_psm'          => $this->request->getVar('no_psm'),
            'tanggal_psm'     => $this->request->getVar('tanggal_psm'),
            'no_bao'          => $this->request->getVar('no_bao'),
            'tanggal_bao'     => $this->request->getVar('tanggal_bao'),
            'tanggal_pp_from' => $this->request->getVar('tanggal_pp_from'),
            'tanggal_pp_to'   => $this->request->getVar('tanggal_pp_to'),
            'jenis_komputer'  => $jenis_komputer,
            'unit_komputer'   => $unit_komputer,
            'jumlah_unit'     => $jumlah_unit
        ]);

        return redirect()->to(base_url('/ba/daftarBA'));
    }

    public function update_pembayaran($id)
    {
        $karyawanap2  = implode(', ', $this->request->getVar('karyawanap2_pb[]'));
        $jabatanap2   = implode(', ', $this->request->getVar('jabatanap2_pb[]'));
        $karyawanaps  = implode(', ', $this->request->getVar('karyawanaps_pb[]'));
        $jabatanaps   = implode(', ', $this->request->getVar('jabatanaps_pb[]'));
        $harga_satuan = implode(', ', $this->request->getVar('harga_satuan[]'));

        $this->BaPembayaranModel->save([
            'id_ba'          => $id,
            'karyawanap2_pb' => $karyawanap2,
            'jabatanap2_pb'  => $jabatanap2,
            'karyawanaps_pb' => $karyawanaps,
            'jabatanaps_pb'  => $jabatanaps,
            'no_ppn'         => $this->request->getVar('no_ppn'),
            'tanggal_ppn'    => $this->request->getVar('tanggal_ppn'),
            'harga_satuan'   => $harga_satuan,
            'tahap_ke'       => $this->request->getVar('tahap_ke'),
        ]);

        return redirect()->to(base_url('/ba/daftarBA'));
    }

    public function deleteBaSewaPC($id_ba, $id_pemeriksaan, $id_pembayaran)
    {
        $this->SewaPCModel->delete(['id' => $id_ba]);
        $this->BaPemeriksaanModel->delete(['id_ba' => $id_pemeriksaan]);
        $this->BaPembayaranModel->delete(['id_ba' => $id_pembayaran]);

        session()->setFlashdata('success', 'Data Berhasil Dihapus!!');

        return redirect()->to(base_url('/ba/daftarBA'));
    }

    public function daftarBA()
    {
        $getRow = $this->SewaPCModel->getRow();

        $data = [
            'title'     => 'Daftar Berita Acara | BA Angkasa Pura II',
            'getRow'    => $getRow,
            'ba_sewapc' => $this->SewaPCModel->getSewaPC()
        ];

        return view('ba/daftarBA', $data);
    }

    public function printpemeriksaan($no_ba)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();

        $data = [
            'title'  => 'BA Pemeriksaan Pekerjaan | BA Angkasa Pura II',
            'no_ba'  => $no_ba,
            'sewapc' => $sewapc[$no_ba],
            'karyawanap2' => explode(",", $sewapc[$no_ba]['karyawanap2']),
            'jabatanap2'  => explode(",", $sewapc[$no_ba]['jabatanap2']),
            'karyawanaps' => explode(",", $sewapc[$no_ba]['karyawanaps']),
            'jabatanaps'  => explode(",", $sewapc[$no_ba]['jabatanaps']),
            'jenis_komputer' => explode(",", $sewapc[$no_ba]['jenis_komputer']),
            'unit_komputer'  => explode(",", $sewapc[$no_ba]['unit_komputer'])
        ];

        $html = view('/viewforpdf/pemeriksaan_pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream("ba_pemeriksaan.pdf", array(
            "Attachment" => false
        ));
    }

    public function printpembayaran($no_ba)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();

        $unit_komputer = explode(", ", $sewapc[$no_ba]['unit_komputer']);
        $harga_satuan  = explode(", ", $sewapc[$no_ba]['harga_satuan']);

        $i = 0;
        $total = [];
        $jumlah_sebelum_pajak = 0;
        foreach ($unit_komputer as $key) {
            $strtoint = (int)$key * (int)$harga_satuan[$i];
            $total[$i++] = $strtoint;
            $jumlah_sebelum_pajak += $strtoint;
        }

        $ppn = round($jumlah_sebelum_pajak * 0.11);
        $jumlah_setelah_pajak = $jumlah_sebelum_pajak + $ppn;


        $data = [
            'title'  => 'BA Pembayaran Pekerjaan | BA Angkasa Pura II',
            'no_ba'  => $no_ba,
            'sewapc' => $sewapc[$no_ba],
            'jenis_komputer' => explode(", ", $sewapc[$no_ba]['jenis_komputer']),
            'unit_komputer'  => explode(", ", $sewapc[$no_ba]['unit_komputer']),
            'harga_satuan'   => explode(", ", $sewapc[$no_ba]['harga_satuan']),
            'jumlah_harga'   => $total,
            'jumlah_sebelum_pajak' => $jumlah_sebelum_pajak,
            'ppn'                  => $ppn,
            'jumlah_setelah_pajak' => $jumlah_setelah_pajak
        ];

        $html = view('/viewforpdf/pembayaran_pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream("ba_pembayaran.pdf", array(
            "Attachment" => false
        ));
    }

    public function printformulir($no_ba)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();
        $data = [
            'title'  => 'Permohonan Pembayaran | BA Angkasa Pura II',
            'no_ba'  => $no_ba,
            'sewapc' => $sewapc[$no_ba],
            'karyawanap2' => explode(",", $sewapc[$no_ba]['karyawanap2']),
            'jabatanap2'  => explode(",", $sewapc[$no_ba]['jabatanap2']),
            'karyawanaps' => explode(",", $sewapc[$no_ba]['karyawanaps']),
            'jabatanaps'  => explode(",", $sewapc[$no_ba]['jabatanaps']),
            'jenis_komputer' => explode(",", $sewapc[$no_ba]['jenis_komputer']),
            'unit_komputer'  => explode(",", $sewapc[$no_ba]['unit_komputer']),
            'exclude_ppn' => (int)$sewapc[$no_ba]['exclude_ppn']
        ];

        $html = view('/viewforpdf/formulir_pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream("ba_formulir.pdf", array(
            "Attachment" => false
        ));
    }

    public function printsurat($no_ba)
    {
        $sewapc = $this->SewaPCModel->getSewaPC();
        $data = [
            'title'  => 'Surat Pernyataan Pembayaran | BA Angkasa Pura II',
            'no_ba'  => $no_ba,
            'sewapc' => $sewapc[$no_ba],
            'karyawanap2' => explode(",", $sewapc[$no_ba]['karyawanap2']),
            'jabatanap2'  => explode(",", $sewapc[$no_ba]['jabatanap2']),
            'karyawanaps' => explode(",", $sewapc[$no_ba]['karyawanaps']),
            'jabatanaps'  => explode(",", $sewapc[$no_ba]['jabatanaps']),
            'jenis_komputer' => explode(",", $sewapc[$no_ba]['jenis_komputer']),
            'unit_komputer'  => explode(",", $sewapc[$no_ba]['unit_komputer'])
        ];

        $html = view('/viewforpdf/suratpernyataan_pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream("ba_suratpernyataan.pdf", array(
            "Attachment" => false
        ));
    }

    // public function phpword($no_ba)
    // {
    //     $data = [
    //         'title'          => 'Sewa PC | BA Angkasa Pura II',
    //         'ba_pemeriksaan' => $this->BaPemeriksaanModel->getBaPemeriksaan(),
    //         'ba_pembayaran'  => $this->BaPembayaranModel->getBaPembayaran(),
    //         'ba_sewapc'      => $this->SewaPCModel->getSewaPC()
    //     ];

    // $template_pemeriksaan = dirname(__FILE__) . '/template_pemeriksaan.docx';
    // $templateProcessor    = new \PhpOffice\PhpWord\TemplateProcessor($template_pemeriksaan);

    // $query = $this->BaPemeriksaanModel->getBaPemeriksaan();
    // $sewapc = $this->SewaPCModel->getSewaPC();
    // dd($sewapc[$no_ba]);
    // dd($sewapc);

    // $karyawanap2  = $sewapc[$no_ba]['karyawanap2'];
    // $namakaryawan = explode(",", $karyawanap2);
    // $jabatanap2  = $sewapc[$no_ba]['jabatanap2'];
    // $jabatankaryawan = explode(",", $jabatanap2);
    // $nk2          = implode("\n", $namakaryawan);
    // $temp         = nl2br($namakaryawan);
    // dd($karyawanap22);
    // dd($namakaryawan, $nk2);


    // $templateProcessor->setValues([
    //     'judul_ba'    => $sewapc[$no_ba]['judul_ba'],
    //     'ba'          => $sewapc[$no_ba]['no_pemeriksaan'],
    //     'no_ma'       => $sewapc[$no_ba]['no_ma'],
    //     'tgl_ba'      => date('m/Y', strtotime($sewapc[$no_ba]['tanggal_ba'])),
    //     'tgl_ba2'     => date('d-m-Y', strtotime($sewapc[$no_ba]['tanggal_ba'])),
    //     'rka_tahun'   => $sewapc[$no_ba]['rka_tahun'],
    //     'lampiran'    => $sewapc[$no_ba]['lampiran'],
    //     'karyawanap2' => $sewapc[$no_ba]['karyawanap2'],
    //     'jabatanap2'  => $sewapc[$no_ba]['jabatanap2'],
    //     'karyawanaps' => $sewapc[$no_ba]['karyawanaps'],
    //     'jabatanaps' => $sewapc[$no_ba]['jabatanaps'],
    //     'no_psm'      => $sewapc[$no_ba]['no_psm'],
    //     'tanggal_psm' => $sewapc[$no_ba]['tanggal_psm'],
    //     'no_bao'      => $sewapc[$no_ba]['no_bao'],
    //     'tanggal_bao' => $sewapc[$no_ba]['tanggal_bao'],
    //     'tanggal_pp_from' => date('d-m-Y', strtotime($sewapc[$no_ba]['tanggal_pp_from'])),
    //     'tanggal_pp_to'   => date('d-m-Y', strtotime($sewapc[$no_ba]['tanggal_pp_to'])),
    //     'jenis_komputer'  => $sewapc[$no_ba]['jenis_komputer'],
    //     'unit_komputer'   => $sewapc[$no_ba]['unit_komputer']
    // ]);

    // // dd($sewapc[$no_ba]['jabatanap2']);

    // $pathToSave = 'result_pemeriksaan.docx';
    // $templateProcessor->saveAs($pathToSave);

    // header('Content-Description: File Transfer');
    // header('Content-Disposition: attachment; filename=result_pemeriksaan.docx');
    // header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

    // readfile($pathToSave);

    //     return view('/pages/dashboard', $data);
    // }
}

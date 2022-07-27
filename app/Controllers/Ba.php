<?php

namespace App\Controllers;

use App\Models\KaryawanAP2Model;
use App\Models\KaryawanAPSModel;
use App\Models\JabatanAP2Model;
use App\Models\JabatanAPSModel;

class Ba extends BaseController
{
    protected $KaryawanAP2Model;

    public function __construct()
    {
        $this->KaryawanAP2Model = new KaryawanAP2Model();
        $this->KaryawanAPSModel = new KaryawanAPSModel();
        $this->JabatanAP2Model = new JabatanAP2Model();
        $this->JabatanAPSModel = new JabatanAPSModel();
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
            'jabatan_aps' => $this->JabatanAPSModel->getJabatanAPS()
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
}

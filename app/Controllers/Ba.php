<?php

namespace App\Controllers;

use App\Models\BaModel;

class Ba extends BaseController
{
    protected $BaModel;

    public function __construct()
    {
        $this->BaModel = new BaModel();
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
            'title' => 'Sewa PC | BA Angkasa Pura II'
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

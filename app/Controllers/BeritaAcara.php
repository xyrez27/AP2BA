<?php

namespace App\Controllers;

class beritaAcara extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Index | BA Angkasa Pura II'
        ];

        return view('ba/index', $data);
    }
}

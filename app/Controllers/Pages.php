<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | BA Angkasa Pura II'
        ];

        return view('pages/dashboard', $data);
    }

    public function ba()
    {
        $data = [
            'title' => 'Berita Acara'
        ];

        return view('pages/ba', $data);
    }
}

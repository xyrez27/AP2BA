<?php

namespace App\Models;

use CodeIgniter\Model;

class BAPemeriksaan extends Model
{
    protected $table = 'tx_ba_pemeriksaan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_ba', 'judul_ba'];

    public function getBAPemeriksaan($nama_jabatan = false)
    {
        if ($nama_jabatan == false) {
            return $this->findAll();
        }

        return $this->where(['nama_jabatan' => $nama_jabatan])->first();
    }
}

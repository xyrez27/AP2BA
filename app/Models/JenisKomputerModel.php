<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisKomputerModel extends Model
{
    protected $table = 'ms_jenis_komputer';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jenis_komputer', 'nama_jenis_komputer', 'jumlah_jenis_komputer'];

    public function getJenisKomputer($nama_jenis_komputer = false)
    {
        if ($nama_jenis_komputer == false) {
            return $this->findAll();
        }

        return $this->where(['nama_jenis_komputer' => $nama_jenis_komputer])->first();
    }
}

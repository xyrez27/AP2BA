<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanAPSModel extends Model
{
    protected $table = 'ms_karyawan_aps';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_karyawan', 'nama_karyawan'];

    public function getKaryawanAPS($nama_karyawan = false)
    {
        if ($nama_karyawan == false) {
            return $this->findAll();
        }

        return $this->where(['nama_karyawan' => $nama_karyawan])->first();
    }
}

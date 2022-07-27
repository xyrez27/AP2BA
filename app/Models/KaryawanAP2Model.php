<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanAP2Model extends Model
{
    protected $table = 'ms_karyawan_ap2';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_karyawan', 'nama_karyawan'];

    public function getKaryawanAP2($nama_karyawan = false)
    {
        if ($nama_karyawan == false) {
            return $this->findAll();
        }

        return $this->where(['nama_karyawan' => $nama_karyawan])->first();
    }
}

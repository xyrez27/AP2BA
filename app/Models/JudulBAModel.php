<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanAP2Model extends Model
{
    protected $table = 'ms_jabatan_ap2';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jabatan', 'nama_jabatan'];

    public function getJabatanAP2($nama_jabatan = false)
    {
        if ($nama_jabatan == false) {
            return $this->findAll();
        }

        return $this->where(['nama_jabatan' => $nama_jabatan])->first();
    }
}

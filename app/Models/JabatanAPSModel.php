<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanAPSModel extends Model
{
    protected $table = 'ms_jabatan_aps';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jabatan', 'nama_jabatan'];

    public function getJabatanAPS($nama_jabatan = false)
    {
        if ($nama_jabatan == false) {
            return $this->findAll();
        }

        return $this->where(['nama_jabatan' => $nama_jabatan])->first();
    }
}

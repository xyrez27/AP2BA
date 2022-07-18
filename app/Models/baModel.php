<?php

namespace App\Models;

use CodeIgniter\Model;

class BaModel extends Model
{
    protected $table = 'TX_BERITA_ACARA';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'gender', 'alamat', 'pesawat'];

    public function getBA($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }
}

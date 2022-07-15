<?php

namespace App\Models;

use CodeIgniter\Model;

class baModel extends Model
{
    protected $table = 'beritaAcara';
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

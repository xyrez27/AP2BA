<?php

namespace App\Models;

use CodeIgniter\Model;

class JudulBAModel extends Model
{
    protected $table = 'ms_judul_ba';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_judul_ba', 'nama_judul_ba'];

    public function getJudulBA($nama_judul_ba = false)
    {
        if ($nama_judul_ba == false) {
            return $this->findAll();
        }

        return $this->where(['nama_judul_ba' => $nama_judul_ba])->first();
    }
}

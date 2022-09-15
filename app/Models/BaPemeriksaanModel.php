<?php

namespace App\Models;

use CodeIgniter\Model;

class BaPemeriksaanModel extends Model
{
    protected $table         = 'tx_ba_pemeriksaan';
    protected $primaryKey    = 'id_ba';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_ba', 'judul_ba', 'no_pemeriksaan', 'tanggal_ba', 'no_ma', 'rka_tahun', 'lampiran',
        'karyawanap2', 'jabatanap2', 'karyawanaps', 'jabatanaps', 'no_psm', 'tanggal_psm', 'no_bao',
        'tanggal_bao', 'tanggal_pp_from', 'tanggal_pp_to', 'jenis_komputer', 'unit_komputer', 'jumlah_unit'
    ];

    public function getBaPemeriksaan($id_ba = false)
    {
        if ($id_ba == false) {
            return $this->findAll();
        }

        return $this->where(['id_ba' => $id_ba])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BaPemeriksaanModel extends Model
{
    protected $table = 'tx_ba_pemeriksaan';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_ba', 'judul_ba', 'no_pemeriksaan', 'tanggal_ba', 'no_ma', 'rka_tahun', 'lampiran',
        'karyawanap2_1', 'jabatanap2_1', 'karyawanap2_2', 'jabatanap2_2',
        'karyawanap2_3', 'jabatanap2_3', 'karyawanaps_1', 'jabatanaps_1',
        'karyawanaps_2', 'jabatanaps_2', 'no_psm', 'tanggal_psm', 'no_bao', 'tanggal_bao',
        'tanggal_pp_from', 'tanggal_pp_to', 'jenis_komputer1', 'unit_komputer1',
        'jenis_komputer2', 'unit_komputer2', 'jenis_komputer3', 'unit_komputer3'
    ];

    public function getBaPemeriksaan($id_ba = false)
    {
        if ($id_ba == false) {
            return $this->findAll();
        }

        return $this->where(['id_ba' => $id_ba])->first();
    }
}

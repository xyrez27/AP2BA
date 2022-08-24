<?php

namespace App\Models;

use CodeIgniter\Model;

class BaPembayaranModel extends Model
{
    protected $table = 'tx_ba_pembayaran';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_ba', 'karyawanap2_1', 'jabatanap2_1', 'karyawanaps_1', 'karyawanaps_1', 'no_ppn', 'tanggal_ppn',
        'harga_satuan1', 'harga_satuan2', 'harga_satuan3', 'tahap_ke'
    ];

    public function getBaPembayaran($id_ba = false)
    {
        if ($id_ba == false) {
            return $this->findAll();
        }

        return $this->where(['id_ba' => $id_ba])->first();
    }
}

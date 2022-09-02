<?php

namespace App\Models;

use CodeIgniter\Model;

class BaPembayaranModel extends Model
{
    protected $table = 'tx_ba_pembayaran';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_ba', 'karyawanap2_pb', 'jabatanap2_pb', 'karyawanaps_pb', 'karyawanaps_pb', 'no_ppn', 'tanggal_ppn',
        'harga_satuan', 'tahap_ke'
    ];

    public function getBaPembayaran($id_ba = false)
    {
        if ($id_ba == false) {
            return $this->findAll();
        }

        return $this->where(['id_ba' => $id_ba])->first();
    }
}

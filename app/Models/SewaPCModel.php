<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaPCModel extends Model
{
    protected $table         = 'tx_ba_sewapc';
    protected $primaryKey    = 'id_ba';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_pemeriksaan', 'id_pembayaran'
    ];

    public function getSewaPC()
    {
        return $this->db->table('tx_ba_sewapc')
            ->join('tx_ba_pemeriksaan', 'tx_ba_pemeriksaan.id_ba = tx_ba_sewapc.id_pemeriksaan')
            ->join('tx_ba_pembayaran', 'tx_ba_pembayaran.id_ba = tx_ba_sewapc.id_pembayaran')
            ->get()->getResultArray();
    }

    public function getData($id_ba = false)
    {
        if ($id_ba == false) {
            return $this->findAll();
        }

        return $this->where(['id_ba' => $id_ba])->first();
    }
}

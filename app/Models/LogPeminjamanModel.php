<?php

namespace App\Models;

use CodeIgniter\Model;

class LogPeminjamanModel extends Model
{
    protected $table = 'log_peminjaman';
    protected $primaryKey = 'id_log';
    protected $allowedFields = ['id_peminjam', 'jenis_peminjaman', 'id_barang_ruangan', 'tanggal_log', 'keterangan'];
}

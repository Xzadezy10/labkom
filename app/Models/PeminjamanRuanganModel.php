<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanRuanganModel extends Model
{
    protected $table = 'peminjaman_ruangan';
    protected $primaryKey = 'id_peminjaman_ruangan';
    protected $allowedFields = ['id_peminjam', 'id_ruangan', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status'];
}

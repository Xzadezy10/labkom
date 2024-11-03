<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanBarangModel extends Model
{
    protected $table = 'peminjaman_barang';
    protected $primaryKey = 'id_peminjaman_barang';
    protected $allowedFields = ['id_peminjam', 'id_barang', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status'];
}

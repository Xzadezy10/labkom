<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['name', 'email']; // Kolom yang bisa diisi
}
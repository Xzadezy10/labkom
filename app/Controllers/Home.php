<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Database\Database;
class testdb extends Controller
{
    public function index()
    {
        //return view('welcome_message');
        $db = \Config\Database::connect();
        if ($db->connID) {
            echo 'Database terhubung!';
        } else {
            echo 'Gagal terhubung ke database!';
        }
    }
}

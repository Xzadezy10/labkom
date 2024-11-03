<?php

namespace App\Controllers;

use App\Models\PeminjamanBarangModel;

class PeminjamanBarangController extends BaseController
{
    public function index()
    {
        $model = new PeminjamanBarangModel();
        $data['peminjaman'] = $model->findAll();
        return view('peminjaman_barang/index', $data);
    }

    public function create()
    {
        return view('peminjaman_barang/create');
    }

    public function store()
    {
        $model = new PeminjamanBarangModel();
        $data = $this->request->getPost();
        $model->insert($data);
        return redirect()->to('/peminjaman_barang');
    }

    public function edit($id)
    {
        $model = new PeminjamanBarangModel();
        $data['peminjaman'] = $model->find($id);
        return view('peminjaman_barang/edit', $data);
    }

    public function update($id)
    {
        $model = new PeminjamanBarangModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/peminjaman_barang');
    }

    public function delete($id)
    {
        $model = new PeminjamanBarangModel();
        $model->delete($id);
        return redirect()->to('/peminjaman_barang');
    }
}

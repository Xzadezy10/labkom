<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $model = new BarangModel();
        $data = $this->request->getPost();
        $model->insert($data);
        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $model = new BarangModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        $model = new BarangModel();
        $model->delete($id);
        return redirect()->to('/barang');
    }
}

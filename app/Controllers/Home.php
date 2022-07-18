<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Data Barang',
                'dataBarang' => $this->formModel->getBarang(),

            ];

        return view('home', $data);
    }

    public function addBarang()
    {
        $name = $this->request->getPost('name');
        $qty = $this->request->getPost('qty');
        $price = $this->request->getPost('price');

        $data = [
            'name'        => $name,
            'qty'       => $qty,
            'price'       => $price,
        ];

        $this->formModel->save($data);
        session()->setFlashdata('success', 'Tambah <b>' . $name . '</b> berhasil.');
        return redirect()->to('/');
    }

    public function editBarang($id)
    {
        $data =
            [
                'title' => 'Data Barang',
                'dataBarang' => $this->formModel->getBarang($id),

            ];


        if ($this->request->getMethod() == "post") {
            $id = $this->request->getPost('id');
            $name = $this->request->getPost('name');
            $qty = $this->request->getPost('qty');
            $price = $this->request->getPost('price');

            $data = [
                'id_barang' => $id,
                'name'        => $name,
                'qty'       => $qty,
                'price'       => $price,
            ];

            $this->formModel->save($data);
            session()->setFlashdata('success', 'Ubah <b>' . $name . '</b> berhasil.');
            return redirect()->to('/');
        }

        return view('edit', $data);
    }

    public function deleteBarang($id)
    {
        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');

        $data = [
            'id_barang'        => $id,
        ];

        $this->formModel->delete($data);
        session()->setFlashdata('success', 'Hapus <b>' . $name . '</b> berhasil.');
        return redirect()->to('/');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table                = 'barang';
    protected $primaryKey           = 'id_barang';
    protected $protectFields        = true;
    protected $allowedFields        = ['name', 'qty', 'price'];

    public function getBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where('id_barang', $id)->first();
    }
}

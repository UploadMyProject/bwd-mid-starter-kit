<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    // Karena belum pakai SQL, kita simpan data dummy di sini (sebagai Gudang Data)
    // TODO: TUGAS MAHASISWA!
    // Ubah struktur data menjadi data yang sesuai dengan produk startup kalian
    public function getDummyData()
    {
        return [
            ['id' => 1, 'name' => 'Laptop Pro', 'price' => 15000000, 'stock' => 10],
            ['id' => 2, 'name' => 'Smartphone X', 'price' => 8000000, 'stock' => 25],
            ['id' => 3, 'name' => 'Wireless Mouse', 'price' => 350000, 'stock' => 50],
        ];
    }
}
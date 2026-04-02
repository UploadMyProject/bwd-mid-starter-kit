<?php
namespace App\Controllers;
use App\Models\ProductModel; 

class Dashboard extends BaseController
{
    public function index()
    {
        // TODO: TUGAS MAHASISWA!
        // Cek session di sini. Jika session 'isLoggedIn' belum ada/false, 
        // tendang (redirect) pengguna kembali ke halaman login ('/')

        // Panggil Gudang (Model)
        $model = new ProductModel();
        
        // Siapkan data untuk dikirim ke Etalase (View)
        $data['nama_startup'] = "Startup Saya"; // Ganti dengan nama startup di README
        $data['products'] = $model->getDummyData();

        // Tampilkan Etalase (View)
        return view('dashboard_view', $data);
    }
}
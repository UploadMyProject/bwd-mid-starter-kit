<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        // Jika sudah login, tendang ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('login_view'); // Tampilkan halaman login
    }

    public function process()
    {
        // TODO: TUGAS MAHASISWA!
        // 1. Ambil 'username' dan 'password' menggunakan $this->request->getPost()
        // 2. Buat logika IF: Jika username == 'admin' dan password == 'bisnis123'
        // 3. Jika BENAR: Set session 'isLoggedIn' = true, lalu redirect ke '/dashboard'
        // 4. Jika SALAH: Redirect kembali ke halaman '/'
    }

    public function logout()
    {
        // TODO: TUGAS MAHASISWA!
        // 1. Hancurkan session menggunakan session()->destroy()
        // 2. Redirect ke halaman '/'
    }
}
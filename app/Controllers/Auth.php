<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('auth/login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'admin' && $password === 'admin123') {
            session()->set([
                'isLoggedIn' => true,
                'username'   => 'admin',
            ]);
            return redirect()->to('/dashboard');
        }

        session()->setFlashdata('error', 'Username atau password salah!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

<?php
namespace App\Controllers;
use App\Models\ProductModel;

class Dashboard extends BaseController
{
    private function checkLogin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return null;
    }

    public function index()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $model = new ProductModel();
        $data['title']    = 'Dashboard';
        $data['username'] = session()->get('username');
        $data['courses']  = $model->getDummyData();

        return view('dashboard_view', $data);
    }

    public function create()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $data['title']    = 'Tambah Kursus';
        $data['username'] = session()->get('username');

        return view('kursus/create', $data);
    }

    public function store()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $model = new ProductModel();
        $model->create([
            'judul'      => $this->request->getPost('judul'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'kategori'   => $this->request->getPost('kategori'),
            'instruktur' => $this->request->getPost('instruktur'),
            'durasi'     => $this->request->getPost('durasi'),
            'level'      => $this->request->getPost('level'),
        ]);

        session()->setFlashdata('success', 'Kursus berhasil ditambahkan!');
        return redirect()->to('/dashboard');
    }

    public function edit(int $id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $model  = new ProductModel();
        $course = $model->findById($id);

        if (!$course) {
            return redirect()->to('/dashboard');
        }

        $data['title']    = 'Edit Kursus';
        $data['username'] = session()->get('username');
        $data['course']   = $course;

        return view('kursus/edit', $data);
    }

    public function update(int $id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $model = new ProductModel();
        $model->update($id, [
            'judul'      => $this->request->getPost('judul'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'kategori'   => $this->request->getPost('kategori'),
            'instruktur' => $this->request->getPost('instruktur'),
            'durasi'     => $this->request->getPost('durasi'),
            'level'      => $this->request->getPost('level'),
        ]);

        session()->setFlashdata('success', 'Kursus berhasil diperbarui!');
        return redirect()->to('/dashboard');
    }

    public function delete(int $id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $model = new ProductModel();
        $model->delete($id);

        session()->setFlashdata('success', 'Kursus berhasil dihapus!');
        return redirect()->to('/dashboard');
    }
}

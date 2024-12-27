<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|alpha_numeric',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'ukuran' => 'required',
            'jenis' => 'required',
            'information' => 'required',
        ]);

        $validation->setErrors([
            'name' => [
                'required' => 'Nama harus diisi',
                'alpha_numeric' => 'Nama hanya boleh huruf dan angka',
            ],
            'email' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
            ],
            // Tambahkan pesan kesalahan untuk field lainnya
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/form')->withInput()->with('errors', $validation->getErrors());
        }

        $model = new FormModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address'),
            'ukuran' => $this->request->getVar('ukuran'),
            'jenis' => $this->request->getVar('jenis'),
            'information' => $this->request->getVar('information'),
        ];

        try {
            $model->save($data);
            return redirect()->route('form');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}


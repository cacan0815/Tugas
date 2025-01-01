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
            'size' => 'required',
            'type' => 'required',
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
            'size' => $this->request->getVar('size'),
            'type' => $this->request->getVar('type'),
            'information' => $this->request->getVar('information'),
        ];

        // Simpan data
        if ($model->insert($data)) {
            return redirect()->to('/form')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->to('/form')->with('error', 'Data gagal disimpan.');
        }
    }
}


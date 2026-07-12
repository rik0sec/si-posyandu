<?php

namespace App\Controllers;

use App\Models\M_user;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new M_user();
    }

    public function login()
    {
        $session = session();

        // Jika sudah login
        if ($session->get('isLoggedIn')) {
            return redirect()->to(base_url('dashboard'));
        }

        $data['title'] = 'Login - Sistem Informasi Posyandu';

        if ($this->request->getMethod() === 'POST') {

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $this->userModel->findByUsername($username);

            // cek user ada atau tidak
            if (!$user) {
                $data['error'] = 'Username tidak ditemukan!';
                return view('auth/login', $data);
            }

            // cek password (sementara plain text)
            if ($password != $user['password']) {
                $data['error'] = 'Password salah!';
                return view('auth/login', $data);
            }

            // set session
            $session->set([
                'id_user'      => $user['id_user'],
                'username'     => $user['username'],
                'nama_lengkap' => $user['nama_lengkap'],
                'role'         => $user['role'],
                'isLoggedIn'   => true,
            ]);

            return redirect()->to(base_url('dashboard'));
        }

        return view('auth/login', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah logout!');
    }
}
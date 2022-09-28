<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $session = \Config\Services::session();

        $data = [
            'title' => 'Dashboard | BA Angkasa Pura II'
        ];

        if ($session->get('user') == NULL) {
            return redirect()->to(base_url('/login'));
        } else {
            return view('pages/dashboard', $data);
        }
    }

    public function login()
    {
        $session = \Config\Services::session();

        $data = [
            'title' => 'Login Page | BA Angkasa Pura II',
            'error_message' => $session->getFlashdata('error_message')
        ];

        if ($session->get('user') == NULL) {
            return view('pages/login', $data);
        } else {
            return view('pages/dashboard', $data);
        }
    }

    public function prosesLogin()
    {
        $userid   = $this->request->getVar('userid');
        $password = $this->request->getVar('password');

        $password_sh1 = sha1($password);

        $UsersModel = new \App\Models\UsersModel();

        $user = $UsersModel->getUserLogin($userid, $password_sh1);

        $session = \Config\Services::session();
        if ($user) {
            $session->set(['user' => $user]);

            return redirect()->to(base_url('/pages/dashboard'));
        } else {
            $session->setFlashdata(['error_message' => 'Username atau password salah']);
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();

        $session->destroy();

        return redirect()->to(base_url('/login'));
    }
}

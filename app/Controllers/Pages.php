<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | BA Angkasa Pura II'
        ];

        return view('pages/dashboard', $data);
    }

    public function login()
    {
        $session = \Config\Services::session();
        return view('pages/login', ['error_message' => $session->getFlashdata('error_message')]);
    }

    public function prosesLogin()
    {
        $userid   = $this->request->getPost('userid');
        $password = $this->request->getPost('password');

        $password_sh1 = sha1($password);

        $UsersModel = new \App\Models\UsersModel();

        $user = $UsersModel->getUserLogin($userid, $password_sh1);

        $session = \Config\Services::session();
        if ($user) {
            $session->set(['user' => $user]);

            return redirect()->to('/pages/dashboard');
        } else {
            $session->setFlashdata(['error_message' => 'Id dan Password salah']);
            return redirect()->to('pages/login');
        }
    }
}

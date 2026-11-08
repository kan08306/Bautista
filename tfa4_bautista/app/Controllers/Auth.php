<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn') === true) {
            return redirect()->to(site_url('customers'));
        }

        return view('tfa4_bautista/assets/auth/login');
    }

    public function authenticate()
    {
        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');

        $rules = [
            'username' => 'required|max_length[50]',
            'password' => 'required',
        ];

        if (! $this->validateData([
            'username' => $username,
            'password' => $password,
        ], $rules)) {
            return redirect()->to(site_url('login'))
                ->with('errors', $this->validator->getErrors())
                ->with('old_username', $username);
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (
            $user === null
            || empty($user['password'])
            || ! password_verify($password, $user['password'])
        ) {
            return redirect()->to(site_url('login'))
                ->with('error', 'Invalid username or password.')
                ->with('old_username', $username);
        }

        session()->regenerate(true);
        session()->set([
            'isLoggedIn' => true,
            'user_id'    => $user['id'],
            'username'   => $user['username'],
        ]);

        return redirect()->to(site_url('customers'));
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'));
    }
}

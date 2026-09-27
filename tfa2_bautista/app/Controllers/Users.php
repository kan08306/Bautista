<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    // User Accounts page
    public function index(): string
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        $user_data = [
                'users' => $users
        ];

        return view('tfa2_bautista/pages/users', $user_data);
    }
}
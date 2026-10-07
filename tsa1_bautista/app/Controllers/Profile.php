<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();

        $data = [
            'user' => $model
                ->where('username', 'ken.anthonie.b')
                ->first(),
        ];

        return view('tsa1_bautista/pages/profile', $data);
    }
}

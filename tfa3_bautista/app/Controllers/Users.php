<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        return view('tfa3_bautista/assets/pages/users', [
            'users' => $userModel->findAll(),
        ]);
    }

    public function new(): string
    {
        return view('tfa3_bautista/assets/pages/user_new');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'full_name' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $userModel = new UserModel();
        $userModel->insert([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ]);

        return redirect()->to(site_url('users'))
            ->with('success', 'User account created successfully.');
    }

    public function edit(int $id): string
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound('User record not found.');
        }

        return view('tfa3_bautista/assets/pages/user_edit', [
            'user' => $user,
        ]);
    }

    public function update(int $id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound('User record not found.');
        }

        $rules = [
            'username' => 'required|is_unique[users.username,id,' . $id . ']',
            'full_name' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $avatar = $this->request->getFile('avatar');
        $hasNewAvatar = $avatar !== null && $avatar->getError() !== UPLOAD_ERR_NO_FILE;

        $userData = [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ];

        if ($hasNewAvatar) {
            $avatarRules = [
                'avatar' => [
                    'label' => 'Profile picture',
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'mime_in[avatar,image/jpeg,image/png]',
                    ],
                ],
            ];

            if (! $this->validate($avatarRules)) {
                return redirect()->back()->withInput();
            }

            $newName = $avatar->getRandomName();
            $uploadPath = FCPATH . 'uploads/avatars';

            if (! is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }

            $avatar->move($uploadPath, $newName);

            service('image')
                ->withFile($uploadPath . DIRECTORY_SEPARATOR . $newName)
                ->fit(300, 300, 'center')
                ->save($uploadPath . DIRECTORY_SEPARATOR . $newName);

            $userData['avatar'] = $newName;
        }

        $userModel->update($id, $userData);

        return redirect()->to(site_url('users'))
            ->with('success', 'User account updated successfully.');
    }
}

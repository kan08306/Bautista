<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use RuntimeException;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        return view('tfa4_bautista/assets/pages/users', [
            'users' => $userModel->findAll(),
        ]);
    }

    public function new(): string
    {
        return view('tfa4_bautista/assets/pages/user_new');
    }

    public function create()
    {
        $username = trim((string) $this->request->getPost('username'));
        $fullName = trim((string) $this->request->getPost('full_name'));
        $password = (string) $this->request->getPost('password');

        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
            'password'  => 'required|min_length[8]|max_length[255]',
        ];

        if (! $this->validateData([
            'username'  => $username,
            'full_name' => $fullName,
            'password'  => $password,
        ], $rules)) {
            return redirect()->back()
                ->with('errors', $this->validator->getErrors())
                ->with('old_username', $username)
                ->with('old_full_name', $fullName);
        }

        $userModel = new UserModel();
        $userModel->insert([
            'username'  => $username,
            'full_name' => $fullName,
            'password'  => password_hash($password, PASSWORD_DEFAULT),
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

        return view('tfa4_bautista/assets/pages/user_edit', [
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
            'username'  => 'required|max_length[50]|is_unique[users.username,id,' . $id . ']',
            'full_name' => 'required|max_length[100]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $userData = [
            'username'  => trim((string) $this->request->getPost('username')),
            'full_name' => trim((string) $this->request->getPost('full_name')),
        ];

        $avatar = $this->request->getFile('avatar');
        $hasNewAvatar = $avatar !== null && $avatar->getError() !== UPLOAD_ERR_NO_FILE;

        if ($hasNewAvatar) {
            $avatarRules = [
                'avatar' => [
                    'label' => 'Profile picture',
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'is_image[avatar]',
                        'mime_in[avatar,image/jpeg,image/png]',
                    ],
                ],
            ];

            if (! $this->validate($avatarRules)) {
                return redirect()->back()->withInput();
            }

            $uploadPath = FCPATH . 'uploads/avatars';

            if (! is_dir($uploadPath) && ! mkdir($uploadPath, 0775, true) && ! is_dir($uploadPath)) {
                throw new RuntimeException('Unable to create the avatar upload directory.');
            }

            $newName = $avatar->getRandomName();
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

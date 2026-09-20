<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'admin.kenb', 'full_name' => 'Ken Bautista', 'role' => 'Administrator'],
            ['username' => 'cashier.anthonieb', 'full_name' => 'Anthonie Bautista', 'role' => 'Cashier'],
            ['username' => 'cashier.aquinob', 'full_name' => 'Aquino Bautista', 'role' => 'Cashier'],
            ['username' => 'supervisor.kena', 'full_name' => 'Ken Anthonie', 'role' => 'Supervisor'],
            ['username' => 'staff.kena1', 'full_name' => 'Ken Aquino', 'role' => 'Staff'],
        ];

        return view('tfa1_bautista/pages/users', ['users' => $users]);
    }
}

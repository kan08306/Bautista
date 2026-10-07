<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tsa1_bautista/index');
    }

    public function tasks(): string
    {
        return view('tsa1_bautista/pages/tasks');
    }

    public function profile(): string
    {
        return view('tsa1_bautista/pages/profile');
    }

    public function about(): string
    {
        return view('tsa1_bautista/pages/about');
    }
}

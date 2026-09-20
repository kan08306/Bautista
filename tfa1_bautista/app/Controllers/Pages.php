<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('tfa1_bautista/index');
    }

    public function about()
    {
        return view('tfa1_bautista/pages/about');
    }

    public function users()
    {
        return view('tfa1_bautista/pages/users');
    }

    public function customers()
    {
        return view('tfa1_bautista/pages/customers');
    }
}

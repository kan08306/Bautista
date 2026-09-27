<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // Main TFA2 page
    public function home(): string
    {
        return view('tfa2_bautista/index');
    }
}

<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        return view('tfa3_bautista/index');
    }
}

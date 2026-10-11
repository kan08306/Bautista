<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about(): string
    {
        return view('tsa1_bautista/assets/pages/about');
    }
}

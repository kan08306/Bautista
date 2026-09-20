<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Ken Bautista', 'email' => 'ken.bautista@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Anthonie Bautista', 'email' => 'anthonie.bautista@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Aquino Bautista', 'email' => 'aquino.bautista@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Ken Anthonie', 'email' => 'ken.anthonie@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Ken Aquino', 'email' => 'ken.aquino@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('tfa1_bautista/pages/customers', ['customers' => $customers]);
    }
}

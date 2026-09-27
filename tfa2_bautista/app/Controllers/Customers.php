<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    // Customer Accounts page
    public function index(): string
    {
        $customerModel = new CustomerModel();
        $customers = $customerModel->findAll();

        $customer_data = [
                'customers' => $customers
        ];

        return view('tfa2_bautista/pages/customers', $customer_data);
        
    }
}
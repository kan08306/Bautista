<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        return view('tfa3_bautista/assets/pages/customers', [
            'customers' => $customerModel->findAll(),
        ]);
    }

    public function new(): string
    {
        return view('tfa3_bautista/assets/pages/customer_new');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $customerModel = new CustomerModel();
        $customerModel->insert([
            'full_name' => $this->request->getPost('full_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone') ?: null,
        ]);

        return redirect()->to(site_url('customers'))
            ->with('success', 'Customer account created successfully.');
    }

    public function edit(int $id): string
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw PageNotFoundException::forPageNotFound('Customer record not found.');
        }

        return view('tfa3_bautista/assets/pages/customer_edit', [
            'customer' => $customer,
        ]);
    }

    public function update(int $id)
    {
        $customerModel = new CustomerModel();

        if ($customerModel->find($id) === null) {
            throw PageNotFoundException::forPageNotFound('Customer record not found.');
        }

        $rules = [
            'full_name' => 'required',
            'email' => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone') ?: null,
        ]);

        return redirect()->to(site_url('customers'))
            ->with('success', 'Customer account updated successfully.');
    }
}

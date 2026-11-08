<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        return view('tfa4_bautista/assets/pages/customers', [
            'customers' => $customerModel->findAll(),
        ]);
    }

    public function new(): string
    {
        return view('tfa4_bautista/assets/pages/customer_new');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $phone = trim((string) $this->request->getPost('phone'));
        $customerModel = new CustomerModel();
        $customerModel->insert([
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'email'     => trim((string) $this->request->getPost('email')),
            'phone'     => $phone !== '' ? $phone : null,
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

        return view('tfa4_bautista/assets/pages/customer_edit', [
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
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $phone = trim((string) $this->request->getPost('phone'));
        $customerModel->update($id, [
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'email'     => trim((string) $this->request->getPost('email')),
            'phone'     => $phone !== '' ? $phone : null,
        ]);

        return redirect()->to(site_url('customers'))
            ->with('success', 'Customer account updated successfully.');
    }
}

<?php

namespace App\Controllers\Customers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class CustomersController extends BaseController
{

    public function index()
    {
        if (! service('auth')->isLoggedin() ){
            return redirect()->to('/login')->with('msg', 'You are not logged in');
        }
        $customers = model(CustomerModel::class);
        $data = [
            'customers' => $customers
                ->join('devices', 'devices.device_category = customers.customer_id', 'left')
                ->orderBy('customers.created_at', 'desc')
                ->paginate(10),
            'pager' => $customers->pager
        ];
        return view('Admin/Customers/Admin_Customers_Index_View', $data);
    }

    public function add()
    {
        helper('form');
        return view('Admin/Customers/Admin_Customers_Add_Customer');
    }

    public function store()
    {
        $customerModel = new CustomerModel();
        $data = [
            'customer_id' => $this->generated(true, $customerModel),
            'customer_name' => $this->request->getPost('customer_name'),
            'customer_phone' => $this->request->getPost('customer_phone'),
            'customer_email' => $this->request->getPost('customer_email'),
            'customer_address' => $this->request->getPost('customer_address'),
            'customer_unique_code' => $this->generated(false, $customerModel)
        ];

        $customerModel->insert($data);
        return redirect()->to('/customers')->with('msg', 'Ai adaugat un client nou cu success');
    }

    private function generated(bool $genId, CustomerModel $model)
    {
        helper('text');
        if ($genId === true)  {
            do {
                $generated = random_string(uniqid(), 16);
            } while ($model->where('customer_id', $generated)->first() != null);
        } else {
            do {
                $generated = random_string(uniqid(), 16);
            } while ($model->where('customer_unique_code', $generated)->first() != null);
        }

        return $generated;
    }

    public  function search()
    {
        $customer_name = $this->request->getGet('customer_name');
        $customer_phone = $this->request->getGet('customer_phone');
        $customer_email = $this->request->getGet('customer_email');
        $customer_unique_code = $this->request->getGet('customer_unique_code');

        $customers = model(CustomerModel::class);
        $data = [
            'customers' => $customers
                ->like('customer_name',  '%'.$customer_name.'%')
                ->like(['customer_email' => '%'.$customer_email.'%'])
                ->like(['customer_unique_code' => '%'.$customer_unique_code.'%'])
                ->like(['customer_phone' => '%'.$customer_phone.'%'])
                ->findAll()
        ];
        return view('Admin/Customers/Admin_Customers_Index_View', $data);
    }
}

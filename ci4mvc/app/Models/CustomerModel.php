<?php
namespace App\Models;

class CustomerModel extends \CodeIgniter\Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['customer_id', 'customer_name', 'customer_phone', 'customer_email', 'customer_address', 'customer_unique_code'];
//    protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = true;

    protected $validationRules = [
        'customer_name' => 'required',
    ];

    public function findByCode(string $customerUniqueCode)
    {
        return $this->where('customer_unique_code', $customerUniqueCode)->first();
    }
}
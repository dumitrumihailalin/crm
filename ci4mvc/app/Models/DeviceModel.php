<?php
namespace App\Models;

class DeviceModel extends \CodeIgniter\Model
{
    protected $table = 'devices';
    protected $primaryKey = 'device_id';
    protected $allowedFields = ['device_category', 'device_name', 'device_serial', 'device_model', 'device_battery', 'device_charger', 'device_claimed', 'device_repair', 'device_status', 'device_customer_id'];
//    protected $returnType = 'App\Entities\Customer';
    protected $useTimestamps = true;

    protected $validationRules = [
//        'name' => 'required',
//        'customer_phone' => 'required'
    ];

    public function findByCode(string $customerUniqueCode)
    {
        return $this->where('customer_unique_code', $customerUniqueCode)->first();
    }

    public function getCategoryId()
    {
        $query = $this->select('device_category');
        return $query->groupBy('device_category')->findAll();
    }
}
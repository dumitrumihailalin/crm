<?php
namespace App\Models;

class CategoryModel extends \CodeIgniter\Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_Id';
    protected $allowedFields = ['category_name', 'category_status'];
    protected $useTimestamps = true;

    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';

    public function listAll()
    {
        $db = db_connect();
        $query =  $db->query('SELECT categories.category_id, categories.category_status, categories.category_name, count(devices.device_category) as count_devices FROM `categories` LEFT JOIN devices ON categories.category_id = devices.device_category group BY categories.category_id');
        return $query->getResult();
    }
}
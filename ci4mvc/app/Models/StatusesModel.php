<?php
namespace App\Models;

class StatusesModel extends \CodeIgniter\Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'status_id';
    protected $allowedFields = ['status_name'];
    protected $useTimestamps = true;

    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';

    public function listAll()
    {
        $db = db_connect();
        $query =  $db->query('SELECT statuses.status_id, statuses.status_name, count(devices.device_status) as count_devices 
                    FROM `statuses` LEFT JOIN devices ON statuses.status_id = devices.device_status GROUP BY statuses.status_id ORDER BY  statuses.status_id desc');
        return $query->getResultObject();
    }
}
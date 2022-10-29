<?php

namespace App\Controllers\Devices;


use App\Controllers\BaseController;
use App\Libraries\GeneratePdf;
use App\Libraries\SmsO;
use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\DeviceModel;
use App\Models\StatusesModel;

class AdminDevicesController extends BaseController
{
    public function index()
    {
        if (! service('auth')->isLoggedin() ){
            return redirect()->to('/login')->with('msg', 'Autentificare');
        }
        $data = ['devices' => model(DeviceModel::class)
            ->join('categories', 'categories.category_id = devices.device_category')
            ->join('statuses', 'statuses.status_id = devices.device_status')
            ->paginate(),
            'pager' => model(DeviceModel::class)->pager];
        return view('Admin/Devices/Admin_Devices_Index_View', $data);
    }

    public function new()
    {
        return view('Admin/Devices/admin_devices_new_view');
    }


    public function add()
    {
        static::checkUser();
        $deviceModel = model(DeviceModel::class);
        $categoriesModel = model(CategoryModel::class);
        $device_customer_id = $this->request->getGet('device_customer_id');
        if(!isset($device_customer_id) || $device_customer_id == "") {
            return redirect()->to('devices');
        }
        $data = [
            'categories' => $categoriesModel->where('category_status', 1)->findAll(),
            'device_customer_id' => $device_customer_id,
            'devices' => $deviceModel
                ->join('customers', 'customers.customer_id = devices.device_customer_id')
                ->join('categories', 'categories.category_id = devices.device_category')
                ->where(['devices.device_customer_id' => $device_customer_id])
                ->findAll()
        ];
        return view('Admin/Devices/Admin_Devices_Add_View', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $deviceModel = new DeviceModel();
        $data = [
            'device_category' =>  $data['device_category'],
            'device_name' =>  $data['device_name'],
            'device_model' =>  $data['device_model'],
            'device_battery' =>  (bool)$data['device_battery'],
            'device_charger' =>  (bool)$data['device_charger'],
            'device_repair' =>  $data['device_repair'],
            'device_claimed' =>  $data['device_claimed'],
            'device_status' =>  1,
            'device_serial' => $data['device_serial'],
            'device_customer_id' => $data['device_customer_id']
        ];

        $customer = model(CustomerModel::class);
        $customer = $customer->where(['customer_id' => $data['device_customer_id']])->first();
        $deviceModel->save($data);
        $smso = new SmsO();
        $smso->sendMsg($customer['customer_phone'], $data['device_name'], $data['device_status']);

        return redirect()->to('/devices/add?device_customer_id='.$data['device_customer_id'])->with('msg', 'Dispozitivul a fost adaugat');
    }

    public function edit()
    {
        $device_id = $this->request->uri->getSegment(3);
        $data = ['device' => model(DeviceModel::class)
            ->join('categories', 'categories.category_id = devices.device_category')
            ->join('statuses', 'statuses.status_id = devices.device_status')
            ->where(['device_id' => $device_id])
            ->first(),
            'categories' => model(CategoryModel::class)->findAll(),
            'statuses' => model(StatusesModel::class)->findAll()
        ];
        return view('Admin/Devices/Admin_Devices_Edit_View', $data);
    }

    public function update()
    {
        $data = $this->request->getPost();
        $deviceModel = new DeviceModel();
        $device_id = $data['device_id'];
        unset($data['device_id']);
        $data = [
            'device_category' =>  $data['device_category'],
            'device_name' =>  $data['device_name'],
            'device_model' =>  $data['device_model'],
            'device_battery' =>  (bool)$data['device_battery'],
            'device_charger' =>  (bool)$data['device_charger'],
            'device_repair' =>  $data['device_repair'],
            'device_claimed' =>  $data['device_claimed'],
            'device_status' =>  $data['device_status'],
            'device_serial' => $data['device_serial']
        ];

        if (isset($data['send_sms']) && (bool)$data['send_sms'] === true) {
            $smso = new SmsO();
            $smso->sendMsg($data['customer_phone'], $data['device_name'], $data['device_status']);
        }

        $deviceModel->update($device_id, $data);
        return redirect()->to('/devices/edit/'.$device_id)->with('msg', 'Dispozitivul a fost actualizat');
    }

    private static function checkUser()
    {
        if(session()->has('user_id') === false)
        {
            header('Location: '. base_url('login'));
            exit;
        }
    }

    public function pdf()
    {
        $pdf = new GeneratePdf();
        $this->response->setHeader("Content-Type", "application/pdf");
        $pdf->generate();
    }

    private function assignStatus(string $status, string $phone, string $device): string
    {
        return 'Dispozitivul ' . $device .' este in stadiul de '. $status;
    }
}

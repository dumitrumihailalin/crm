<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use App\Models\DeviceModel;

class AdminController extends BaseController
{
  public function index()
  {
      $customer = model(CustomerModel::class);
      $devices = model(DeviceModel::class);
      $data = ['customers' => $customer->countAllResults(), 'devices' => $devices->countAllResults()];
      return view('Admin/admin_index_view', $data);
  }
}

<?php

namespace App\Controllers\Settings;

use App\Controllers\BaseController;

class SettingsController extends BaseController
{
    public function __construct()
    {
        helper('auth');

    }
    public function index()
    {
        return view('Admin/Settings/Admin_Settings_Index_View');
    }
}

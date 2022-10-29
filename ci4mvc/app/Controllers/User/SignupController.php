<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SignupController extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function new()
    {
        helper('form');
        return view('Users/user_sign_up');
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->userModel->insert($data);
        return redirect()->to('/login');
    }
}

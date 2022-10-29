<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        helper('form');
        return view('Users/user_login');
    }

    public function validateLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $remember_me = (bool)$this->request->getPost('remember_me');
        $auth = service('auth');

        if ($auth->login($email, $password, $remember_me)) {

            return redirect()->to("/admin")->with('msg', 'Utilizator autentificat')->withCookies();
        } else {
            return redirect()->back()->withInput()->with('msg', 'Utilizator sau parola gresite');
        }
    }

    public function delete()
    {
        service('auth')->logout();
        return redirect()->to('/')->with('msg', 'Deconectat cu succes');
    }
}

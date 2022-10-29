<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class PasswordController extends BaseController
{
    public function forgot()
    {
        return view('Password/forgot');
    }

    public function processForgot()
    {
        $userModel = new UserModel();
        $user = $userModel->findByEmail($this->request->getPost('email'));

        if ($user && $user->is_active) {
            $userModel->save($user);
        } else {
            return redirect()->back()->with('warning', 'Nici un utiliator activ cu acest email');
        }
    }
}

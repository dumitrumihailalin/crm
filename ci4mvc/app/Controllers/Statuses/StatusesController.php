<?php

namespace App\Controllers\Statuses;

use App\Controllers\BaseController;
use App\Models\StatusesModel;

class StatusesController extends BaseController
{

    public function index()
    {
        if (! service('auth')->isLoggedin() ){
            return redirect()->to('/login')->with('msg', 'Te rugan sa te autentifici');
        }
        $statusesModel = model(StatusesModel::class);
        $data = ['statuses' => $statusesModel->listAll()];
        return view('Admin/Statuses/Admin_Statuses_Index_View', $data);
    }

    public function add()
    {
        helper('form');
        return view('Admin/Statuses/Admin_Statuses_Add_View');
    }

    public function store()
    {
        $statusModel = model(StatusesModel::class);

        $data = [
            'status_name' => $this->request->getPost('status_name')
        ];

        $statusModel->insert($data);
        return redirect()->to('/statuses')->with('msg', 'Adaugat cu success');
    }

    public function edit(int $id)
    {
        $statusModel = model(StatusesModel::class);
        $data = ['status' => $statusModel->where('status_id', $id)->first()];
        return view('Admin/Statuses/Admin_Statuses_Edit_View', $data);
    }

    public function update()
    {
        $statusModel = model(StatusesModel::class);

        $data = $this->request->getPost();
        $id = $data['status_id'];
        unset($data['status_id']);
        $statusModel->update($id, $data);
        return redirect()->to('/statuses')->with('msg', 'Actualizat cu succces');
    }

    public function delete(int $id)
    {
        if (!$id) {
            return redirect()->to('/statuses')->with('msg', 'Nici o categorie specificata.');
        }

        $statusModel = model(StatusesModel::class);
        $statusModel->delete($id);

        return redirect()->to('/statuses')->with('msg', 'Sters cu succces');
    }
}

<?php

namespace App\Controllers\Categories;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\DeviceModel;

class CategoriesController extends BaseController
{

    public function index()
    {
        if (! service('auth')->isLoggedin() ){
            return redirect()->to('/login')->with('msg', 'You are not logged in');
        }
        $categories = model(CategoryModel::class)->listAll();
        $data = ['categories' => $categories];
        return view('Admin/Categories/Admin_Categories_Index_View', $data);
    }

    public function add()
    {
        helper('form');
        return view('Admin/Categories/Admin_Categories_Add_View');
    }

    public function store()
    {
        $categoryModel = new CategoryModel();
        $data = [
            'category_name' => $this->request->getPost('category_name'),
        ];

        $categoryModel->insert($data);
        return redirect()->to('/categories')->with('msg', 'A fost adaugat cu success');
    }

    public function edit(int $id)
    {
        $categories = model(CategoryModel::class);
        $data = ['categories' => $categories->where('category_id', $id)->first()];
        return view('Admin/Categories/Admin_Categories_Edit_View', $data);
    }

    public function update()
    {
        $categories = model(CategoryModel::class);
        $data = $this->request->getPost();
        $data['category_status'] = (bool)$data['category_status'];
        $id = $data['category_id'];
        unset($data['category_id']);
        $categories->update($id, $data);
        return redirect()->to('categories')->with('msg', 'Actualizat cu succces');
    }

    public function delete(int $id)
    {
        if (!$id) {
            return redirect()->to('categories')->with('msg', 'Nici o categorie specificata.');
        }
        $categories = model(CategoryModel::class);
        $categories->delete($id);
        return redirect()->to('categories')->with('msg', 'Sters cu succces');
    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NotableMatterModel;

class NotableMatters extends BaseController
{
    public function index()
    {
        $model = new NotableMatterModel();
        $data['matters'] = $model->orderBy('sort_order', 'ASC')->findAll();
        return view('admin/notable_matters/index', $data);
    }

    public function create()
    {
        return view('admin/notable_matters/form');
    }

    public function store()
    {
        $model = new NotableMatterModel();
        $model->save([
            'title'       => $this->request->getVar('title'),
            'court'       => $this->request->getVar('court'),
            'area_of_law' => $this->request->getVar('area_of_law'),
            'description' => $this->request->getVar('description'),
            'sort_order'  => $this->request->getVar('sort_order'),
            'is_active'   => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/notable-matters');
    }

    public function edit($id)
    {
        $model = new NotableMatterModel();
        $data['matter'] = $model->find($id);
        return view('admin/notable_matters/form', $data);
    }

    public function update($id)
    {
        $model = new NotableMatterModel();
        $model->update($id, [
            'title'       => $this->request->getVar('title'),
            'court'       => $this->request->getVar('court'),
            'area_of_law' => $this->request->getVar('area_of_law'),
            'description' => $this->request->getVar('description'),
            'sort_order'  => $this->request->getVar('sort_order'),
            'is_active'   => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/notable-matters');
    }

    public function delete($id)
    {
        $model = new NotableMatterModel();
        $model->delete($id);
        return redirect()->to('/admin/notable-matters');
    }
}
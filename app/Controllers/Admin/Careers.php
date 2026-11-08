<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CareerModel;

class Careers extends BaseController
{
    public function index()
    {
        $model = new CareerModel();
        $data['careers'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('admin/careers/index', $data);
    }

    public function create()
    {
        return view('admin/careers/form');
    }

    public function store()
    {
        $model = new CareerModel();
        $model->save([
            'title'       => $this->request->getVar('title'),
            'type'        => $this->request->getVar('type'),
            'description' => $this->request->getVar('description'),
            'eligibility' => $this->request->getVar('eligibility'),
            'is_active'   => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/careers');
    }

    public function edit($id)
    {
        $model = new CareerModel();
        $data['career'] = $model->find($id);
        return view('admin/careers/form', $data);
    }

    public function update($id)
    {
        $model = new CareerModel();
        $model->update($id, [
            'title'       => $this->request->getVar('title'),
            'type'        => $this->request->getVar('type'),
            'description' => $this->request->getVar('description'),
            'eligibility' => $this->request->getVar('eligibility'),
            'is_active'   => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/careers');
    }

    public function delete($id)
    {
        $model = new CareerModel();
        $model->delete($id);
        return redirect()->to('/admin/careers');
    }
}
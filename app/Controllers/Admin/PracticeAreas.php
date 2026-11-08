<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PracticeAreaModel;

class PracticeAreas extends BaseController
{
    public function index()
    {
        $model = new PracticeAreaModel();
        $data['areas'] = $model->orderBy('sort_order', 'ASC')->findAll();
        return view('admin/practice_areas/index', $data);
    }

    public function create()
    {
        return view('admin/practice_areas/form');
    }

    public function store()
    {
        $model = new PracticeAreaModel();
        $name = $this->request->getVar('name');
        
        $model->save([
            'name'              => $name,
            'slug'              => url_title($name, '-', true), // Auto-generates URL slug
            'short_description' => $this->request->getVar('short_description'),
            'full_description'  => $this->request->getVar('full_description'),
            'sort_order'        => $this->request->getVar('sort_order'),
            'is_active'         => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/practice-areas');
    }

    public function edit($id)
    {
        $model = new PracticeAreaModel();
        $data['area'] = $model->find($id);
        return view('admin/practice_areas/form', $data);
    }

    public function update($id)
    {
        $model = new PracticeAreaModel();
        $name = $this->request->getVar('name');
        
        $model->update($id, [
            'name'              => $name,
            'slug'              => url_title($name, '-', true),
            'short_description' => $this->request->getVar('short_description'),
            'full_description'  => $this->request->getVar('full_description'),
            'sort_order'        => $this->request->getVar('sort_order'),
            'is_active'         => $this->request->getVar('is_active') ? 1 : 0,
        ]);
        return redirect()->to('/admin/practice-areas');
    }

    public function delete($id)
    {
        $model = new PracticeAreaModel();
        $model->delete($id);
        return redirect()->to('/admin/practice-areas');
    }
}
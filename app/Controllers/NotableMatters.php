<?php

namespace App\Controllers;

use App\Models\NotableMatterModel;

class NotableMatters extends BaseController
{
    public function index()
    {
        $model = new NotableMatterModel();
        
        $data = [
            'title' => 'Notable Matters | LegalLords LLP',
            'meta_description' => 'A factual overview of notable matters and representative experience of LegalLords LLP.',
            'matters' => $model->where('is_active', 1)->orderBy('sort_order')->findAll(),
        ];

        return view('layouts/main', [
            'content' => view('notable_matters', $data),
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
        ]);
    }
    
        public function view($id = null)
    {
        $model = new NotableMatterModel();
        $matter = $model->find($id);

        if (!$matter) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $matter['title'] . ' | Notable Matters | LegalLords LLP',
            'meta_description' => $matter['description'],
            'matter' => $matter,
        ];

        return view('layouts/main', [
            'content' => view('notable_matter_detail', $data),
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
        ]);
    }
}
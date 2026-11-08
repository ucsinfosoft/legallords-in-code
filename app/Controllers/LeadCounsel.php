<?php

namespace App\Controllers;

use App\Models\NotableMatterModel;

class LeadCounsel extends BaseController
{
    public function index()
    {
        $matterModel = new NotableMatterModel();
        $data = [
            'title' => 'Mujeeb Ur Rehman – Lead Counsel | LegalLords LLP',
            'meta_description' => 'Profile of Mujeeb Ur Rehman, Lead Counsel at LegalLords LLP and Chairperson of Lawyers in Action. Qualifications, experience, and notable matters.',
            'notable_matters' => $matterModel->where('is_active', 1)->orderBy('sort_order')->findAll(3), // Changed to findAll(3)
        ];
        return view('layouts/main', [
            'content' => view('lead_counsel', $data),
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
        ]);
    }
}
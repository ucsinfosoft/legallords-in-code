<?php

namespace App\Controllers;

use App\Models\PracticeAreaModel;
use App\Models\NotableMatterModel;

class Home extends BaseController
{
    public function index()
    {
        $practiceModel = new PracticeAreaModel();
        $matterModel = new NotableMatterModel();
        $careerModel = new \App\Models\CareerModel(); // Add CareerModel

        $data = [
            'title' => 'LegalLords LLP | Law at Work',
            'meta_description' => 'LegalLords LLP is a Delhi-based law firm led by Lead Counsel Mujeeb Ur Rehman, offering criminal, constitutional, and human rights representation.',
            'practice_areas' => $practiceModel->where('is_active', 1)->orderBy('sort_order')->findAll(6), // Changed to 6
            'notable_matters' => $matterModel->where('is_active', 1)->orderBy('sort_order')->findAll(3),
            'latest_career' => $careerModel->where('is_active', 1)->orderBy('created_at', 'DESC')->first(), // Fetch latest
        ];

        return view('layouts/main', [
            'content' => view('home', $data),
            'title' => $data['title'],
            'meta_description' => $data['meta_description'],
        ]);
    }
}
<?php

namespace App\Controllers;

use App\Models\PageModel;
use App\Models\PracticeAreaModel;
use App\Models\CareerModel;

class Page extends BaseController
{
    public function about()
    {
        $model = new PageModel();
        $page = $model->where('slug', 'about')->first();
        return $this->renderPage($page);
    }

    public function practiceAreas()
    {
        $model = new PracticeAreaModel();
        $areas = $model->where('is_active', 1)->orderBy('sort_order')->findAll();
        $data = ['practice_areas' => $areas, 'title' => 'Practice Areas | LegalLords LLP'];
        return view('layouts/main', [
            'content' => view('practice_areas', $data),
            'title' => $data['title'],
            'meta_description' => 'Practice areas at LegalLords LLP: criminal law, human rights, constitutional law, bail, UAPA, and legal aid.',
        ]);
    }

    public function practiceArea($slug)
    {
        $model = new PracticeAreaModel();
        $area = $model->where('slug', $slug)->where('is_active', 1)->first();
        if (!$area) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = ['area' => $area, 'title' => $area['name'] . ' | LegalLords LLP'];
        return view('layouts/main', [
            'content' => view('practice_area_detail', $data),
            'title' => $data['title'],
            'meta_description' => $area['short_description'],
        ]);
    }

    public function contact()
    {
        return view('layouts/main', [
            'content' => view('contact'),
            'title' => 'Contact Us | LegalLords LLP',
            'meta_description' => 'Contact LegalLords LLP at B-71, Lane No. 7, Shaheen Bagh, Delhi-110025. Phone: 011-35978199. Email: mail@legallords.in.',
        ]);
    }

    public function disclaimer()
    {
        $model = new PageModel();
        $page = $model->where('slug', 'disclaimer')->first();
        return $this->renderPage($page);
    }

    public function privacy()
    {
        $model = new PageModel();
        $page = $model->where('slug', 'privacy')->first();
        return $this->renderPage($page);
    }

    public function terms()
    {
        $model = new PageModel();
        $page = $model->where('slug', 'terms')->first();
        return $this->renderPage($page);
    }

    public function careers()
    {
        $model = new CareerModel();
        $careers = $model->where('is_active', 1)->findAll();
        $data = ['careers' => $careers, 'title' => 'Careers & Internships | LegalLords LLP'];
        return view('layouts/main', [
            'content' => view('careers', $data),
            'title' => $data['title'],
            'meta_description' => 'Internship and career opportunities at LegalLords LLP, Delhi.',
        ]);
    }

    private function renderPage($page)
    {
        if (!$page) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('layouts/main', [
            'content' => view('page', ['page' => $page]),
            'title' => $page['title'] . ' | LegalLords LLP',
            'meta_description' => $page['meta_description'],
        ]);
    }
}
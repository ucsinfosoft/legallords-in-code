<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $data['pages'] = $db->table('pages')->get()->getResultArray();
        return view('admin/pages/index', $data);
    }

    public function edit($slug)
    {
        $db = \Config\Database::connect();
        $data['page'] = $db->table('pages')->where('slug', $slug)->get()->getRowArray();
        if (!$data['page']) { throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); }
        return view('admin/pages/form', $data);
    }

    public function update($slug)
    {
        $db = \Config\Database::connect();
        $db->table('pages')->where('slug', $slug)->update([
            'title'            => $this->request->getVar('title'),
            'meta_description' => $this->request->getVar('meta_description'),
            'content'          => $this->request->getVar('content'),
        ]);
        return redirect()->to('/admin/pages')->with('success', 'Page updated successfully!');
    }
}
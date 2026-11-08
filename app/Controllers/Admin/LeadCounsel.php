<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class LeadCounsel extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $settings = $db->table('settings')->get()->getResultArray();
        $data = [];
        foreach ($settings as $row) { $data[$row['setting_key']] = $row['setting_value']; }
        return view('admin/lead_counsel', $data);
    }

    public function update()
    {
        $db = \Config\Database::connect();
        
        // Text fields for Lead Counsel and Social Links
        $textFields = ['lc_bio', 'lc_qualifications', 'lc_experience', 'social_linkedin', 'social_twitter', 'social_instagram', 'social_facebook', 'social_youtube'];
        
        foreach ($textFields as $field) {
            $db->table('settings')->where('setting_key', $field)->update(['setting_value' => $this->request->getVar($field)]);
        }

        // File upload for profile photo
        $file = $this->request->getFile('img_profile');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $db->table('settings')->where('setting_key', 'img_profile')->update(['setting_value' => $newName]);
        }

        \Config\Services::cache()->clean();
        return redirect()->to('/admin/lead-counsel')->with('success', 'Lead Counsel Profile updated successfully!');
    }
}
<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Settings extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $settings = $db->table('settings')->get()->getResultArray();
        $data = [];
        foreach ($settings as $row) { $data[$row['setting_key']] = $row['setting_value']; }
        return view('admin/settings', $data);
    }

    public function update()
    {
        $db = \Config\Database::connect();
        
        // Text fields for global settings
        $textFields = ['site_tagline', 'hero_title', 'hero_text', 'phone', 'mobile', 'email', 'address', 'google_map_embed'];
        
        foreach ($textFields as $field) {
            $db->table('settings')->where('setting_key', $field)->update(['setting_value' => $this->request->getVar($field)]);
        }

        // File uploads (Logo & Favicon)
        $fileFields = ['img_logo', 'img_favicon'];
        foreach ($fileFields as $field) {
            $file = $this->request->getFile($field);
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads', $newName);
                $db->table('settings')->where('setting_key', $field)->update(['setting_value' => $newName]);
            }
        }

        \Config\Services::cache()->clean();
        return redirect()->to('/admin/settings')->with('success', 'Global Settings updated successfully!');
    }
}
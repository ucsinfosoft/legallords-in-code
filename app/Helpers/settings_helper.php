<?php

if (!function_exists('get_setting')) {
    function get_setting($key, $default = '') {
        $cacheKey = 'setting_' . $key;
        $cache = \Config\Services::cache();
        
        if ($val = $cache->get($cacheKey)) {
            return $val;
        }
        
        $db = \Config\Database::connect();
        $query = $db->table('settings')->where('setting_key', $key)->get();
        $row = $query->getRow();
        
        $value = $row ? $row->setting_value : $default;
        $cache->save($cacheKey, $value, 3600); // Cache for 1 hour
        
        return $value;
    }
}
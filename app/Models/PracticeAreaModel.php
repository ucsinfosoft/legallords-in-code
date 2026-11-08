<?php

namespace App\Models;

use CodeIgniter\Model;

class PracticeAreaModel extends Model
{
    protected $table = 'practice_areas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'short_description', 'full_description', 'sort_order', 'is_active'];
}
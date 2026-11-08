<?php

namespace App\Models;

use CodeIgniter\Model;

class NotableMatterModel extends Model
{
    protected $table = 'notable_matters';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'court', 'area_of_law', 'description', 'sort_order', 'is_active'];
}
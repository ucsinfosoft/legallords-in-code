<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'careers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'type', 'description', 'eligibility', 'is_active'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['slug', 'title', 'meta_description', 'content'];
    protected $useTimestamps = true;
}
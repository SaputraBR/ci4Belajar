<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'belajar';
    protected $primaryKey = 'id_post';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'content', 'author', 'status', 'gambar', 'kategori', 'slug'];
}


?>
<?php
namespace App\Models;

use CodeIgniter\Model;

class SearchModel extends Model
    {
        protected $table = 'belajar';

        public function search($key)
        {
            return $this->table('belajar')->like('content', $key);
        }
    }
?>
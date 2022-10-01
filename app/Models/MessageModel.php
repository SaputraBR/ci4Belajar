<?php
namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
    {
        protected $table = 'user';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;
        protected $allowedFields = ['nama', 'email', 'no_telepon', 'message', 'tipe', 'id_post', 'id_main'];
    }
?>
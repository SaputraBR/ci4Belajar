<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('user', [
            'id_post INT(5) null',
            'id_main INT(5)'
        ]);
    }

    public function down()
    {
        $this->forge-dropColumn('user', ['id_post','id_main']);
    }
}

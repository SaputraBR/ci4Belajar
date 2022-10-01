<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'auto_increment'    => true,
                'unsigned'          => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type'  => 'VARCHAR',
                'constraint' => 255
            ],
            'no_telepon' => [
                'type' => 'INT',
                'constraint' => 15,
                'unsigned' => true
            ],
            'message' => [
                'type' => 'TEXT',
                'null' =>  true
            ],
            'tipe VARCHAR(100)',
            'dibuat DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}

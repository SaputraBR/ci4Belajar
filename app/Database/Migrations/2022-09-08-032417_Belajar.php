<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Belajar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
			'gambar'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true,
			],
			'kategori' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'slug VARCHAR(100) UNIQUE',
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('belajar', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('belajar');
	}
}

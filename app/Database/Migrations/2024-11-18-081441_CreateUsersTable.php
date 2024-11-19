<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
			'first_name' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
			'last_name' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
			'email' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
			'password' => ['type' => 'TEXT', 'null' => false],
			'is_active' => ['type' => 'BOOLEAN', 'null' => false, 'default' => 1],
			'deleted_at' => ['type' => 'DATETIME', 'null' => true, 'default' => NULL],
			'created_at datetime default current_timestamp NOT NULL',
			'updated_date datetime default current_timestamp on update current_timestamp NOT NULL',
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
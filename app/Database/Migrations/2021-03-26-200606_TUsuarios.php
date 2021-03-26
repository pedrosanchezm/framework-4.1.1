<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'Id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'Nombre'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'Apellido' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'Correo' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
		]);
		$this->forge->addKey('Id', true);
		$this->forge->createTable('t_usuarios');
	}

	public function down()
	{
		$this->forge->dropTable('t_usuarios');
	}
}

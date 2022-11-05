<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // tabel users
        $this->forge->addField([
            'id'       => [
                'type'           => 'INT',
                'constraint'     => 7,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'foto'     => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nama'     => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'email'    => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'telepon'  => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
       
    }
}

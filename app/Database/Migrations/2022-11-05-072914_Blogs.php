<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blogs extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'blog_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'blog_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'blog_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'blog_feature_image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
         $this->forge->addKey('blog_id', true);
        $this->forge->createTable('Blogs');
    }

    public function down()
    {
        //
    }
}

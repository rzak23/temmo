<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTmPost extends Migration
{
    public function up()
    {
        $fields = [
            'post_id'  => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'user_id' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'post_text' => [
                'type' => 'text',
                'null' => false
            ],
            'post_tgl_created' => [
                'type' => 'timestamp',
                'null' => false
            ],
            'post_tgl_updated' => [
                'type' => 'timestamp',
                'null' => false
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('post_id');
        $this->forge->addForeignKey('user_id', 'tm_user', 'user_id', 'no action', 'cascade', 'user_post_key');
        $this->forge->createTable('tm_post');
    }

    public function down()
    {
        $this->forge->dropTable('tm_post');
    }
}

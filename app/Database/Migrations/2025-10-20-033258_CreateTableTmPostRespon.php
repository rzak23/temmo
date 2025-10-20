<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTmPostRespon extends Migration
{
    public function up()
    {
        $fields = [
            'respon_id' => [
                'type' => 'int',
                'auto_increment' => true,
                'null' => false
            ],
            'post_id' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'user_id' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'respon_text' => [
                'type' => 'text',
                'null' => false
            ],
            'respon_tgl_created' => [
                'type' => 'timestamp',
                'null' => false
            ],
            'respon_tgl_updated' => [
                'type' => 'timestamp',
                'null' => false
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('respon_id');
        $this->forge->addForeignKey('post_id', 'tm_post', 'post_id', 'no action', 'cascade', 'komentar_posting');
        $this->forge->addForeignKey('user_id', 'tm_user', 'user_id', 'no action', 'cascade', 'komentar_user');
        $this->forge->createTable('tm_post_respon');
    }

    public function down()
    {
        $this->forge->dropTable('tm_post_respon');
    }
}

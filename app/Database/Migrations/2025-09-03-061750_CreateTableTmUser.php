<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTmUser extends Migration
{
    public function up()
    {
        $fields = [
            'user_id' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'user_nama' => [
                'type' => 'varchar',
                'constraint' => 256,
                'null' => false
            ],
            'user_email' => [
                'type' => 'varchar',
                'constraint' => 256,
                'null' => false
            ],
            'user_idtm' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false
            ],
            'user_password' => [
                'type' => 'varchar',
                'constraint' => 256,
                'null' => false
            ],
            'user_tgl_created' => [
                'type' => 'timestamp',
                'null' => false
            ],
            'user_tgl_updated' => [
                'type' => 'timestamp',
                'null' => false
            ]
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('tm_user');
    }

    public function down()
    {
        $this->forge->dropTable('tm_user');
    }
}

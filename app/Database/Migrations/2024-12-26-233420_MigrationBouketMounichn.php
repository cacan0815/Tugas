<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationBouketMounichan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constrain'         => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'phone' => [
                'type'              => 'VARCHAR',
                'constraint'        => 20,
            ],
            'address' => [
                'type'              => 'TEXT',
            ],
            'size' => [
                'type'              => 'ENUM',
                'constraint'        => ['small', 'medium', 'large'],
            ],
            'type' => [
                'type'              => 'ENUM',
                'constraint'        => ['snack', 'flower', 'money'],
            ],
            'information' => [
                'type'              => 'TEXT',
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('bouket_mounichan');
    }

    public function down()
    {
        $this->forge->dropTable('bouket_mounichan');
    }
}

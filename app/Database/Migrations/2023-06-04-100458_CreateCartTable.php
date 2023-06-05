<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCartTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cart_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'       => true,
            ],
            'cart_products' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_on' => [
                'type' => 'DATETIME',
            ],
            'updated_on' => [
                'type' => 'DATETIME',
            ],
            'deleted_on' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cart_id', true);
        $this->forge->createTable('carts');
    }

    public function down()
    {
        $this->forge->dropTable('carts');
    }
}

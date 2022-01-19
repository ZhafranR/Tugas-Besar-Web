<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up(){

        $this->forge->addField([
            'iduser'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 8,
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('iduser', TRUE);

        // Membuat tabel news
        $this->forge->createTable('user', TRUE);
    }

    //-------------------------------------------------------

public function down()
{
    // menghapus tabel news
    $this->forge->dropTable('user');
}
}

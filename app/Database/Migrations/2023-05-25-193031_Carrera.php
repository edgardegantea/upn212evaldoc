<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carrera extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 255],
            'descripcion'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'creditos'      => ['type' => 'int']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('carreras', true);
    }

    public function down()
    {
        $this->forge->dropTable('carreras', true);
    }
}

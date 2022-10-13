<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       =>['type'=>'int', 'length'=>'10', 'null'=>false, 'unsigned'=>true, 'auto_increment'=>true ],
            'nama'      =>['type'=>'varchar', 'lenght'=>'30', 'null'=>false ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createtable('Kategori');
    }

    public function down()
    {
        $this->forge->droptable('Kategori');
    }
}

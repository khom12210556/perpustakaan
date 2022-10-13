<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bahasa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       =>['type'=>'int', 'length'=>'10', 'null'=>false, 'unsigned'=>true, 'auto_increment'=>true ],
            'kode'      =>['type'=>'varchar', 'lenght'=>'2', 'null'=>false ],
            'nama'     =>['type'=>'varchar', 'lenght'=>'50', 'null'=>false ],
        ]);
        $this->forge->addPrimaryKey('kode');
        $this->forge->createtable('Bahasa');
    }

    public function down()
    {
        $this->forge->droptable('Bahasa');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Klasifikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       =>['type'=>'int', 'length'=>'10', 'null'=>false, 'unsigned'=>true, 'auto_increment'=>true ],
            'ddc'      =>['type'=>'varchar', 'lenght'=>'12', 'null'=>false ],
            'nama'     =>['type'=>'varchar', 'lenght'=>'50', 'null'=>false ],
        ]);
        $this->forge->addPrimaryKey('id'); 
        $this->forge->createtable('Klasifikasi');
    }

    public function down()
    {
        $this->forge->droptable('Klasifikasi');
    }
}

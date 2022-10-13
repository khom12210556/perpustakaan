<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penerbit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       =>['type'=>'int', 'length'=>'10', 'null'=>false, 'unsigned'=>false, 'auto_increment'=>false ],
            'nama'      =>['type'=>'varchar', 'lenght'=>'100', 'null'=>false ],
            'kota'       =>['type'=>'varchar', 'length'=>'100', 'null'=>true ],
            'negara'      =>['type'=>'varchar', 'lenght'=>'100', 'null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createtable('Penerbit');
    }

    public function down()
    {
        $this->forge->droptable('Penerbit');
    }
}

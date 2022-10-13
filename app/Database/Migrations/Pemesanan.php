<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
       $this->forge->addField([
        'id'=>  ['type' =>'int','constraint'=>10,   'null'=>false,  'unsigned'=>true,    'auto_increment'=>true,],
        'tgl_awal'=> ['type'=>'date', 'null'=>false],
        'tgl_akhir'=>  ['type'=>'date'],
        'koleksi_id'=>  ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
        'anggota_id'=>  ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
        'status_pesan' => ['type'=>'enum("B","O"","X")'],
        'created_at'=>  ['type'=>'datetime', 'null'=>false],
        'updated_at'=>  ['type'=>'datetime'],
        'deleted_at'=>  ['type'=>'datetime'], 
       ]) ;
       $this->forge->addPrimaryKey('id');
       $this->forge->createTable('Pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('Pemesanan');
    }
}

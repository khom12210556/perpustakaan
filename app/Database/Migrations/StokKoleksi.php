<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokKoleksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'int','constraint'=>10],
            'koleksi_id'=> ['type'=>'int','constraint'=>10],
            'nomor'=>   ['type'=>'int','constraint'=>10],
            'status_tersedia'=> ['type'=>'enum("A","P","R","H")'],
            'anggota_id'=>  ['type'=>'int','constraint'=>10],
            'pustakawan_id'=>   ['type'=>'int','constraint'=>10],
            'created_at'=>  ['type'=>'datetime'],
            'deleted_id'=>  ['type'=>'datetime'],
        ]);
        $this->forge->createtable('stok_Koleksi');
    }
    

    public function down()
    {
        //
    }
}

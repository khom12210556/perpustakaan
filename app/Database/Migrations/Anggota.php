<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            =>  ['type'=>'int','constraint'=> 10],
            'nama_depan'    =>  ['type'=>'varchar', 'constraint'=> 50],
            'nama_belakang' =>  ['type'=>'varchar', 'constraint'=> 50],
            'email'         =>  ['type'=>'varchar', 'constraint'=> 128],
            'nohp'          =>  ['type'=>'varchar', 'constraint'=> 16],
            'alamat'        =>  ['type'=>'varchar','contstraint'=> 255],
            'kota'          =>  ['type'=>'varchar','constraint'=> 60],
            'gender'        =>  ['type'=>'enum("P" , "L")'],
            'foto'          =>  ['type'=>'varchar','constraint'=> 255],
            'tgl_daftar'    =>  ['type'=>'date'],
            'status_aktif'  =>  ['type'=>'enum("A","N")'],
            'berlaku_awal'  =>  ['type'=>'date'],
            'berlaku_akhir' =>  ['type'=>'date'],
            'created_at'   =>  ['type'=>'datetime'],
            'updated_at'    =>  ['type'=>'datetime'],
            'deleted_at'    =>  ['type'=>'datetime'],
        ]);
        $this->forge->createTable('Anggota');
}

    public function down()
    {
        $this->forge->droptable('Anggota');
    }
}

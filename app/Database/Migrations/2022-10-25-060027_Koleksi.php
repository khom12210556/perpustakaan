<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'int','constraint'=>10,'unsigned'=>true,'auto_increment'=>true],
            'judul' => ['type'=>'varchar', 'constraint'=>255, 'null'=>false],
            'jilid' => ['type'=>'varchar', 'constraint'=>20, 'null'=>true],
            'edisi' => ['type'=>'varchar', 'constraint'=>80, 'null'=>true],
            'penerbit_id' => ['type'=>'int','constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'penulis' => ['type'=>'varchar', 'constraint'=>155, 'null'=>true],
            'thn_terbit' => ['type'=>'year', 'constraint'=>4],
            'klasifikasi_id' => ['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'jenis_id' => ['type'=>'int','constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'jml_halaman' => ['type'=>'int', 'constraint'=>10, 'null'=>true],
            'isbn' => ['type'=>'varchar','constraint'=>20, 'null'=>true],
            'bahasa_id' => ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'stok' => ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'eksemplar' => ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'kategori_id' => ['type'=>'int','constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'pustakawan_id' => ['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'created_at' => ['type'=>'datetime', 'null'=>true],
            'updated_at' => ['type'=>'datetime', 'null'=>true],
            'deleted_at' => ['type'=>'datetime', 'null'=>true],

        ]);
        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('penerbit_id', 'penerbit', 'id', 'cascade','set null');
        // $this->forge->addForeignKey('klasifikasi_id', 'klasifikasi', 'id', 'cascade');
        // $this->forge->addForeignKey('kategori_id', 'kategori', 'id', 'cascade');
         $this->forge->addForeignKey('pustakawan_id', 'pustakawan', 'id', 'cascade');
         $this->forge->createTable('koleksi');

    }

    public function down()
    {
        $this->forge->dropTable('koleksi');
    }
}

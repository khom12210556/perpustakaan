<?php

namespace App\Database\Seeds;

use App\Models\KoleksiModel;
use CodeIgniter\Database\Seeder;

class KoleksiSeeder extends Seeder
{
    public function run()
    {
        $id = (new KoleksiModel())->insert([
            'judul' => 'bumi',
            'jilid' => '2',
            'edisi' => '1',
            'penerbit_id' => '',
            'penulis' => 'tereliye',
            'thn_terbit' => '2001',
            'klasifikasi_id' => '',
            'jenis_id' => '',
            'jml_halaman' => '450',
            'isbn' => '12',
            'bahasa_id' => '',
            'stok' => '900',
            'eksemplar' => '1',
            'kategori_id' => '',
            'pustakawan_id' => '',
        ]);
        echo "hasil id =$id";
    //    $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('penerbit_id', 'penerbit', 'id', 'cascade','set null');
        // $this->forge->addForeignKey('klasifikasi_id', 'klasifikasi', 'id', 'cascade');
        // $this->forge->addForeignKey('kategori_id', 'kategori', 'id', 'cascade');
      //   $this->forge->addForeignKey('pustakawan_id', 'pustakawan', 'id', 'cascade');
        //  $this->forge->createTable('koleksi');
    }
}

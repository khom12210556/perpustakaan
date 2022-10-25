<?php

namespace App\Database\Seeds;

use App\Models\PustakawanModel;
use CodeIgniter\Database\Seeder;

class PustakawanSeeder extends Seeder
{
    public function run()
    {
        $id = (new PustakawanModel())->insert([
            'nama_lengkap' => 'Khomarul',
            'gender' => 'L',
            'tgl_lhr' => '2001,08,31',
            'level' => 'P',
            'email' => 'khomarul@gmail.com',
            'sandi' => '12345',
            'nohp' => '087845010556',
            'alamat' => 'Pontianak utara',
            'kota' => 'Pontianak',
            'token_reset' => '123'
        ]);
        echo "hasil id = $id";
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KoleksiModel;
use CodeIgniter\Email\Email;
use Config\Email as ConfigEmail;

class KoleksiController extends BaseController
{
    public function login()
    {
        $email          = $this->request->getPost('email');
        $password       = $this->request->getPost('sandi');

        $koleksi        = (new KoleksiModel())->where('email', $email)->first();

        if($koleksi == null){
            return $this->response->setJSON(['message'=>'email tidak terdaftar'])
                        ->setStatusCode(404);
        }

    $cekPassword = password_verify($password, $koleksi['sandi']);
    if($cekPassword == false){
        return $this->response->setJSON(['message'=>'email dan sandi tidak cocok'])
                    ->setStatusCode(403);
    } 
    $this->session->set('koleksi', $koleksi);
    return $this->response->setJSON(['message'=>"selamat datang {$koleksi['nama']}" ])   
                ->setStatusCode((200));     
    }
    public function viewLogin(){
        return view('login');
    }

    public function lupaPassword(){
        $_email = $this->request->getPost('email');

        $koleksi = (new KoleksiModel())->where('email', $_email)->first();

        if($koleksi == null){
            return $this->response->setJSON(['message'=>'Email tidak terdaftar'])
                        ->setStatusCode(404);
        }

        $sandibaru = substr(md5(date('Y-m-dH:i:s')),5,5);
        $koleksi['sandi'] = password_hash($sandibaru, PASSWORD_BCRYPT);
        $r = (new KoleksiModel())->update($koleksi['id'], $koleksi);
        
        if($r == false){
            return $this->response->setJSON(['message'=>'gagal merubah sandi'])
                        ->setStatusCode(502);
        }

        $email = new Email(new ConfigEmail());
        $email->setFrom('khomarularifin07@gmail.com', 'sistem arsip Digital');
        $email->setTo ($koleksi['email']);
        $email->setSubject('rest Sandi Pengguna');
        $email->setMessage("Hallo {$koleksi['nama']} telah meminta reset baru. Reset baru kamu adalah <b>$sandibaru</b>");
        $r = $email->send();

        if($r == true){
            return $this->response->setJSON(['message'=>"Sandi baru sudah di kirim ke alamat email $_email"])
                        ->setStatusCode(200);
        }else{
            return $this->response->setJSON(['message'=>"Maaf ada kesalahan pengiriman email ke $_email"])
                        ->setStatusCode(500);
        }
    }

    public function viewLupaPassword(){
        return view('lupa_password');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('login');
    }

    public function index(){
        
    }
}

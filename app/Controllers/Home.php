<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $userModel;
    private $session;
    public function __construct()
    {
        $this ->userModel = new \App\Models\user();
        $this ->session = \Config\Services::session();
    }
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function logout(){
        return view('login');
        // $this->session->destroy();
        // return redirect()->to(base_url("/"));
    }
    public function insert_user()
    {
        $user = $this->request->getPost('user');
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');
        $role = $this->request->getPost('id_role');

        //enkripsi password
        $pass_en =password_hash($pass, PASSWORD_DEFAULT);
        $data = 
        ([
            "nama_user" => $user,
            "email" => $email,
            "password" => $pass_en,
            "id_role" => $role
        ]);

        $tambah = $this->userModel->insert($data);

        //jika data berhasil diinput
        if($tambah){
            return redirect()->to(base_url("/"));
        }
        else{
            return redirect()->to(base_url("/register"));
        }
    }
    public function auth()
    {
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');

        $cek_data = $this->userModel->where("email", $email)->first();

        //jika data ditemukan
        if($cek_data){
            // seleksi role
            if($cek_data->id_role==1){
                // ke halaman admin
                return view('admin/halaman_admin');
            }
            else if($cek_data->id_role==2){
                // ke halaman piket
                return view('piket/halaman_piket');
            }
            else{
                //halaman pegawai
                return view('/halaman_pegawai');
            }
        }
    }
}

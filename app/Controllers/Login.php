<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Login extends BaseController
{
    public function index()
    {
        
        helper(['form']);
        echo view('admin_login');

    }

    public function auth()
    {
        $login = new LoginModel;
        $name = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $loged = $login->where(['name' => $name])->first();

        if($loged){
            $pass = $loged['password'];

            if(password_verify($password, $pass)){
                session()->set([
                    'username' => $loged['name'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/cms'));
            } else {
                session()->setFlashdata('error', 'Data yang anda masukkan salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Data yang anda masukkan salah!');
            return redirect()->back();
        }

    }

    public function register()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[4]|max_length[20]|is_unique[admin.name]',
            'password' => 'required|min_length[4]|max_length[100]',]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            
            $login = new LoginModel();
            $data['admin'] = $login->findAll();
            $login->insert([
                'name' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)//password encrypt = 'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT0)
            ]);

            return redirect()->to('/cms/register')->with("berhasil", "Data user berhasil disimpan");
        }
        echo view('register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

?>
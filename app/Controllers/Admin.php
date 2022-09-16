<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Admin extends BaseController
{
    public function admin()
    {
        $admin = new AdminModel();
        $data['admin'] = $admin->findAll();
        echo view('admin_post', $data);
    }   

    public function preview($id)
    {
        $admin = new AdminModel();
        $data['belajar'] = $admin->where('id', $id)->first();

        if(!$data['belajar']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('post', $data);
    }

    public function create()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $validation->setRules(['gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,6096]']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $belajar = new AdminModel();
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/img');
            $belajar->insert([
                "judul" => $this->request->getPost('judul'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('judul'), '-', TRUE),
                "kategori" => $this->request->getPost('kategori'),
                "gambar" => $upload->getName()
            ]);

            return redirect()->to('../cms')->with("berhasil","Data berhasil disimpan");
        }
        echo view('admin_new');
    }

    public function edit($id)
    {
        $admin = new AdminModel();
        $data['belajar'] = $admin->where('id', $id)->first();
        $validation = \Config\Services::validation();
        $validation->setRules(['gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,6096]']);
        $validation->setRules([
            'id' => 'required',
            'judul' => 'required'
        ]);
        $errors = $validation->getErrors();
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $data = $admin->find($id);
            $img = $data['gambar'];
            if (file_exists('../public/img/'.$img)) {
                unlink('../public/img/'.$img);
            }
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/img');
            $admin->update($id,[
                "judul" => $this->request->getPost('judul'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "kategori" => $this->request->getPost('kategori'),
                "gambar" => $upload->getName()
            ]);
            return redirect()->to('../cms')->with("berhasil","Data berhasil diubah");
        }
        echo view('admin_edit', $data);
    }

    public function delete($id)
    {
        $admin = new AdminModel();
        $data = $admin->find($id);
        $img = $data['gambar'];
        if(file_exists('../public/img/'.$img));
        {
            unlink('../public/img/'.$img);
        }
        $admin->delete($id);
        return redirect()->to('../cms')->with("berhasil","Data berhasil dihapus");
    }
}
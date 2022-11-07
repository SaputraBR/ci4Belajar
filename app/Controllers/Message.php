<?php
namespace App\Controllers;

use App\Models\MessageModel;
use Codeigniter\Exceptions\PageNotFoundException;

class Message extends BaseController
{
    public function contact()
    {
        echo view('contact');
    }
    
    public function pesan()
    {
        $model = new MessageModel();
        $data['user'] = $model->findAll();
        $model->insert([
            'tipe' => $this->request->getPost('tipe'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_telepon' => $this->request->getPost('notelp'),
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->to('/contact')->with('berhasil', 'Berhasil mengirim pesan!');
    }

    public function message()
    {
        $model = new MessageModel();
        $data['user'] = $model->where('tipe', 'pesan_user')->findAll();
        echo view('admin_msg', $data);
    }

    public function detail($id)
    {
        $model = new MessageModel();
        $data['user'] = $model->where('id_comment', $id)->first();
        echo view('message_detail', $data);
    }

    public function hapus($id)
    {
        $model = new MessageModel();
        $data['user'] = $model->where('id_comment', $id);
        $data['user']->delete();

        return redirect()->to('cms/message')->with("berhasil","Data berhasil dihapus");
    }
}